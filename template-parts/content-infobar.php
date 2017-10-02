<?php
/**
 * The template used for displaying information-bar.
 *
 * @package smallblog
 */

if ( 'post' == get_post_type() ) : ?>
	<div class="info-bar">
		<?php if ( get_the_date() ) : ?>
			<span class="date">
				<span class="icon-date"></span> <?php the_date(); ?>
			</span>
		<?php endif; ?>

		<span class="categories">
				<span class="icon-categories"></span>
			<?php the_category( ', ' ); ?>
		</span>

		<?php if ( get_the_tags() ): ?>
			<span class="tags">
					<span class="icon-tags"></span>
				<?php the_tags( '', ', ' ); ?>
			</span>
		<?php endif; ?>
	</div>
<?php endif; ?>
