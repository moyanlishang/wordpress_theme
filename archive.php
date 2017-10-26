<?php get_header();?>
<div class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
<!-- 	<figure class="top-image" style="background-image: url(
	<?php
        srand( microtime() * 1000000 );
        $num = rand( 1, 5 );
        switch( $num )
        {
        case 1: $image_file = stripslashes(get_option('strive_indexsuiji1'));
        break;
        case 2: $image_file = stripslashes(get_option('strive_indexsuiji2'));
        break;
        case 3: $image_file = stripslashes(get_option('strive_indexsuiji3'));
        break;
        case 4: $image_file = stripslashes(get_option('strive_indexsuiji4'));
        break;
        case 5: $image_file = stripslashes(get_option('strive_indexsuiji5'));
        break;
        }
        echo $image_file;
    ?> );"></figure> -->
	<figure class="top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&w=1400&h=800&zc=1);"></figure>
	<canvas height="550" width="1585" id="wave-canvas"></canvas>
	<canvas id="wave-canvas"></canvas>
</div>
<div class="wrapper">
	<ul class="posts-list mb+ js-posts">
		<?php if (have_posts()) : ?>
			<?php while ( have_posts() ) : the_post();?>
				<?php if( has_post_format( 'status' )) { //状态 ?>
					<?php include( 'includes/excerpt-status.php' );?>
				<?php } else if ( has_post_format( 'audio' )) { //日志 ?>
					<?php include( 'includes/excerpt-audio.php' );?>
				<?php } else{ //标准 ?>
					<?php include( 'includes/excerpt.php' );?>
			<?php } ?>
		    <?php endwhile; endif ;?>
	</ul>
	<div class="pagination mb+ js-pagination">
		<div class="js-next pagination__load">
			<?php echo next_posts_link('<i class="iconfont"></i>','');?>
		</div>
	</div>
</div>
<?php get_footer();?>