<?php get_header()?>

		<!-- Begin Main Content ( left col ) -->
		<section id="main-content">
		<?php if(is_month()) { ?>
				<div id="archive-title">
				<?php _e("年轮:", "site5framework"); ?> <strong><?php the_time('F, Y') ?></strong>
				</div>
		<?php } ?>
		<?php if(is_category()) { ?>
				<div id="archive-title">
				<?php _e("所属:", "site5framework"); ?> "<strong><?php $current_category = single_cat_title("", true); ?></strong>"
				</div>
		<?php } ?>
		<?php if(is_tag()) { ?>
				<div id="archive-title">
				<?php _e("个性标签", "site5framework"); ?> "<strong><?php wp_title('',true,''); ?></strong>"
				</div>
		<?php } ?>
		<?php if(is_author()) { ?>
				<div id="archive-title">
				<?php _e("Articles by", "site5framework"); ?> "<strong><?php wp_title('',true,''); ?></strong>"
				</div>
		<?php }?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
				<!-- Begin Article -->
				<article class="post">
					<header class="postHeader">
					  <div class="date"><?php the_time('M j, Y') ?> - <span><img src="<?php bloginfo('template_directory'); ?>/images/ico_file.png" alt=""> <?php the_category(', ') ?> &nbsp;&nbsp;<img src="<?php bloginfo('template_directory'); ?>/images/ico_comment.png" alt=""> <?php comments_popup_link('暂无评论', '1 评论 ', '% Comments'); ?></span> </div>
					  <h2><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h2>
					</header>
					<section class="postText">
					 <?php the_content('Read more &raquo;'); ?>		
					</section>
				<div class="sidebadge"></div>
				</article>
				<!-- End Article -->
			<?php endwhile; ?>
	<?php else : ?>
		<p><?php _e("亲,你找的页面不存在.", "site5framework"); ?></p>
	<?php endif; ?>
		<?php if (function_exists("emm_paginate")) {
				emm_paginate();
			} ?>
		</section>
		<!-- End Main Content ( left col ) -->
		
<?php get_sidebar();?>
<?php get_footer();?>
		

