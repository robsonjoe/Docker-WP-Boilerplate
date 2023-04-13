<?php

/**
 * template part for displaying post archives and search results
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        the_title(sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>');

        the_post_thumbnail('post-thumbnail', ['loading' => false]);
        ?>
    </header>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>

    <footer class="entry-footer">
        <a href="<?php the_permalink(); ?>">Learn More</a>
    </footer>

</article>