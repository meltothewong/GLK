<?php

/**
* Starkers functions and definitions
* For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
* @package 	WordPress
* @subpackage 	Starkers
* @since 		Starkers 4.0
*/

/* ========================================================================================================================

Required external files

======================================================================================================================== */

require_once( 'parts/starkers-utilities.php' );

/* ========================================================================================================================

Theme specific settings

======================================================================================================================== */

add_theme_support('post-thumbnails');

register_nav_menus(array('main-menu' => 'Main Menu'));

function http_or_https() { 
	if (is_ssl()) { echo 'https'; } else { echo 'http'; } 
}

// [media] shortcode
function media_func( $atts ) {
	extract( shortcode_atts( array(
		'type' => 'datasheet',
		'title' => 'Title',
		'description' => 'Description',
		'url' => '#',
        'imageurl' => '#',
		'modal_title' => 'Please Register',
		'campaign_id' => '',
	), $atts ) );
	$typetext = 'PDF';
	if ($type == 'video') {
		$typetext = 'Video';
	} elseif ($type == 'web') {
		$typetext = 'Web';
	} elseif ($type == 'calculator') {
		$typetext = 'TCO';
	}
    $mediaimage = '';
    if ($type == 'big') {
        $mediaimage = '<img alt="'.$title.'" src="'.$imageurl.'">';
    } else {
        $mediaimage = $typetext;
    }
	$modal_url = '';
	$modal_launch_class = '';
	if ($campaign_id) {
		$modal_url = $url;
		$url = '#';
		$modal_launch_class = 'modal-launch';
	}
	return '<div>
				<a class="media media-'.$type.' '.$modal_launch_class.'" href="'.$url.'" data-modal-title="'.$modal_title.'" data-modal-url="'.$modal_url.'" data-campaign-id="'.$campaign_id.'">
					<div class="media-image">'.$mediaimage.'</div>
					<div class="media-body">
						<h3>'.$title.'</h3>
						<p>'.$description.'</p>
					</div>
				</a>
			</div>';
}
add_shortcode( 'media', 'media_func' );

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links', 2 );
	remove_action('wp_head', 'feed_links_extra', 3 );
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Remove plugin stylesheets
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( 'wp-pagenavi' );
	wp_deregister_style( 'jetpack-widgets' );
}

// Load jQuery
if( !is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"), false, null);
	wp_enqueue_script('jquery');
}

function dequeue_devicepx() {
	wp_dequeue_script( 'devicepx' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );

/* ========================================================================================================================

Actions and Filters

======================================================================================================================== */


add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

function new_excerpt_more($more) {
       global $post;
	return '&hellip;';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 29;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'wp_head', 'wpe_show_template_name' );
function wpe_show_template_name() {
	if ( is_home() || is_front_page() ) {
		echo '<!--';
		echo get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
		echo '-->';
	}
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="button button-default"';
}


?>
