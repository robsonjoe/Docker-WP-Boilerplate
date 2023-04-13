<?php

/**
 * The template for displaying all single posts
 *
 */

get_header();
?>

<div class="container">
    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content/content-page');

    endwhile; // End of the loop.
    ?>
</div>

<?php get_footer(); ?>