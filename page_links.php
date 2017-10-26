<?php
/*
Template Name: 友情链接
*/
?>
<?php get_header(); ?>
<div class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
	<figure class="top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&w=1400&h=800&zc=1);"></figure>
	<canvas height="550" width="1585" id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>
<div class="wrapper">
	<article id="post-45" class="post-45 page type-page status-publish has-post-thumbnail hentry js-gallery">
	<h1 class="post-title">友情链接</h1>
	<div class="mb+" style="margin-left: -35px;">
		<div class="linkpage clearfix">
			<ul>
				<li id="linkcat-14" class="linkcat">
				<ul class="xoxo blogroll">
					<?php wp_list_bookmarks('title_li=&categorize=0&category_before=&category_after='); ?>
				</ul>
				</li>
			</ul>
		</div>
	</div>
	</article>
</div>
<div class="wrapper">
</div>
<?php get_footer();?>