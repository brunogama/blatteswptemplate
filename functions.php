<?php 

add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length) { return 10; }

function excerpt_ellipse($text) {
	return str_replace('[...]', ' <a href="'.get_permalink().'">Leia mais...</a>', $text); 
}

add_filter('the_excerpt', 'excerpt_ellipse');


if (function_exists('register_sidebar')) {
	register_sidebar();
}
?>