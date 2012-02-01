<?php get_header(); ?>
<h2>Artigos</h2>
<div class="hr h2"><hr /></div>
<ul>
<?php if (have_posts()): while(have_posts()): the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> (em: <?php the_time('j/m/Y'); ?>)</a></li>
<?php endwhile; ?>
</ul>
<?php else: ?>
	<h2>Ocorreu um Erro</h2>
	<p>Nenhum post foi encontrado.</p>
<?php endif; ?>

<div id="morePrev">
<p>	<?php next_posts_link('Mais antigos...'); ?>
	<?php previous_posts_link('Anteriores...'); ?> </p>
</div>


<?php get_footer(); ?>
