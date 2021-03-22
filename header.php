<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Website</title>

	<?php wp_head();?>

</head>
<body>

<!-- header area starts -->
<header>
	<div class="container pt-3">
		<nav class="navbar navbar-expand-lg">
		  <a class="navbar-brand text-light" href="#">
		  	<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="img-100">
		  </a>
		  <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto ">
		      <li class="nav-item">
		        <a class="nav-link text-light" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-light" href="#">Photography</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-light" href="#">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-light" href="#">Travel</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-light" href="#">People</a>
		      </li>
		    </ul>
		    
		  </div>
		</nav>	
	</div>
</header>

<!-- header area ends -->