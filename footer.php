<div class="fat-footer">
	<div class="wrapper">
		<div class="layout layout--center">
			<div class="layout__item palm-mb">
				<div class="media">
					<img class="media__img avatar" src="<?php echo stripslashes(get_option('strive_zztxurl')); ?>" alt="" height="50" width="50">
					<div class="media__body">
						<h4><?php echo stripslashes(get_option('strive_zznc')); ?></h4>
						<p>
							<?php echo stripslashes(get_option('strive_grsm')); ?>
						</p>
					</div>
				</div>
			</div>
			<?php if(get_option('strive_weixin') == 'Display') { ?>
			<div class="layout__item yc">
				<div class="fat-footer__social">
					<ul class="list-bare list-inline">
					<h4 style="margin-bottom: 15px;">博主微信</h4>
						<li><img class="kuangimg" src="<?php echo stripslashes(get_option('strive_zzwxurl')); ?>"></li>
					</ul>
				</div>
			</div>
			<?php } else { } ?>
		</div>
	</div>
</div>
<footer class="footer" role="contentinfo">
<div class="wrapper wrapper--wide split split--responsive">
	<div class="split__title">
			© 2016 by <?php bloginfo('name'); ?>. All rights reserved.
	</div>
		Bevis's Blog:		
	<a href="http://www.bevisz.com" target="_blank" rel="nofollow">moyanlishang</a> code by
	<a href="https://github.com/moyanlishang/wordpress_theme" target="_blank">github</a>
</div>
</footer>
<form class="js-search search-form search-form--modal" method="get" action="<?php bloginfo('url'); ?>" role="search">
	<div class="search-form__inner">
		<div>
			<i class="iconfont"></i>
			<input class="text-input" name="s" placeholder="Enter keyword ..." type="search">
		</div>
	</div>
</form>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/module.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script>
		var infinite_scroll = {
			loading: {
				img: '/wp-content/themes/Variant/images/ajax-loader.gif',
				msgText: '',
				finishedMsg: ''
			},
			nextSelector: '.js-next a',
			navSelector: '.js-pagination',
			itemSelector: '.post',
			contentSelector: '.js-posts'
		};
	</script>
<script>
		$(document).ready(function () {
			$('.post img').lazyload({effect : "fadeIn"});//lazyload
			})
	</script>
<div id="fb-root">
</div>
<?php echo stripslashes(get_option('strive_yjtjcode')); ?>
<?php wp_footer(); ?>
</body>
</html>