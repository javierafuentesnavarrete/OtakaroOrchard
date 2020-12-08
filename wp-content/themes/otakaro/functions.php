<?php

/**
 * Otakaro orchard functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Otakaro_orchard
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('otakaro_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function otakaro_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Otakaro orchard, use a find and replace
		 * to change 'otakaro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('otakaro', get_template_directory() . '/languages');

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
				'menu-1' => esc_html__('Primary', 'otakaro'),
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
				'otakaro_custom_background_args',
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
endif;
add_action('after_setup_theme', 'otakaro_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function otakaro_content_width()
{
	$GLOBALS['content_width'] = apply_filters('otakaro_content_width', 640);
}
add_action('after_setup_theme', 'otakaro_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function otakaro_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'otakaro'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'otakaro'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'otakaro_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function otakaro_scripts()
{
	wp_enqueue_style('otakaro-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('otakaro-style', 'rtl', 'replace');

	wp_enqueue_script('otakaro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'otakaro_scripts');
wp_enqueue_style('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

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

require_once get_template_directory() . '/inc/custom_post_types.php';
require_once get_template_directory() . '/inc/custom_taxonomies.php';
require_once get_template_directory() . '/inc/cutom_taxonomies_donate.php';
require_once get_template_directory() . '/inc/custom_post_donate.php';
require_once get_template_directory() . '/inc/custom_post_about_us.php';
require_once get_template_directory() . '/inc/custom_taxonomy_about_us.php';

function mytheme_customize_register($wp_customize)
{
	//All our sections, settings, and controls will be added here

	$wp_customize->remove_section('title_tagline');
	$wp_customize->remove_panel('themes');
	$wp_customize->remove_panel('widgets');
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_panel('nav_menus');
	$wp_customize->remove_section('static_front_page');
	$wp_customize->remove_section('custom_css');
}
add_action('customize_register', 'mytheme_customize_register', 50);



//---------------Welcome admin message
add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
function custom_dashboard_widgets()
{
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_contact_widget', 'Client', 'custom_dashboard_contact');
}
function custom_dashboard_contact()
{
	// Widget Content Here
	echo '<p>if you want to edit<strong> Contact Us page</strong>, what you need to do is
<br>
1.Go to <strong>Apparence/Customize</strong>
<br>
2. Select on Customize Contact Us First/Second contact
<br>
3.You get 3 labels Name/Email/Ph Number, you can change any of them
<br>
4.Once the changed are done, go <strong>Publish</strong></p>';
}



//Remove tools menu
function wpse26980_remove_tools()
{
	remove_menu_page('tools.php');
}
add_action('admin_menu', 'wpse26980_remove_tools', 99);

//----------------Customize
//Support us page - Sponsorship Levels

//Contact Us Page
//First contact


function contact2_media_section($wp_customize)
{
	$wp_customize->add_section('contact2_media_object_section', array('title' => 'Customize Contact Us First Contact '));
	$wp_customize->add_setting('contact2_media_object_header', array('default' => 'Hayley Guglietta'));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'contact2_media_object-header-control',
			array(
				'label' => 'Name',
				'section' => 'contact2_media_object_section',
				'settings' => 'contact2_media_object_header',
				'active_callback' => function () {
					return is_post_type_archive('page-contact-us');
				},





			)
		)
	);
	$wp_customize->add_control('contact2_media_object_section', array(
		'label'           => __('Greeting'),
		'section'         => 'title_tagline',
		'settings' => 'contact2_media_object_header'

	));

	//Email
	$wp_customize->add_setting('contact2_media_object_paragraph', array('default' => 'hayley@guglietta.co.nz '));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'contact2_media_object-paragraph-control',
			array(
				'label' => 'Email',
				'section' => 'contact2_media_object_section',
				'settings' => 'contact2_media_object_paragraph',
				'type' => 'textarea'


			)
		)
	);
	//Ph number
	$wp_customize->add_setting('contact2_media_object_number', array('default' => '029 982 7180 '));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'contact2_media_object-number-control',
			array(
				'label' => 'Ph Number',
				'section' => 'contact2_media_object_section',
				'settings' => 'contact2_media_object_number',
				'type' => 'textarea'


			)
		)
	);
}
add_action('customize_register', 'contact2_media_section');

//Second contact
function contact_media_section($wp_customize)
{
	$wp_customize->add_section('contact_media_object_section', array('title' => 'Customize Contact Us SecondContact'));
	$wp_customize->add_setting('contact_media_object_header', array('default' => 'Matt Morris'));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'contact_media_object-header-control',
			array(
				'label' => 'Name',
				'section' => 'contact_media_object_section',
				'settings' => 'contact_media_object_header'


			)
		)
	);

	//Email
	$wp_customize->add_setting('contact_media_object_paragraph', array('default' => 'matt.morris111@live.com'));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'contact_media_object-paragraph-control',
			array(
				'label' => 'Email',
				'section' => 'contact_media_object_section',
				'settings' => 'contact_media_object_paragraph',
				'type' => 'textarea'


			)
		)
	);
	//Ph number
	$wp_customize->add_setting('contact_media_object_number', array('default' => '021 038 6638

 '));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'contact_media_object-number-control',
			array(
				'label' => 'Ph Number',
				'section' => 'contact_media_object_section',
				'settings' => 'contact_media_object_number',
				'type' => 'textarea'
			)
		)
	);
}

add_action('customize_register', 'contact_media_section');
if (!function_exists('wp_video_shortcode')) {
	require_once ABSPATH . WPINC . '/media.php';
}
