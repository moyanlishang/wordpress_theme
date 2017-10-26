<?php get_header(); ?>
<div style="" class="m-header ">
	<section id="hero1" class="hero">
	<div class="inner">
	</div>
	</section>
	<figure class="top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&w=1400&h=800&zc=1);">
	</figure>
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
    ?> );">
    </figure> -->
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
	<div class="meta split split--responsive cf">
		<div class="split__title">
			<time datetime="2016-05-20 17:31">
				<?php the_time('Y-m-d') ?>
			</time>
			<span class=""><?php the_tags('', ' '); ?></span>
		</div>
		<div id="social-share">
			<span class="entypo-share"><i class="iconfont"></i>分享</span>
		</div>
		<div class="slide">
			<a class="btn-slide" title="Comments"><i class="iconfont"></i>展开评论</a>
		</div>
	</div>
	</article>
</div>
<svg id="bigTriangleColor" width="100%" height="40" viewbox="0 0 100 102" preserveaspectratio="none"><path d="M0 0 L50 100 L100 0 Z"></path></svg>
<div style="display: none;" class="" id="social">
	<ul>
		<li><a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php the_permalink(); ?>&amp;title=<?php the_title_attribute(); ?>" data-tooltip="qzone" data-placement="top" target="_blank"><i class="iconfont"></i></a></li>
		<li><a href="http://service.weibo.com/share/share.php?title=<?php the_title_attribute(); ?>&amp;url=<?php the_permalink(); ?>" data-tooltip="weibo" data-placement="top" target="_blank"><i class="iconfont"></i></a></li>
		<li><a href="http://share.renren.com/share/buttonshare?link=<?php the_permalink(); ?>&amp;title=<?php the_title_attribute(); ?>" data-tooltip="renren" data-placement="top" target="_blank"><i class="iconfont"></i></a></li>
		<li><a href="http://www.douban.com/recommend/?url=<?php the_permalink(); ?>&amp;title=<?php the_title_attribute(); ?>" data-tooltip="douban" data-placement="top" target="_blank"><i class="iconfont"></i></a></li>
		<li><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title_attribute(); ?>" data-tooltip="twitter" data-placement="top" target="_blank"><i class="iconfont"></i></a></li>
	</ul>
</div>
<div style="display: none;" id="panel">
	<?php if (comments_open()) comments_template( '', true ); ?>
</div>
<div class="wrapper">
</div>
<?php get_footer();?>