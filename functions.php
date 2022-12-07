<?php

	if(!defined('THEME_DIR')) {
		define('THEME_DIR',get_theme_root().'/'.get_template().'/');
	}

	if(!defined('THEME_URL')) {
		define('THEME_URL',WP_CONTENT_URL.'/themes/'.get_template().'/');
	}
	
	require_once THEME_DIR.'libs/post-types.php';
	require_once THEME_DIR.'libs/utils.php';


	//--------------Register menus--------------//
	if(function_exists('register_nav_menus')) { 
		register_nav_menus (array(
			'main_nav' => 'Menu glowne'
		));
	}

	//-------------Feature image support single.php ----------//
	add_theme_support( 'post-thumbnails' );



	function wpb_widgets_init() {
 
		register_sidebar( array(
			'name' => __( 'Recent posts in single post', 'wpb' ),
			'id' => 'recent_post_sidebar',
			'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		}
	 
	add_action( 'widgets_init', 'wpb_widgets_init' );


	function custom_excerpt_length( $length ) {
		return 18;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
?>