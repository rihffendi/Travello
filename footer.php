
<!-- footer area starts -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class="widget-1  pt-5">
	  				<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="logo-img">
					<p class="font-weight-light text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
					<div class="social-media">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
						<span><i class="fab fa-instagram-square"></i></span>
						<span><i class="fab fa-linkedin"></i></span>
					</div>
				</div>
			</div>
			<div class="col-lg-3  col-md-12 col-sm-12 col-xs-12">
				<div class="widget-2  pt-5">
					<h5 class="text-light">Recent Post</h5>
					<hr>
					<?php
					$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;

					$args = array(
						'post-type' => 'post',
						'order' => 'DESC',
						'posts_per_page' => 6,
						'data_query' => array(
							'after' => '-30 days',
							'column' => 'post_data'
						),
						'paged' => $paged
					);

					$loop = new Wp_Query($args);
					?>

					<?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post();?>
						<?php if(has_post_thumbnail()) : ?>
							<a href="<?php the_permalink( ); ?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""></a>
						<?php endif;?>

					<?php 
						endwhile; 
						endif;
	 					wp_reset_query();
	 					wp_reset_postdata();
					?>			
				</div>
			</div>
			<div class="col-lg-3  col-md-12 col-sm-12 col-xs-12">
				<div class="widget-3  pt-5 p-3">
					<h5 class="text-light">Newsletter</h5>
					<hr>
					<form>
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
					     <button class="btn btn-secondary shadow-none mt-3" type="button">Subscribe</button>
					  </div>
					</form>
				</div>
			</div>
			<div class="col-lg-3  col-md-12 col-sm-12 col-xs-12">
				<div class="widget-4  pt-5">
					<h5 class="text-light">All Pages</h5>
					<hr>
				<!-- 	<nav class="nav flex-column">
					  <a class="nav-link text-light" href="#">Active</a>
					  <a class="nav-link text-light" href="#">Link</a>
					  <a class="nav-link text-light" href="#">Link</a> -->
			
					  	<?php 
					  		$args = [
					  			'theme_location' => 'footer-menu',
					  			'container' => 'div',
					  			'container_class' => 'widget-4',
					  			'menu' => 'nav',
					  			'menu_class' =>'nav flex-column',
					  			'fallback_cb' => false
					  		];

					  		wp_nav_menu( $args );
					  	?>
					<!-- </nav> -->
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="copyright">
		   <hr>
		   <p class="text-light text-center p-3 font-weight-light">Copyrights Are Reserved</p>
		</div>
	</div>
</footer>

<!-- footer area ends -->

<?php wp_footer();?>
</body>
</html>