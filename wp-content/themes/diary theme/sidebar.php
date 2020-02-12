<aside id="sidebar">
	<!-- Begin Social Icons -->
	<section id="socialIcons">
	<ul>
		<?php if(of_get_option('diary_twitter_user')!=""){ ?>
		<li><a href="" class="twitter <?php if(of_get_option('diary_latest_tweet')!="no"):?>tip<?php endif?>" title="这仅仅是个图标!"><?php _e("这仅仅是个图标!", "site5framework"); ?></a></li>
		<?php }?>
		<?php if(of_get_option('diary_facebook_link')!=""){ ?>
		<li><a href="<?php echo of_get_option('diary_baidu_link'); ?>" class="facebook" title="这仅仅是个图标!">"<?php _e("Join Us on Facebook!", "site5framework"); ?></a></li>
		<?php }?>
		<li><a href="#" title="Wifi" class="rss"><?php _e("RSS", "site5framework"); ?></a></li>
	</ul>
	<?php if(of_get_option('diary_contact_page')):?>
	<a href="https://mail.qq.com" title="给博主发邮件吧!" id="butContact"><?php _e("Contact", "site5framework"); ?></a>
	<?php endif;?>
	</section>
	<!-- End Social Icons -->
	<?php // Widgetized sidebar 
			if ( ! dynamic_sidebar( 'sidebar' ) ) :?>
			<div class="sideBox">
				<h3><?php _e("部件需要！", "site5framework"); ?></h3>
				<p><?php _e("继续在这里添加一些部件！外观>部件", "site5framework"); ?></p>
			</div>
			<?php endif; ?>
</aside>
