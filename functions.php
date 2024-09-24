<?php

/**
 * sportswebsite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sportswebsite
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sportswebsite_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sportswebsite, use a find and replace
		* to change 'sportswebsite' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('sportswebsite', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'sportswebsite'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sportswebsite_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'sportswebsite_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sportswebsite_content_width()
{
	$GLOBALS['content_width'] = apply_filters('sportswebsite_content_width', 640);
}
add_action('after_setup_theme', 'sportswebsite_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sportswebsite_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sportswebsite'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sportswebsite'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'sportswebsite_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sportswebsite_scripts()
{
	// wp_enqueue_style('sportswebsite-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('sportswebsite-style', 'rtl', 'replace');

	wp_enqueue_script('sportswebsite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// Additional CSS and JS
	wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Oswald:wght@500;600&family=Roboto:wght@300;400;500&display=swap");

	wp_enqueue_style('fancybox-css', get_template_directory_uri() . "/lib/fancybox/fancy-box.min.css");
	wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . "/lib/owl-carousel/owl.carousel.min.css");
	wp_enqueue_style('owl-theme-css', get_template_directory_uri() . "/lib/owl-carousel/owl.theme.default.min.css");

	wp_enqueue_style('utils-css', get_template_directory_uri() . "/assets/css/utils.css");
	wp_enqueue_style('style-css', get_template_directory_uri() . "/assets/css/style.css");
	wp_enqueue_style('responsive-css', get_template_directory_uri() . "/assets/css/responsive.css");
	wp_enqueue_style('post-card-css', get_template_directory_uri() . "/assets/css/post-card.css");

	if (is_single()) {
		wp_enqueue_style('single-post-css', get_template_directory_uri() . "/assets/css/single-post.css");
		wp_enqueue_style('comment-form-css', get_template_directory_uri() . "/assets/css/comment-form.css");
	}

	wp_enqueue_script('jquery-js', get_template_directory_uri() . '/lib/jquery/jquery.min.js');
	wp_enqueue_script('fancybox-js', get_template_directory_uri() . '/lib/fancybox/fancy-box.min.js');
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/lib/owl-carousel/owl.carousel.min.js');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js');

	wp_localize_script('main-js', 'myTheme', array(
		'templateDirectoryUri' => get_template_directory_uri(),
	));
}
add_action('wp_enqueue_scripts', 'sportswebsite_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function mytheme_add_admin_menu()
{
	add_menu_page(
		'Theme Options',          // Page title
		'Theme Options',          // Menu title
		'manage_options',         // Capability
		'mytheme-options',        // Menu slug
		'mytheme_options_page',   // Callback function
		'dashicons-admin-generic', // Icon
		100                       // Position
	);
}

add_action('admin_menu', 'mytheme_add_admin_menu');

function mytheme_settings_init()
{
	register_setting('mytheme_options_group', 'mytheme_options');

	add_settings_section(
		'mytheme_section',        // Section ID
		'General Settings',       // Section title
		'mytheme_section_callback', // Callback function
		'mytheme-options'         // Page slug
	);

	add_settings_field(
		'mytheme_field_example',  // Field ID
		'Example Field',          // Field title
		'mytheme_field_example_render', // Callback function
		'mytheme-options',        // Page slug
		'mytheme_section'         // Section ID
	);

	add_settings_field(
		'mytheme_name',  // Field ID
		'Name',          // Field title
		'mytheme_field_name_render', // Callback function
		'mytheme-options',        // Page slug
		'mytheme_section'         // Section ID
	);

	add_settings_field(
		'mytheme_bg_color',        // Field ID
		'Background Color',        // Field title
		'mytheme_bg_color_render', // Callback function
		'mytheme-options',         // Page slug
		'mytheme_section'          // Section ID
	);
}
add_action('admin_init', 'mytheme_settings_init');

function mytheme_bg_color_render() {
    $options = get_option('mytheme_options');
    ?>
    <input type="text" name="mytheme_options[mytheme_bg_color]" value="<?php echo isset($options['mytheme_bg_color']) ? esc_attr($options['mytheme_bg_color']) : ''; ?>" class="my-color-field" data-default-color="#effeff">
    <?php
}

function mytheme_section_callback()
{
	echo '<p>General settings for the theme.</p>';
}

function mytheme_field_name_render()
{
	$options = get_option('mytheme_options');
?>
	<input type="text" name="mytheme_options[mytheme_name]" value="<?php echo isset($options['mytheme_name']) ? esc_attr($options['mytheme_name']) : ''; ?>">
<?php
}

function mytheme_field_example_render()
{
	$options = get_option('mytheme_options');
?>
	<input type="text" name="mytheme_options[mytheme_field_example]" value="<?php echo isset($options['mytheme_field_example']) ? esc_attr($options['mytheme_field_example']) : ''; ?>">
<?php
}

function mytheme_options_page()
{
?>
	<div class="wrap">
		<h1>Theme Options</h1>
		<form action="options.php" method="post">
			<?php
			settings_fields('mytheme_options_group');
			do_settings_sections('mytheme-options');
			submit_button('Save Settings');
			?>
		</form>
	</div>
<?php
}
