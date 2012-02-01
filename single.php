<?php get_header(); ?>
<?php if (have_posts()): while(have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<div class="hr h2"><hr /></div>
<div class="the_content">
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
	<h2>Ocorreu um Erro</h2>
	<p>Nenhum post foi encontrado.</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
