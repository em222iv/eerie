<?php

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('style1', get_template_directory_uri().'/css/image.css');
    wp_enqueue_style('style2', get_template_directory_uri().'/css/landskap.css');
    wp_enqueue_style('style3', get_template_directory_uri().'/css/material.min.css');
    wp_enqueue_style('style4', get_template_directory_uri().'/css/ripples.min.css');
    wp_enqueue_style('style5', get_template_directory_uri().'/css/select2.min.css');
    wp_enqueue_script('script', get_template_directory_uri().'/js/fb-feed.js');
    wp_enqueue_script('script1', get_template_directory_uri().'/js/flash-message-styling.js');
    wp_enqueue_script('script2', get_template_directory_uri().'/js/map.js');
    wp_enqueue_script('script3', get_template_directory_uri().'/js/material.min.js');
//    wp_enqueue_script('script4', get_template_directory_uri().'/js/potomak-insta.min.js');
    wp_enqueue_script('script5', get_template_directory_uri().'/js/ripples.min.js');
//    wp_enqueue_script('script6', get_template_directory_uri().'/js/scroll-up-button.js');
    wp_enqueue_script('script7', get_template_directory_uri().'/js/select2.min.js');

}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');



// Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
		
	}
	
	return $post->ID;
	
}

// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

// Customize excerpt word count length
function custom_excerpt_length() {
	return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');



// Theme setup
function learningWordPress_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
	
	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learningWordPress_setup');

// Add Widget Areas
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="footer-widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="footer-widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="footer-widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="footer-widget-title">',
		'after_title' => '</h2>',
	));

    //threefolds
    register_sidebar( array(
        'name' => 'First threefold part',
        'id' => 'part1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',


    ));
    register_sidebar( array(
        'name' => 'Second threefold part',
        'id' => 'part2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',


    ));

    register_sidebar( array(
        'name' => 'Third threefold part',
        'id' => 'part3',

        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',


    ));



}

add_action('widgets_init', 'ourWidgetsInit');




