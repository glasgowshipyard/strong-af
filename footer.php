<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strong_AF
 */

?>

	</div><!-- #content -->
	<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p><?php
			endif; ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php if ( dynamic_sidebar('footer') ) : else : endif; ?>
			<a href="/terms-of-service-privacy-policy/" class="footer_links">Terms</a> | <a href="/return-policy/" class="footer_links">Returns</a> | <a href="/issues-feedback/" class="footer_links">Issues</a>
			<div class="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></div>
			<div class"made-by"><?php printf( esc_html__( 'Hand Built by %2$s', 'strong-af' ), 'strong-af', '<a href="http://glasgowshipyard.com" rel="designer">Glasgow Shipyard</a>' ); ?></div>
		</div><!-- .site-info -->
		<a href="/colophon/" class="footer_links">Colophon</a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
