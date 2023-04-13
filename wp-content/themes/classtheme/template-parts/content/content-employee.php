<?php

/**
 * Template part for displaying employees
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-12 col-md-3">
            <!-- CHALLENGE SOLUTION -->
            <?php the_post_thumbnail(500, ['class' => 'img-fluid']) ?>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>
            <p class="mb-1">Job Title: <?php echo $post->job_title; ?></p>
            <p class="mb-1">Phone number: <?php echo $post->phone_number; ?></p>
            <p class="mb-1">Email: <?php echo $post->email; ?></p>
        </div>


        <div class="entry-content col-12 col-md-9">
            <?php
            the_content();
            ?>
        </div>
    </div>
</article>