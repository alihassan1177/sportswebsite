<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sportswebsite
 */

get_header();
?>

<main id="primary" class="bg-green-300 bg-pattern site-main">

	<section style="padding-block: 60px;" class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title text-center">
				<p class="error-code">404</p>
				<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'sportswebsite'); ?>
			</h1>
			<div style="margin-top: 20px;" class="text-center">
				<a style="text-decoration: underline;" href="<?php echo home_url() ?>">Back to Home</a>
			</div>
		</header><!-- .page-header -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
