<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo("html_type"); ?>; charset=<?php bloginfo("charset"); ?>"/>
	<meta name="generator" content="Wordpress <?php bloginfo('version'); ?>" />	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="Content-Language" content="pt-br" />
	<meta name="author" content="http://www.imgnation.com.br/" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="screen" charset="utf-8" href="<?php bloginfo("stylesheet_url"); ?>" />

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_enqueue_script("jquery"); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tools.min.js"></script>
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/js/ie7/IE9.js"></script>
	<![endif]-->

</head>

<?php echo is_single() ? '<body class="single">' : '<body>' ?>

	<div id="wrapper">
	    <div id="nav_bar">
	        <div class="nav_box">
	            <h1 id="#logo">
					<a href="<?php bloginfo('url'); ?>" title="Home" class="home">Blattes Advogados</a>
	            </h1>
	            <div id="menu" class="clearfix">
	                <ul>
	                    <li>
	                        <a href="<?php bloginfo('url'); ?>" title="Home" class="home">Home</a>
	                    </li>
						<?php wp_list_pages('title_li=&include=15,6,9,17,12&sort_column=menu_order'); ?>
	                </ul>
	            </div>
	            <div id="nav_footer">
	                <div>
					Rua Mal. Floriano Peixoto, 457</div>
	                <div class="phone">(55) 3223-4100</div>
	            </div>
	        </div><!--nav_box-->
	    </div><!--nav_bar-->
	
	    <div id="content" class="clearfix">