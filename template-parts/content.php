<?php
/**
* @package smallblog
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	get_template_part( 'template-parts/content', 'heading' );
	get_template_part( 'template-parts/content', 'infobar' );
	?>

	<div class="the-content">
		<?php if ( is_single() ) : ?>
			<?php the_content(); ?>
		<?php endif; ?>
	</div>
	<hr class="separator"/>
</article>
