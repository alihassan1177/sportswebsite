<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sportswebsite
 */

get_header();
?>

<main id="primary" class="bg-green-300 bg-pattern site-main">

	<!-- Main Content -->
	<section>
		<div class="container">
			<div class="main-content-wrapper">

				<div class="content">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', get_post_type());

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'sportswebsite') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'sportswebsite') . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</section>

</main>

<?php
// get_sidebar();
get_footer();
