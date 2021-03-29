<?php get_header(); ?>


<!-- main area starts-->
<main class="main-area">
	<!-- banner area starts -->
	<section class="banner-area">
		<div class="container-fluid">
			<div class="banner">
			<?php if(get_theme_mod('header_image')):?>
				<img src="<?php echo esc_url(get_theme_mod('header_image')) ;?>" alt="" class="img-fluid">
			<?php endif;?>
			</div>
		</div>
		<div class="banner-title text-center">
			<?php if(get_theme_mod('header_text_field')): ?>
				<h1 class="text-lg text-light"><?php echo get_theme_mod('header_text_field') ; ?></h1>
			<?php endif; ?>

			<?php if(get_theme_mod('header_desc_field')): ?>
				<span class="small text-light"><?php echo get_theme_mod('header_desc_field') ;?></span>
			<?php endif;?>
		</div>
	</section>
	<!-- banner area ends -->

	<!-- post area starts -->
	<section class="post-area">
		<div class="container">
			<div class="row">
			<!-- article  area starts-->
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/blog-1.jpg" alt="Card image cap">
							<div class="card-body">
								<h3 class="card-title">Card title</h3>
								<p class="card-text font-weight-light small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-sm btn-dark">read more</a>
								<hr>
								<span class="small font-weight-light">By Admin</span><span class="small font-weight-light"> - February 2021</span>
								
							</div>
						</div>
						<div class="card">
							<img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/blog-2.jpg" alt="Card image cap">
							<div class="card-body">
								<h3 class="card-title">Card title</h3>
								<p class="card-text font-weight-light small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-sm btn-dark">read more</a>
								<hr>
								<span class="small font-weight-light">By Admin</span><span class="small font-weight-light"> - February 2021</span>
							</div>
						</div>
						<div class="card">
							<img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/blog-3.jpg" alt="Card image cap">
							<div class="card-body">
								<h3 class="card-title">Card title</h3>
								<p class="card-text font-weight-light small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-sm btn-dark">read more</a>
								<hr>
								<span class="small font-weight-light">By Admin</span><span class="small font-weight-light"> - February 2021</span>
							</div>
						</div>
						<div class="card">
							<img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/blog-4.jpg" alt="Card image cap">
							<div class="card-body">
								<h3 class="card-title">Card title</h3>
								<p class="card-text font-weight-light small">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-sm btn-dark">read more</a>
								<hr>
								<span class="small font-weight-light">By Admin</span><span class="small font-weight-light"> - February 2021</span>
							</div>
						</div>
					</div>
				<!-- article area ends -->
				<div class="col-lg-4  col-md-12 col-sm-12 col-xs-12">
					<!-- sidebar area starts -->
					<aside class="latest-aside">
						<!-- latest post starts -->
							<h3>Latest Post</h3>
							<hr>
							<section class="latest-post">
								  <div class="wrap">
									  <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-1.jpg" alt="" class="img">
									  <div class="small-section">
									  	<h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing</h6>
									  	<span>By Admin</span><span> - February 2021</span>
									  </div>
								  </div>
								  <hr>
								   <div class="wrap">
									  <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-2.jpg" alt="" class="img">
									  <div class="small-section">
									  	<h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing</h6>
									  	<span>By Admin</span><span> - February 2021</span>
									  </div>
								  </div>
								  <hr>
								   <div class="wrap">
									  <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-3.jpg" alt="" class="img">
									  <div class="small-section">
									  	<h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing</h6>
									  	<span>By Admin</span><span> - February 2021</span>
									  </div>
								  </div>
								  <hr>
								   <div class="wrap">
									  <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-4.jpg" alt="" class="img">
									  <div class="small-section">
									  	<h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing</h6>
									  	<span>By Admin</span><span> - February 2021</span>
									  </div>
								  </div>
							</section>
						<!-- latest post ends -->
						<!-- search starts here -->
						<div class="pt-5">
							<hr>
							<form class="form-inline my-2 my-lg-0">
						      <div class="input-group mb-3 mt-3">
								  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
								  <div class="input-group-append">
								    <button class="btn btn-secondary shadow-none" type="button"><i class="fas fa-search"></i></button>
								  </div>
								</div>
						    </form>
						    <hr>
						</div>
						<!-- starts ends here -->
						
						<!-- categories starts here -->
							<section class="categories pt-5">
								<h3>Categories</h3>
								<hr>
								<div class="cat flex flex-row flex-wrap">
									<a href=""><span>camera</span></a>
									<a href=""><span>bike</span></a>
									<a href=""><span>article</span></a>
									<a href=""><span>events</span></a>
									<a href=""><span>bicycle</span></a>
									<a href=""><span>tv</span></a>
									<a href=""><span>phone</span></a>
								</div>
							</section>
						<!-- categories ends here -->
					</aside>
					<!-- sidebar area ends -->
				</div>
			</div>
		</div>
	</section>
	<!-- post area ends -->
	<!-- pagination starts -->
	
	<section class="pagination pt-5">
		<div class="container">
			<nav aria-label="Page navigation example">
			    <ul class="pagination justify-content-center">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
	</section>
	
	<!-- pagination ends  -->
</main>
<!-- main area ends -->

<?php get_footer();?>