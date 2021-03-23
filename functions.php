<?php


/**
*
* Temaplate Name: functions.php
* Description: Add features to WordPress theme
*/

$dir = get_template_directory();

/* All css,js include here*/
require $dir.'/inc/enqueue.php'; 

/* Customizing Settings here*/
require $dir.'/templates/helpers/customizer.php'; 

/* Theme Support */

function travello_theme_support(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array('search-form') );
	add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', 'travello_theme_support' );

/*Registering Menu*/

function travello_nav_menu(){
	register_nav_menus( array(

		'primary-menu' =>__('Header Menu','travello'),
		'footer-menu' =>__('Footer Menu', 'travello')
	));
}

add_action( 'init', 'travello_nav_menu');


/* Logo area */

function change_logo_class( $html ) {
    $html = str_replace( 'custom-logo', 'logo-img', $html );
    return $html;
}

add_filter( 'get_custom_logo', 'change_logo_class' );
?>