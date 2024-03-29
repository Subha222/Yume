<?php
/**
 * Template Name: Page Opal Content Box
 */

get_header(); ?>
    <div class="wrap">
        <div id="primary" class="content-area content-box">
            <main id="main" class="site-main">
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile; // End of the loop.
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->
<?php get_footer();
