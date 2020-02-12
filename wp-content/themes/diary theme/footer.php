</div>
	</div>
	<!-- End Content -->
	<footer id="page-footer">
	<div id="site5botto"><p style="margin-left:360px;margin-top:20px;"><a href="http://www.miitbeian.gov.cn">豫ICP备17020852 |</a><a href="https://github.com"> github |</a><a href="https://user.qzone.qq.com/1426801685"> 空间</a></p>
	</div>
	<?php echo of_get_option("copyright");?>
	<div style="width:200px;padding:5px 0;margin-left:350px; " >
	<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011802002949" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="<?php bloginfo('template_directory'); ?>/images/beian.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; ">沪公网安备 31011802002949号</p></a>
	</div>
	</footer>
</div>
<?php if (of_get_option('diary_analytics') <> "") { 
		echo stripslashes(stripslashes(of_get_option('diary_analytics'))); 
	} ?>
</body>
<?php wp_footer();?>
</html>
