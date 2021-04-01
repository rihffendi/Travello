<?php get_header('color'); ?>


<!-- main area starts-->
<main class="main-area">
	<!-- post area starts -->
	<section class="post-area pt-5">
		<div class="container">
			<div class="row">
			<!-- article  area starts-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="card">
							
							<?php if(has_post_thumbnail()) : ?>
								<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url();?>" alt="Card image cap">
							<?php endif; ?>

							<div class="card-body p-5">
								<h2 class="card-title font-weight-bold pt-3 pb-3 text-center "><?php echo the_title(); ?></h2>
								
								<p class="pt-3 card-text font-weight-light small"><?php echo get_the_content(); ?></p>
								
								
							</div>
						</div>

						<?php endwhile; else: ?>
							<p><?php esc_html_e( 'Sorry, no post was found.' ); ?></p>
						<?php endif?>
				</div>
				<!-- article area ends -->
			</div>
		</div>
	</section>
	<!-- post area ends -->
</main>
<!-- main area ends -->

<?php get_footer();?>