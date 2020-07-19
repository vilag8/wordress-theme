<?php

/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'dev_setup' ) ) {

	function dev_setup() {

		add_theme_support( "title-tag" );

		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Thumbnail sizes
		add_image_size( 'dev_single', 200, 100, true ); //(cropped)
		add_image_size( 'dev_big', 600, 400, true ); 	//(cropped)

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'dev' ),
		) );

		// Load theme languages
		load_theme_textdomain( 'dev', get_template_directory().'/languages' );

	}

}
add_action( 'after_setup_theme', 'dev_setup' );

/*  Register sidebars
/* ------------------------------------ */
if ( ! function_exists( 'dev_sidebars' ) ) {

	function dev_sidebars()	{
		register_sidebar(array( 'name' => esc_html__( 'Primary', 'dev' ),'id' => 'primary','description' => esc_html__( 'Normal full width sidebar.', 'dev' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	}

}
add_action( 'widgets_init', 'dev_sidebars' );


/*  Include Styles and script
/* ------------------------------------ */
if ( ! function_exists( 'dev_styles_scripts' ) ) {

	function dev_style_scripts() {

		//wp_enqueue_script('jquery') nel footer;
		wp_enqueue_script( 'dev-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );

		wp_enqueue_style( 'miotema-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');

		wp_enqueue_style( 'dev', get_template_directory_uri().'style/.css');
	}

}
add_action( 'wp_enqueue_scripts', 'dev_style_scripts' );



function excerpt_readmore($more) {
    return '... <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'leggi di più' . '</a>';
}
add_filter('the_excerpt', 'excerpt_readmore');
