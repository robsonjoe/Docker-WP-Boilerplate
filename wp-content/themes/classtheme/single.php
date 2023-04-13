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

		get_template_part('template-parts/content/content-single');

		the_post_navigation(
			array(
				'next_text' => '<p class="meta-nav">Next</p>',
				'prev_text' => '<p class="meta-nav">Previous</p>',
			)
		);
	endwhile; // End of the loop.
	?>
</div>

<?php get_footer(); ?>