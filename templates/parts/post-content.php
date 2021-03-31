



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="card card-width">
	
	<?php if(has_post_thumbnail()) : ?>
		<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url();?>" alt="Card image cap">
	<?php endif; ?>

	<div class="card-body">
		<h3 class="card-title"><a  class="text-dark" href="<?php the_permalink();?>"><?php echo the_title(); ?></a></h3>
		<p class="card-text font-weight-light small"><?php echo get_the_excerpt(); ?></p>
		<a href="<?php the_permalink();?>" class="btn btn-sm btn-dark">read more</a>
		<hr>
		<span class="small font-weight-light">By <a class="text-dark"href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'))?>"><?php the_author();?></a></span><span class="small font-weight-light"> - <?php echo get_the_date(); ?></span>
		
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php esc_html_e( 'Sorry, no post was found.' ); ?></p>
<?php endif?>