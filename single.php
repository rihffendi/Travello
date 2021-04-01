<?php get_header('color'); ?>


<!-- main area starts-->
<main class="main-area">
	<!-- post area starts -->
	<section class="post-area pt-5">
		<div class="container">
			<div class="row">
			<!-- article  area starts-->
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="card">
							
							<?php if(has_post_thumbnail()) : ?>
								<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url();?>" alt="Card image cap">
							<?php endif; ?>

							<div class="card-body p-5">
								<h3 class="card-title font-weight-bold pt-3 pb-3 "><?php echo the_title(); ?></h3>
								<hr>
								<span class="small font-weight-light">By <a class="text-dark"href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'))?>"><?php the_author();?></a></span><span class="small font-weight-light"> - <?php echo get_the_date(); ?></span>
								<hr>
								<p class="pt-3 card-text font-weight-light small"><?php echo get_the_content(); ?></p>
								
								
							</div>
						</div>

						<?php endwhile; else: ?>
							<p><?php esc_html_e( 'Sorry, no post was found.' ); ?></p>
						<?php endif?>
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