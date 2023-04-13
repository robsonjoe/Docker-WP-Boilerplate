<?php

/**
 * the main template file
 *
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<div class="container">
    <?php if (is_home() && !is_front_page() && !empty(single_post_title('', false))) : ?>
        <div class="row">
            <div class="col">
                <header class="page-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>
            </div>
        </div>
    <?php endif; ?>

    <?php
    if (have_posts()) {

        //load posts loop
        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content/content', 'excerpt');
        }

        the_posts_pagination();
    } else {
        //if no posts, include the "no posts found" template
        get_template_part('template-parts/content/content-none');
    }
    ?>
</div>

<?php get_footer(); ?>