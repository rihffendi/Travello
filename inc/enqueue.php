<?php




function travello_enqueue_scripts() {
	
	//Css File Enlisted

    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0','all');

  	//Js File Enlisted

  	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/vendor/js/jquery-3.6.0.min.js', array(), '1.0.0', true );
  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(), '1.0.0', true );
  
    
}

add_action( 'wp_enqueue_scripts', 'travello_enqueue_scripts' );
?>
