<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sportswebsite
 */

if (! is_active_sidebar('sidebar-1')) {
	return;
}
?>

<!-- <aside id="secondary" class="widget-area">
	<?php
	// dynamic_sidebar( 'sidebar-1' ); 
	?>
</aside> -->
<!-- #secondary -->

<div class="sidebar">
	<div class="sidebar-widget">
		<div class="widget-header">
			<h3 class="widget-title">Events</h3>
		</div>
		<div class="widget-body">

			<div class="mini-post-wrapper">
				<div class="mini-post">
					<div class="mini-post-count">
						1
					</div>
					<div class="mini-post-content">
						<div class="mini-post-heading">
							Show in Usa
						</div>
						<p class="mini-post-label">
							USA
						</p>
					</div>
				</div>

				<div class="mini-post">
					<div class="mini-post-count">
						2
					</div>
					<div class="mini-post-content">
						<div class="mini-post-heading">
							Addidas Show in usa
						</div>
						<p class="mini-post-label">
							USA
						</p>
					</div>
				</div>

				<div class="mini-post">
					<div class="mini-post-count">
						3
					</div>
					<div class="mini-post-content">
						<div class="mini-post-heading">
							Addidas Show
						</div>
						<p class="mini-post-label">
							USA
						</p>
					</div>
				</div>

				<div class="mini-post">
					<div class="mini-post-count">
						4
					</div>
					<div class="mini-post-content">
						<div class="mini-post-heading">
							Addidas in usa
						</div>
						<p class="mini-post-label">
							USA
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>