<?php

/**
 * template part for displaying a grid of posts
 */
?>

<div id="post-<?php the_ID(); ?>" class="card">
    <!-- CHALLENGE SOLUTION -->
    <?php the_post_thumbnail(500, ['class' => 'img-fluid']) ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-meta">
            Job Title: <?php echo $post->job_title; ?>
        </p>
        <a class="btn btn-primary" href="<?php the_permalink(); ?>">Learn More</a>
    </div>
</div>