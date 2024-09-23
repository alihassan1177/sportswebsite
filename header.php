<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sportswebsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sportswebsite'); ?></a>

		<div id="notification" class="container">
			<div class="notification-bar">
				<div style="gap: 20px;" class="w-100 d-flex align-items-center justify-content-between">
					<p class="notification-text">
						LIVE RACE STREAM FROM GATOR NATIONALS IN SARASOTA, FL / <span
							class="text-green-100 text-underline">WATCH
							NOW</span>
					</p>
					<button class="icon-button notification-close" title="Close Notification">
						<img src="<?php echo get_template_directory_uri() . " /assets/img/x-mark.png" ?>" alt="Close Notification Bar Button">
					</button>
				</div>
			</div>
		</div>

		<header class="site-header">
			<!-- Navbar Mobile -->
			<div class="bg-pattern bg-green-300 navbar-wrapper navbar-mobile">

				<div class="navbar">
					<div class="container">
						<div class="d-flex align-items-center justify-content-between">
							<a class="logo" href="<?php echo home_url()  ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/img/logo.png" ?>" alt="">
							</a>
							<button class="icon-button menu-toggle" title="Toggle Menu">
								<img src="<?php echo get_template_directory_uri() . "/assets/img/burger-icon.png" ?>" alt="Menu Button">
							</button>
						</div>
					</div>
				</div>

				<div class="secondary-menu">
					<button class="btn">
						Membership
					</button>
					<button class="btn">
						Account
					</button>
				</div>

				<div class="mobile-menu">
					<form>
						<div class="searchbar mobile-search bg-pattern">
							<input placeholder="SEARCH" type="search">
							<button class="icon-button">
								<img src="<?php echo get_template_directory_uri() . "/assets/img/search-icon.png" ?>" alt="Searchbar Icon">
							</button>
						</div>
					</form>
					<ul class="navigation mobile-navigation">
						<li>
							<a href="">Our Tracks</a>
						</li>
						<li>
							<a href="">Find Events</a>
						</li>
						<li>
							<a href="">Track Map</a>
						</li>
						<li>
							<a href="">Shop</a>
						</li>
						<li>
							<a href="">About Us</a>
						</li>
					</ul>
				</div>

			</div>
			<!-- Navbar -->
			<div class="navbar-wrapper">
				<div class="bg-pattern bg-green-300 top-bar">
					<div class="container w-100">
						<div class="d-flex align-items-center justify-content-between">
							<a href="<?php echo home_url()  ?>" class="logo">
								<img src="<?php echo get_template_directory_uri() . "/assets/img/logo.png" ?> " alt="Adidas Logo">
							</a>
							<div class="secondary-menu-desktop">
								<button class="btn btn-style-1 text-uppercase">
									Membership
								</button>
								<button class="btn btn-style-1 text-uppercase">
									Account
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-pattern bg-green-200 bottom-bar">

					<div class="container">
						<div class="d-flex align-items-center justify-content-between">
							<ul class="navigation">
								<li>
									<a href="">Our Tracks</a>
								</li>
								<li>
									<a href="">Find Events</a>
								</li>
								<li>
									<a href="">Track Map</a>
								</li>
								<li>
									<a href="">Shop</a>
								</li>
								<li>
									<a href="">About Us</a>
								</li>

							</ul>

							<form>
								<div class="searchbar bg-pattern">
									<input placeholder="SEARCH" type="text">
									<button class="icon-button">
										<img src="<?php echo get_template_directory_uri() . "/assets/img/search-icon.png" ?>" alt="Searchbar Icon">
									</button>
								</div>
							</form>
						</div>
					</div>

				</div>

			</div>
		</header>