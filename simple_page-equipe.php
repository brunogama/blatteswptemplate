<?php
/*
Template Name: Equipe

*/

get_header();

if (have_posts()): while(have_posts()): the_post(); 
?>

	<h2><?php the_title(); ?></h2>
	<div class="hr h2"><hr /></div>
	<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
	<h2>Ocorreu um Erro</h2>
	<p>Nenhum post foi encontrado.</p>
<?php endif; ?>

<ul id="equipe_list" class="navi">
	<li><a rel="#panes" id="t1" href="#">Sérgio Blattes</a></li>
	<li><a rel="#panes" id="t2" href="#">Ângela Zamberlan</a></li>
	<li><a rel="#panes" id="t3" href="#">Ricardo Blattes</a></li>
	<li><a rel="#panes" id="t4" href="#">Giovane Dalcol</a></li>
	<li><a rel="#panes" id="t5" href="#">Gabriela Albarello Friedrich</a></li>
	<li><a rel="#panes" id="t6" href="#">Caroline Stecca</a></li>

</ul>

	<div id="panes" class="scrollable equipe">
		<a class="custom next browse right"></a><!-- "next page" action -->
		<a class="custom prev browse left"></a><!-- "previous page" action -->
		<div class="items">	
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/img/equipe-2012/sergio.jpg" alt="" />
				<p class="nome"><strong>Sérgio Blattes</strong></p>
				<p><strong>OAB-RS 9.636</strong></p>
				<p>Sócio-fundador de Blattes Advogados, Conselheiro Seccional da OAB-RS, Presidente da Comissão de Fiscalização do Exercício Profissional da OAB-RS, Professor de Direito Penal e Processual Penal da UNIFRA, Procurador do IPERGS 1981-1995, Diretor de Recursos Humanos do Banrisul 1983-1986.</p>
				<p>É membro do Conselho Curador do Hospital de Caridade Astrogildo de Azevedo e do Conselho Curador do Banco da Esperança da Arquidiocese de Santa Maria, dentre outras atividades comunitárias.</p>
				<p>Exerce a advocacia desde 1976, ano de sua formatura em Direito na Universidade Federal de Santa Maria.</p>
			</div><!-- sergio-blattes -->

			<div>
				<img src="<?php bloginfo('template_directory'); ?>/img/equipe-2012/angela.jpg" alt="" />
				<p class="nome"><strong>Ângela Zamberlan</strong></p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
				<p><strong>OAB-RS 60.342</strong></p>
				<p>Desde 2000 em Blattes Advogados, tornou-se Advogada-Sócia em 2006.</p>
				<p>Formada pela Universidade Federal de Santa Maria, Pós graduada em Direito Processual pela FADISMA, e em Direito e Processo do Trabalho pela Universidade Anhanguera- Uniderp.</p>
				<p>Presidente da Comissão do Jovem Advogado da OAB - Subseção de Santa Maria, gestão 2007/2009.</p>
				<p>Italiano fluente, Inglês intermediário.</p>
			</div><!-- angela-zamberlan -->

			<div>
				<img src="<?php bloginfo('template_directory'); ?>/img/equipe-2012/ricardo.jpg" alt="" />
				<p class="nome"><strong>Ricardo Blattes</strong></p>
				<p><strong>OAB-RS 63.112</strong></p>
				<p>Sócio Administrador de Blattes Advogados, com formação em Direito e Ciências Contábeis pela Universidade Federal de Santa Maria. Consultor UNESCO/PNUD – Programa das Nações Unidas para o Desenvolvimento junto ao Ministério da Educação (Brasília 2005/2007); Alumnus AIESEC no Brasil e Canadá (2008); MBA Marketing Estratégico ESPM (2009/2010) e Pós-Graduação em Direito do Trabalho e Previdenciário IDC (em andamento).</p>
				<p>Vice-Presidente Regional da FEDERASUL, Membro do Conselho de Administração da CACISM, Coordenador da Junior Achievement em Santa Maria.</p>
				<p>Experiência em Relações Governamentais e Terceiro Setor.</p>
				<p>Inglês fluente.</p>
			</div><!-- ricardo blattes -->

			<div>
				<img src="<?php bloginfo('template_directory'); ?>/img/equipe-2012/giovane.jpg" alt="" />
				<p class="nome"><strong>Giovane Dalcol</strong></p>
				<p><strong>OAB-RS 81.189</strong></p>
				<p>Advogado Associado</p>
				<p>Graduação em Direito pela UNIFRA.</p>
				<p>Extensão de Prática Previdenciária – Faculdade IDC.</p>
				<p>Atua nas áreas de Direito Civil e Previdenciário.</p>
			</div><!-- giovane-dalcol -->

			<div>
				<img src="<?php bloginfo('template_directory'); ?>/img/equipe-2012/gabriela.jpg" alt="" />
				<p class="nome"><strong>Gabriela Albarello Friedrich</strong></p>
				<p><strong>OAB-RS 82.061</strong></p>
				<p>Advogada Associada</p>
				<p>Graduada com Láurea Acadêmica pela Universidade Federal de Santa Maria – UFSM.</p>
				<p>Pós-graduanda em Direito Público pela Universidade Anhanguera-Uniderp.</p>
				<p>Atua nas áreas de Direito Civil e Administrativo.</p>
			</div><!-- amanda-rossa -->
			
			<div>
				<img src="<?php bloginfo('template_directory'); ?>/img/equipe-2012/caroline.jpg" alt="" />
				<p class="nome"><strong>Caroline Stecca</strong></p>
				<p><strong>OAB-RS 82.299</strong></p>
				<p>Advogada Associada</p>
				<p>Graduação em Direito pela Universidade de Santa Cruz do Sul - UNISC – Setembro 2003.</p>
				<p>Especialização em Gerenciamento de Empresas e Gestão Organizacional (Harrods Management Program - Londres / Inglaterra) – Dezembro 2005.</p>
				<p>Pós Graduação (em andamento) em Direito do Trabalho e Previdenciário IDC.</p>
				<p>Atua na área de Direito Previdenciário e do Trabalho.</p>
				<p>Inglês (fluente) , Italiano (avançado), Espanhol (avançado).</p>
			</div>
		</div> <!-- .items -->
	</div> <!-- .scrollable -->



<script type="text/javascript" charset="utf-8">
	$(function() {
		$('a[rel]').overlay({
			closeOnClick: true,
			closeOnEsc: true,
		});
		// initialize scrollable
		$(".scrollable").scrollable({ circular: true }).navigator({
			navi: "#equipe_list",
			naviItem: 'a',
		});
	});
</script>

<?php get_footer(); ?>
