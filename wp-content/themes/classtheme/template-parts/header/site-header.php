<?php

/**
 * displays the site header
 */
?>

<header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>">
                <h1><?php bloginfo('name'); ?></h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php if (has_nav_menu('primary')) : ?>
                <?php
                wp_nav_menu(
                    [
                        'theme_location'  => 'primary',
                        'menu_class'      => 'navbar-nav',
                        'container_id'    => 'navbar',
                        'container_class' => 'collapse navbar-collapse',
                        'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                        'fallback_cb'     => false,
                    ]
                );
                ?>
            <?php endif; ?>
        </div>
    </nav>
</header>