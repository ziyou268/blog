<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e("输入密码查看评论。", "site5framework"); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h2 class="h2comments" id="comments"><?php comments_number('暂无评论', '1 评论', '% Comments' );?></h2>

	<ul class="commentlist" >
	<?php wp_list_comments('callback=mytheme_comment'); ?>
	</ul>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e("评论被关闭。", "site5framework"); ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h2 id="commentsForm"><?php comment_form_title( '想说点什么不,请留言/评论:', '给 %s' ); ?></h2>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( of_get_option('comment_registration') && !$user_ID ) : ?>
<p><?php _e("你必须", "site5framework"); ?> <a href="<?php echo of_get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e("登录", "site5framework"); ?></a> <?php _e("发布评论", "site5framework"); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php _e("您好:", "site5framework"); ?> <a href="<?php echo of_get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e("退出 &raquo;", "site5framework"); ?></a></p>

<?php else : ?>

<p><label for="author"><?php _e("姓名", "site5framework"); ?> <?php if ($req) echo "(必填)"; ?></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>

<p><label for="email"><?php _e("邮箱", "site5framework"); ?> <?php if ($req) echo "(必填)"; ?></label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>



<?php endif; ?>


<p><label for="comment"><?php _e("评论", "site5framework"); ?></label>
<textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>
<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("发布评论", "site5framework"); ?>" />
<?php comment_id_fields(); ?>
</p>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
