<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// include JS & CSS Classes in theme
function my_custom_theme_scripts(){
    // wp_deregister_script( 'jquery' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), null, 'all' );
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jQuery.min.js', array(), null, true );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'Popper', get_template_directory_uri() . '/js/popper.min.js', array(), null, true );
	wp_enqueue_script( 'Custom', get_template_directory_uri() . '/js/custom.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_scripts');

//theme setup function
function my_custom_theme_setup(){
	// add menu support
	add_theme_support( 'menus' );
	// add background support
    add_theme_support( 'custom-background' );
    // add header support
    $headerArgs = array(
        'width'           => 1250,
        'height'          => 260,
        'uploads'         => true,
        'random-default'  => false,
        'header-text'     => true,
    );
    add_theme_support( 'custom-header' , $headerArgs );
    add_theme_support( 'custom-logo', array(
        'height'      => 40,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

	// register menu location
	register_nav_menu( 'primary', 'Header Menu' );
    add_theme_support( 'post-thumbnails', array( 'page' ) );

    // activate html5 for search form
    // add_theme_support( 'html5', array('search-form') );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

function custom_widgets_area_registration(){
    register_sidebar( 
        array(
            "name" => "footer-sidebar-1",
            "id" => "footer-sidebar-1",
            "class" => "",
            "description" => "",
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>', 
        )
    );

     register_sidebar( 
        array(
            "name" => "footer-sidebar-2",
            "id" => "footer-sidebar-2",
            "class" => "",
            "description" => "",
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>', 
        )
    );

      register_sidebar( 
         array(
             "name" => "footer-sidebar-3",
             "id" => "footer-sidebar-3",
             "class" => "",
             "description" => "",
             'before_widget' => '<section id="%1$s" class="widget %2$s">',
             'after_widget'  => '</section>',
             'before_title'  => '<h2 class="widget-title">',
             'after_title'   => '</h2>', 
         )
     );
}
add_action( "widgets_init", "custom_widgets_area_registration" );