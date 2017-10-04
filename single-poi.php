<?php
/**
 * The template for displaying all single posts.
 *
 * @package smallblog
 */

get_header(); ?>

<div id="section" class="container">
    <div class="row">
        <main id="page" class="col-sm-9" role="main">
            <?php

            if ( have_posts() ):

                // Start the loop.
                while ( have_posts() ) : the_post();

                    // Include the single post content template.
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
						get_template_part( 'template-parts/content', 'heading' );
						get_template_part( 'template-parts/content', 'infobar' );
						?>

						<div class="the-content">
							<?php if ( is_single() ) : ?>
							<?php if ( has_post_thumbnail() ) : ?>
								<div style="margin-bottom: 1em;"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail(); ?>
								</a></div>
								<?php endif; ?>
								<?php the_content(); ?>
							<?php endif; ?>
						</div>
						<hr class="separator"/>
					</article>
					<?php

                    wp_link_pages();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                    if ( is_singular( 'attachment' ) ) {
                        // Parent post navigation.
                        the_post_navigation( array(
                            'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'smallblog' ),
                        ) );
                    } elseif ( is_singular( 'post' ) ) {
                        // Previous/next post navigation.
                        the_post_navigation( array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next: ', 'smallblog' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Next post:', 'smallblog' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous: ', 'smallblog' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Previous post:', 'smallblog' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                        ) );
                    }

                    // End of the loop.
                endwhile;

            else:
                get_template_part( 'template-parts/content', 'none' );
            endif;

            ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
