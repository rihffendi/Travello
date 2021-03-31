<?php

/*
	Template Name : Catefories-content
	Description : Add Categroies here
*/


	$categories = get_categories( array(
		'orderby' => 'name',
		'parent' => 0
	));


	foreach ($categories as $category) {
		printf('<a href="%1$s"><span>%2$s</span></a>',
			esc_url( get_category_link( $category->term_id )),
			esc_html( $category->name )
		);
	}

?>
