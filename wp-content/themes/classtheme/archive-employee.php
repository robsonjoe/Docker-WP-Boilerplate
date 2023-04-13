<?php

/**
 * template file for displaying employees
 */

//  $args = [
//     'post_type' => 'employee',
//     'orderby' => 'title',
//     'order' => 'ASC',
//  ];

$args = [
    'post_type' => 'employee',
    'orderby' => ['meta_value' => 'ASC', 'title' => 'ASC'],
    'meta_key' => 'job_title',
];
$the_query = new WP_Query($args);

get_header(); ?>

<div class="container">

    <div class="row mb-5">
        <div class="col">
            <header class="page-header">
                <h1 class="page-title">Employees</h1>
            </header>
        </div>
    </div>

    <?php
    if ($the_query->have_posts()) {

        echo '<div class="row">';
        //load posts loop
        while ($the_query->have_posts()) {
            $the_query->the_post();

            echo '<div class="col-12 col-md-6 col-lg-3 mb-4">';
            get_template_part('template-parts/content/content', 'excerpt-grid');
            echo '</div>';
        }
        echo '</div>';

        the_posts_pagination();
    } else {
        //if no posts, include the "no posts found" template
        get_template_part('template-parts/content/content-none');
    }
    ?>
</div>

<?php get_footer(); ?>