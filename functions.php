<?php
/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
	define( 'PAMP_VERSION', 1.0 );

	define( 'AMP__FILE__', __FILE__ );
	define( 'AMP__DIR__', dirname( __FILE__ ) );

	require_once( AMP__DIR__ . '/includes/amp-helper-functions.php' );
	require_once( AMP__DIR__ . '/includes/class-amp-post-template.php' ); 
	require_once( AMP__DIR__ . '/includes/amp-frontend-actions.php' );
	require_once( AMP__DIR__ . '/includes/amp-post-template-actions.php' );

	/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
