<?php

/**
*
* Template Name : customizer.php
* Description : add customize setting here
*/


function travello_customizer($wp_customizer){

	//new section of settings
	$wp_customizer->add_section('header',array(
		'title' => __('Header Settings','travello'),
		'priority' => 70
	));

	/*
	   Header Image settings
	   ----------------------------------------------
	*/

	$wp_customizer->add_setting('header_image',array(
		'capabilty' =>'edit_theme_options'
	));

	//control of settings
	$wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'header_image',array(
		'label' => __('Header Image','travello'),
		'section' => 'header'
	)));

	/*--------------------------------------------*/


	/*
	   Header Title settings
	   ----------------------------------------------
	*/

	$wp_customizer->add_setting('header_text_field',array(
		'capabilty' =>'edit_theme_options',
		'default' => 'Travel'
	));

	//control of settings
	$wp_customizer->add_control('header_text_control',array(
		'label' => __('Header Title','travello'),
		'description' => 'Change your header title here',
		'section' => 'header',
		'settings' => 'header_text_field'
	));

	/*--------------------------------------------*/


	/*
	   Header Description settings
	   ----------------------------------------------
	*/

	$wp_customizer->add_setting('header_desc_field',array(
		'capabilty' =>'edit_theme_options',
		'default' => 'Make Your Journey Always Better'
	));

	//control of settings
	$wp_customizer->add_control('header_description_control',array(
		'label' => __('Header Description','travello'),
		'description' => 'Change your header description here',
		'section' => 'header',
		'settings' => 'header_desc_field'
	));

	/*--------------------------------------------*/

}

add_action('customize_register','travello_customizer');




?>