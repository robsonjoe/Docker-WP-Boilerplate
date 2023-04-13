<?php

/**
 * template part for displaying a message that posts cannot be found
 */

?>

<section>
    <header class="page-header">
        <?php if (is_search()) : ?>
            <h1 class="page-title">
                <?php echo 'Results for ' . esc_html(get_search_query()); ?>
            </h1>
        <?php else : ?>
            <h1 class="page-title"><?php echo 'Nothing here' ?></h1>
        <? endif; ?>
    </header>

    <div class="page-content default-max-width">
        <?php if (is_search()) : ?>
            <p><?php echo 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'; ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php echo 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.'; ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>