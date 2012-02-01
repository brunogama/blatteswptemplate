<?php 
/*
	Template Name: Falando Direito
*/
get_header(); 
?>
<h2>Falando Direito</h2>
<div class="hr h2"><hr /></div>
<h3>Artigos</h3>
<div class="hr h3"><hr /></div>
<?php query_posts('showposts=3'); ?>   
<div class="post mh3">

	<div class="links-frontpage">		
			<?php while (have_posts()) : the_post(); ?>   
				<p>			
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
					<span>Postado em: <?php the_time('d/m/Y'); ?></span>
				</p>
			<?php endwhile; ?>
	</div>
	<br />
	<div class=" clearfix">
				<p class="align-right">
					<a href="<?php bloginfo('url'); ?>/artigos/">Artigos anteriores</a>
				</p>
	</div>
</div><!--.post-->
	
	
	
<?php get_footer(); ?>
