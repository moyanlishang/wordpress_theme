<?php
/*
Template Name: 留言板
*/
?>
<?php get_header(); ?>
<div style="" class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
	<figure class="top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&w=1400&h=800&zc=1);"></figure>
	<canvas id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>
<div class="wrapper">
	<article id="post-1108" class="post-1108 post type-post status-publish format-status has-post-thumbnail hentry category-uncategorized tag-520 js-gallery">
	<h1 class="post-title">
		<?php the_title_attribute(); ?>	
	</h1>
	<div class="post-body js-gallery mb">
	<?php while( have_posts() ): the_post(); $p_id = get_the_ID(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	</div>
	</article>
</div>
<svg id="bigTriangleColor" width="100%" height="40" viewbox="0 0 100 102" preserveaspectratio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>
	<?php if (comments_open()) comments_template( '', true ); ?>
<div class="wrapper">
</div>
<?php get_footer();?>