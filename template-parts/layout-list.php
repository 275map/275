<?php
/**
 * The template used for article listing.
 *
 * @package smallblog
 */
?>

<div class="row">
    <main id="page" class="col-sm-9" role="main">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( get_theme_mod( 'ods_minimize_list', false ) ) : ?>
                    <?php get_template_part( 'template-parts/content', 'minimize' ); ?>
                <?php else : ?>
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <div class="text-center">
                <?php if ( function_exists( 'ods_pagination' ) ) ods_pagination(); ?>
            </div>
        <?php else: ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

        <?php wp_link_pages( array( 'echo' => false ) ); ?>
    </main>
    <?php get_sidebar(); ?>
</div>
