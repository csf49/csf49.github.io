</div>
<footer>	
	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div id="footer-meta" class="col-md-9">
					<p>&copy; <a id="footer-site" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
					<?php wp_nav_menu(array('theme_location' => 'footer','container' => 'false','depth' => 1,'fallback_cb' => 'false')); ?>
				</div>
				<div id="footer-credit" class="col-md-3">
					<p><a href="http://www.wpmultiverse.com/themes/franklin/" title="Franklin WordPress Theme">Franklin Theme</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>   
</body>
</html>