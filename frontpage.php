<?php
/*
Template Name: Front page
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

<?php query_posts('showposts=5'); ?>   
<div class="post">
	<h2>Notícias</h2>
	<div class="hr h2"><hr /></div>

<div class="links-frontpage">		
		<?php while (have_posts()) : the_post(); ?>   
			<p>			
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
				<span>Postado em: <?php the_time('d/m/Y'); ?></span>
			</p>
		<?php endwhile; ?>
</div>
</div><!--.post-->
<?php get_footer(); ?>
