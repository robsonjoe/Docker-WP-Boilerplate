<?php

/**
 * template for displaying the footer
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php bloginfo('name'); ?>
                <?php
                if (function_exists('the_privacy_policy_link')) {
                    the_privacy_policy_link('<div class="privacy-policy">', '</div>');
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>