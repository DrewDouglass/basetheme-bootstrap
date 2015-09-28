<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
	<footer role="contentinfo" id="site-footer">
		<?php wp_nav_menu( array( "theme_location" => "footernav", "container" => false, "menu_id" => "footer-nav" ) ); ?>
	</footer>
<?php
	wp_footer();
?>
</div><!-- /#wrapper -->
<script src="<?php echo get_template_directory_uri();?>/js/vendor/bootstrap.min.js"></script>
</body>
</html>