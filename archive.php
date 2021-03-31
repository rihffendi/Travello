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
					<?php get_template_part('templates/parts/post','content');?>
				</div>
				<!-- article area ends -->
				<div class="col-lg-4  col-md-12 col-sm-12 col-xs-12">
					<!-- sidebar area starts -->
					 <?php get_sidebar();?>
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
			    <ul class="justify-content-center">

			    <?php echo paginate_links(array(
			    		'mid_size'  => 2,
			    		'prev_text' => __('<span class="fa fa-arrow-left"></span>'),
			    		'next_text' => __('<span class="fa fa-arrow-right"></span>')
			    ));?>
			  </ul>
			</nav>
		</div>
	</section>
	
	<!-- pagination ends  -->
</main>
<!-- main area ends -->

<?php get_footer();?>