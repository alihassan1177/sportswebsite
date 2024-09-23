<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sportswebsite
 */

get_header();
?>

<main id="primary" class="site-main bg-green-300 bg-pattern">

	<section>
		<div class="container">
			<div class="main-content-wrapper">

				<div class="content">
					<?php if (have_posts()) : ?>

						<header style="margin-bottom : 30px" class="page-header">
							<?php
							the_archive_title('<h1 class="page-title">', '</h1>');
							the_archive_description('<div class="archive-description">', '</div>');
							?>
						</header><!-- .page-header -->

						<?php if (have_posts()) : ?>
							<div class="row">
								<?php while (have_posts()) : the_post(); ?>
									<?php get_template_part('template-parts/post-card'); ?>
								<?php endwhile; ?>
							</div>
							<?php the_posts_navigation(); ?> <!-- Navigation for paginated posts -->
						<?php else : ?>
							<p><?php esc_html_e('No posts found in this category.', 'your-text-domain'); ?></p>
						<?php endif; ?>

					<?php endif; ?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
