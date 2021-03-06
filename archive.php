<?php get_header('color'); ?>


<!-- main area starts-->
<main class="main-area">

	<!-- post area starts -->
	<section class="post-area pt-5">
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