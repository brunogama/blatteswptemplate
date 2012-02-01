<?php
/*
Template Name: Falando Direito
*/

get_header();?>
<h2>Falando Direito</h2>
<div class="hr h2"><hr /></div>
<h3>Artigos</h3>
<div class="hr h3"><hr /></div>
<?php if (have_posts()): while(have_posts()): the_post(); ?>
	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php endwhile; ?>
<?php else: ?>
	<h2>Ocorreu um Erro</h2>
	<p>Nenhum post foi encontrado.</p>
<?php endif; ?>
<div id="morePrev">
	<?php next_posts_link('Mais...'); ?>
	<?php previous_posts_link('Anteriores') ?>
</div>
<h3>Falando Direito TV</h3>
<div class="hr h3"><hr /></div>
<a href="http://www.youtube.com/blattes/">Veja mais</a>
<?php get_footer(); ?>
