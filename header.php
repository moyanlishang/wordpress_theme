<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php include('includes/seo.php');?>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link rel="shortcut icon" type="images/x-icon" href="<?php echo stripslashes(get_option('strive_favicon')); ?>">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lib.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
<style>
.post [rel="gallery"]:after {background: #666666;}
.post [rel="gallery"]:after {background: #666666;background: -moz-linear-gradient(top,  #666666 0%, #666666 100%);background: -webkit-gradient(linear, top center, bottom center, color-stop(0%,#666666), color-stop(100%,#666666));background: -webkit-linear-gradient(top,  #666666 0%,#666666 100%);background: -o-linear-gradient(top,  #666666 0%,#666666 100%);background: -ms-linear-gradient(top,  #666666 0%,#666666 100%);background: linear-gradient(to bottom,  #666666 0%,#666666 100%);}
.wpcf7-text:focus,.wpcf7-number:focus,.wpcf7-select:focus,.wpcf7-textarea:focus,.text-input:focus {border-color: #666666;}[id="submit"],.wpcf7-submit,.btn--primary {background: #666666;}.post-status {color: #666666;}
a {color: #666666;}
</style>
<?php my_scripts_method; wp_head()?>
<?php echo stripslashes(get_option('strive_tjcode')); ?>
</head>
<body class="home blog fancy-captions round-avatars">
<?php if ( is_home() || is_search() || is_category() || is_month() || is_author() || is_archive() ) { ?>
<?php include('includes/loading.php'); ?>
<?php } ?>
<header>
<a id="logo" href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
<img src="<?php echo stripslashes(get_option('strive_mylogo')); ?>" alt="<?php bloginfo('name');?>" /></a>
<a id="nav-toggle" href="#"><span></span></a>
<nav>
<div class="menu-top-container">
	<ul id="menu-top" class="menu">
		<?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'nav')); ?>
	</ul>
</div>
</nav>
<i class=" js-toggle-search iconfont"></i>
</header>