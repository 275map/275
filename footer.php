<?php
/**
 * The template for displaying the footer.
 *
 * @package smallblog
 */

?>

<footer id="footer" role="contentinfo">
	<div class="f-top">
		<div class="container">
			<div class="footer-quote">
				<div class="body" style="font-size: 24px;"><?php if ( function_exists( 'hello_dolly' ) ) { hello_dolly(); } ?></div>
			</div>
		</div>
	</div>

	<div class="f-bottom">
		<a href="#" class="anchor" title="<?php _e( 'To top', 'smallblog' ); ?>">
			<span class="icon-arrow-up"></span>
			<span class="screen-reader-text"><?php _e( 'To top', 'smallblog' ); ?></span>
		</a>

		<div class="container">
			<span class="copyright">

			</span>
		</div>
	</div>
</footer>

<?php get_template_part( 'template-parts/mobile', 'navigation' ); ?>
<?php get_template_part( 'template-parts/search-dialog' ); ?>

<?php wp_footer(); ?>
</body>
</html>
