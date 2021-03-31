<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

	<meta charset="<?php bloginfo( 'charset' )?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head();?>

</head>
<body>

<!-- header area starts -->
<header>
	<div class="container pt-3">
		<div class="bg-dark">
		<nav class="navbar navbar-expand-lg">
		  <a class="navbar-brand text-light" href="#">
		  	<?php if(function_exists('the_custom_logo')){
	  			the_custom_logo();
		  	}
		  	else{
		  		bloginfo( 'name' );	
		  	}
		  	?>
		  </a>
		  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
		  </button>

		  	<?php 
		  		$args = [
		  			'theme_location' => 'primary-menu',
		  			'container' => 'div',
		  			'container_class' => 'collapse navbar-collapse',
		  			'container_id' => 'navbarSupportedContent',
		  			'menu' => 'ul',
		  			'menu_class' =>'navbar-nav ml-auto',
		  			'fallback_cb' => false
		  		];

		  		wp_nav_menu( $args );
		  	?>
		</nav>	
		</div>
	</div>
</header>

<!-- header area ends -->