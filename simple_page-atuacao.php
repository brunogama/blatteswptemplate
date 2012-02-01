<?php
/*
Template Name: Atuação

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
<ul class="navi" id="equipe_list">
	<li><a href="#" rel="#panes">Direito Penal</a></li>
	<li><a href="#" rel="#panes">Direito Trabalhista</a></li>
	<li><a href="#" rel="#panes">Direito Cível</a></li>
	<li><a href="#" rel="#panes">Direito Previdenciário</a></li>
	<li><a href="#" rel="#panes">Direito Administrativo</a></li>
	<li><a href="#" rel="#panes">Direito Eleitoral</a></li>
	<li><a href="#" rel="#panes">Terceiro Setor</a></li>
	<li><a href="#" rel="#panes">Direito Empresarial</a></li>
</ul>
<div id="panes" class="scrollable atuacao">
	<a class="custom next browse right"></a><!-- "next page" action -->
	<a class="custom prev browse left"></a><!-- "previous page" action -->
	<div class="items">	
		<div>
			<p><strong>Direito Penal</strong></p>
			<div class="hr h2"><hr /></div>
			<div class="description">
				<p>O Direito Penal (ou Criminal) é o ramo do direito público que estabelece quais os comportamentos humanos que são considerados criminosos, e quais as sanções que lhes são aplicáveis.</p>
				<p>O escritório Blattes Advogados atua na defesa de Crimes contra a pessoa (homicídio; aborto; lesões corporais; violência doméstica), Crimes contra a honra (calúnia; difamação; injúria), Crimes contra o Patrimônio, Crimes ambientais (contra a fauna e a flora; crimes de poluição e contra o ordenamento urbano e o patrimônio cultural), Crimes de trânsito (homicídio de trânsito ou lesão), Crimes previstos na Lei Anti-Tóxico, Crimes Licitatórios, Crimes Falimentares, Crimes contra a Ordem Econômica, Crimes Societários, Crimes de Informática, Crimes contra o Sistema Financeiro Nacional, Crimes contra o Consumidor, Crimes contra as Finanças Públicas, Crimes de Responsabilidade de Agentes Públicos, e Tribunal do Juri.</p>
				<p>Além da defesa judicial em todas as instâncias (TJRS, TRF4, STJ e STF), atua na advocacia preventiva através de assessoria jurídica.</p>
			</div>
		</div>
		<div>
			<p><strong>Direito Trabalhista</strong></p>
			<div class="hr h2"><hr /></div>
			<div class="description">
				<p>O Direito do Trabalho é o conjunto de normas jurídicas que regulam as relações de trabalho entre empregado e empregador, além de outras controvérsias decorrentes da relação de trabalho, bem como os litígios que tenham origem no cumprimento de suas próprias sentenças, inclusive coletivas.</p>
				<p>Além do atendimento preventivo à empresas, Blattes Advogados atua na proposição e defesa de Reclamatórias Trabalhistas, Assessoramento Sindical em Negociações Coletivas, Registro e Enquadramento Sindical.</p>
			</div>
		</div>
		<div>
			<p><strong>Direito Cível</strong></p>
			<div class="hr h2"><hr /></div>
			<div class="description">
				<p>O direito civil é o que regula as relações pessoais privadas. Atuamos nas seguintes áreas do Direito Civil:</p>
				<dl>
					<dt>Família e Sucessões</dt>
					<dd>O Direito de Família abrange todas as questões que dizem respeito às relações familiares.</dd>
					<dd>Divórcio, Reconhecimento de união estável, guarda de menores, investigação e negatória de paternidade, tutela, interdição judicial e Ação de Alimentos estão entre as principais demandas de Blattes Advogados.</dd>
					<dd>O direito Sucessório é o ramo do direito que cuida da transmissão de bens, direitos e obrigações em decorrência da morte.</dd>
					<dd>Neste ramos, Blattes Advogados trabalha com Partilhas judiciais e extra-judiciais, inventários, testamentos e planejamento sucessório.</dd>
					
					<dt>Responsabilidade Civil</dt>
					<dd>Responsabilidade Civil é a obrigação de uma pessoa reparar o dano causado a outra por fato cometido por si próprio ou por pessoa ou coisa a ela vinculada.</dd>
					<dd>Neste caso, o escritório Blattes Advogados trabalha com todos os tipos de ações por danos morais e materiais.</dd>
					<dd>Destacam-se as Ações decorrentes de acidente de trânsito, erro profissional (médicos, dentistas, etc), inscrição indevida do nome nos órgãos de proteção ao crédito, calúnia, injúria, difamação, acidente de trabalho e demais hipóteses que gerem dano.</dd>
					
					<dt>Contratual</dt>
					<dd>O Direito Contratual tem por objeto dar garantia aos contratantes de que as regras pactuadas mostrem-se claras e objetivas, não permitindo interpretação dúbia e por conseqüência garantindo o seu fiel cumprimento.</dd>
					<dd>A atuação da Blattes  Advogados na área contratual tem por objetivo a prevenção de conflitos negociais. Para isso, oferece os serviços de análise de documentação pré-contratual; Consultoria quanto à possibilidade de contratação; Assessoria na negociação e celebração dos mais variados tipos de contratos, , elaboração de minutas e termos, análise de instrumento contratuais e emissão de pareceres.</dd>
					<dd>No contencioso contratual disponibilizamos atuação judicial visando a revisão de contratos, bem como conflitos sobre a interpretação e a validade jurídica de cláusulas.</dd>
					
					<dt>Imobiliário</dt>
					<dd>Assessoria a pessoas físicas e jurídicas na realização de negócios imobiliários, tais como compra e venda, permutas, dação em pagamento, constituição de hipotecas, locações, contratos rurais de arrendamento e parceria, representação junto aos Cartórios de Registros de Imóveis, além de regularização de imóveis junto à Prefeituras Municipais.</dd>
					<dd>Blattes Advogados atua também no contencioso em Ações de Despejo, Cobranças, Usucapião, revisionais, consignatórias e renovatórias; direito de vizinhança, condomínio edilício, manutenção e reintegração de posse e interdito proibitório, usucapião e outras ações possessórias.</dd>
				</dl>
			</div>
		</div>
		<div>
			<p><strong>Direito Previdenciário</strong> </p>
			<div class="hr h2"><hr /></div>
			<div class="description">
				<p>A complexidade do Direito Previdenciário é evidenciada pelas constantes alterações das legislações e normas, que não permitem ao segurado – cidadão comum – a compreensão plena dos seus direitos.</p>
				<p>Neste sentido, o escritório Blattes Advogados especializou-se na área, a fim de atender as diferentes demandas junto à Previdência, atuando junto a diferentes regimes previdenciários (federal, estadual, municipais e privados).</p>
				<p>Entre os serviços prestados pelo escritório, destacam-se os Processos Administrativos e Judiciais que tratam de Aposentadoria por tempo de contribuição;  Aposentadoria por idade; Aposentadoria por invalidez;  Auxílio doença; Amparo assistencial ao idoso e ao deficiente; Pensão por morte; Auxílio reclusão; Revisão de benefícios e Aposentadorias especiais.</p>
			</div>
		</div>
		<div>
			<p><strong>Direito Administrativo</strong> </p>
			<div class="hr h2"><hr /></div>
			<div class="description">
				<p>O Direito Administrativo é o conjunto de normas que tratam da Administração Pública, suas entidades, órgãos, agentes públicos. Ou seja, tudo que se refere à Administração Pública e à relação entre ela e os administrados e seus servidores é regrado e estudado pelo Direito Administrativo.</p>
				<p>Dentre os principais serviços oferecidos por Blattes Advogados na área de Direito Administrativo estão: Assessoramento a empresas concessionárias de serviços público, Defesas em processos junto aos Tribunais de Contas do Estado do RS, Tribunal de Contas da União, Defesas em processos de Improbidade Administrativa, Assessoria jurídica em processos de concorrências públicas, licitações e contratações, Reivindicações administrativas e judiciais referentes a atos administrativos em licitações e contratos.</p>
			</div>
		</div>
		<div>
			<p><strong>Direito Eleitoral</strong></p>
			<div class="hr h2"><hr /></div>
			<div class="description">
				<p>O Escritório Blattes Advogados atua na Prestação de consultoria e assessoria jurídica a partidos políticos, além de atuação em defesas administrativas e judiciais em matéria eleitoral e para candidatos a eleições proporcionais e majoritárias. Acompanhamento de julgamentos por Comissões Parlamentares de Inquérito, ações de cassação de mandato e assessoria a Prefeituras e ocupantes de cargos público.</p>
			</div>
		</div>
		<div>
			<p><strong>Terceiro Setor</strong></p>
			<div class="hr h2"><hr /></div>
			<div class="description">
			<p>As organizações do Terceiro Setor são aquelas sem vínculos diretos com o Primeiro Setor – Público (Governos) e com o Segundo Setor – Privado (Empresas). Simplificadamente o Terceiro Setor é o conjunto de entidades da sociedade civil com fins públicos e não-lucrativas, tais como Fundações, Cooperativas, Sindicatos, Associações, ONGs, OSCIPS - Organizações das Sociedades Civis de Interesses Públicos, Instituições Religiosas, Clubes de Serviços, Entidades Beneficentes, Centros Sociais, Organizações de Voluntariado, etc.</p>
			<p>O serviços oferecidos por Blattes Advogados às entidades do Terceiro Setor compreendem Assessoramento para constituição de entidades, Elaboração e Alteração de Estatutos, Legalização junto aos órgãos Públicos, Elaboração de Regimento Interno, Assessoria na Certificação de Filantropia, Defesa Administrativa junto à Orgãos Públicos, Defesas Judicias, Assessoramento para Obtenção de Títulos e Certificados a serem fornecidos pelos Poderes Públicos (Utilidade Pública Municipal, Utilidade Pública Estadual, Utilidade Pública Federal, Conselho Nacional de Assistência Social – CNAS, Certificado de Entidade Beneficente de Assistência Social – CEBAS ou Organização de Sociedade Civis de Interesse Público - OSCIP).</p>
			</div>
		</div>
		<div>		
			<p><strong>Direito Empresarial</strong></p>
			<div class="hr h2"><hr /></div>
			<div class="description">
				<p>Blattes Advogados tem estacado trabalho em questões empresariais e societárias, envolvendo consultoria jurídica, elaboração de pareceres e questões contenciosas, responsabilidades e seus efeitos nas demais situações em área civil, comercial, contratual e extracontratual. Na área comercial atua na constituição de sociedades, alterações, fusão, cisão, incorporação e dissolução de empresas.</p>
				<p>Atuamos de forma preventiva com objetivo de orientar, adequar e estabelecer procedimentos de gestão administrativa a serem adotados pela empresa, objetivando evitar demandas judiciais em questões comerciais, contratuais,  societárias, trabalhistas e em defesa em direito do consumidor.</p>
			</div>
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
				navi: ".navi",
				naviItem: 'a',
			});
		});
	</script>
<?php get_footer(); ?>
