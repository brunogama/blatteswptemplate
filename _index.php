<?php get_header(); ?>
<?php if (have_posts()): while(have_posts()): the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="post_author meta">Postado por: <?php the_author(); ?></p>
	<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
	<h2>Ocorreu um Erro</h2>
	<p>Nenhum post foi encontrado.</p>
<?php endif; ?>
<div id="morePrev">
	<?php next_posts_link('Mais...'); ?>
	<?php previous_posts_link('Anteriores') ?>
</div>
<!-- 	    <h2 class="falando_direito">
	            <span>Falando Direito</span>
	        </h2>
	
			<h3 class="artigos">
			    <span>Artigos</span>
			</h3>
			<ul>
			    <li>Lorem ipsum dolor sit amet, consectetur adipisicing;</li>
			    <li>Lorem ipsum dolor sit amet, consectetur adipisicing;</li>
			    <li>Lorem ipsum dolor sit amet, consectetur adipisicing;</li>
			    <li>Lorem ipsum dolor sit amet, consectetur adipisicing;</li>
			</ul>
			<h3 class="falando_direito_tv">
			    <span>Falando Direito TV</span>
			</h3>		
 -->

<?php get_footer(); ?>
