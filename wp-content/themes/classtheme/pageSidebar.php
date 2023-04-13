<?php

/**
 * Template Name: Page With Sidebar
 * The template for a page with a sidebar
 *
 */

get_header();
?>

<div class="container">

    <div class="row">
        <?php
        while (have_posts()) :
            the_post();
        ?>

            <div class="col col-md-8">
                <?php get_template_part('template-parts/content/content-page'); ?>
            </div>

            <div class="col col-md-4">
                <?php if (is_active_sidebar('page_sidebar')) : ?>
                    <div id="sidebar" class="sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar('page_sidebar'); ?>
                    </div>
                <?php endif; ?>
            </div>

        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>