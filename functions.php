<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
function sitelogo()
{
	$output = '';
	$output .= '<a class="navbar-brand" aria-label="home" href="' . get_home_url() . '">';
	$custom_logo_id = get_theme_mod('custom_logo');
	$custom_logo_attr = '';
	if ($custom_logo_id) {
		$custom_logo_attr = array(
			'class' => 'custom-logo',
		);
		$image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
		if (empty($image_alt)) {
			$custom_logo_attr['alt'] = get_bloginfo('name', 'display');
		}
	}
	$output .= wp_get_attachment_image($custom_logo_id, 'full', 'false', $custom_logo_attr) . '</a>';
	echo $output;
}

add_action( 'after_setup_theme', 'theme_register_nav_menus' );

function theme_register_nav_menus() {
	register_nav_menu('footer_menu_1', 'Navigation');
	register_nav_menu('footer_menu_2', 'Industry Links');
	register_nav_menu('footer_menu_3', 'Social Links');
	add_theme_support('title-tag');
	add_image_size('post_head_image', 848, 355, true);
}

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function trim_excerpt($text)
{
return str_replace(' [...]', '', $text);
}
add_filter('get_the_excerpt', 'trim_excerpt');

add_action( 'init', 'register_specialization_post_type' );
function register_specialization_post_type() {
	$labels = array(
		'name'               => _x( 'Futured Posts', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Futured Post', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Futured Posts', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Futured Post', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add Futured Posts', 'client', 'understrap' ),
		'add_new_item'       => __( 'Add New Futured Post', 'understrap' ),
		'new_item'           => __( 'New Futured Post', 'understrap' ),
		'edit_item'          => __( 'Edit Futured Post', 'understrap' ),
		'view_item'          => __( 'ViewFutured Post', 'understrap' ),
		'all_items'          => __( 'All Futured Posts', 'understrap' ),
		'search_items'       => __( 'Search Futured Posts', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Futured Post:', 'understrap' ),
		'not_found'          => __( 'No Futured Posts found.', 'understrap' ),
		'not_found_in_trash' => __( 'No Futured Posts found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Our Futured Posts.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => '' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor'),
		'menu_icon'			 => 'dashicons-welcome-add-page'	
	);

	register_post_type( 'specializations', $args );
}


