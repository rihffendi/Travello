<?php



/*

	Template Name: Sidebar Latest Post
*/

$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;

$args = array(
	'post-type' => 'post',
	'posts_per_page' => 5,
	'paged' => $paged

);

$loop = new Wp_Query($args);

?>


<?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post();?>

 <div class="wrap">
 	<?php if(has_post_thumbnail()) :?>
	  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="post-image" class="img">
	<?php endif;?>
	  <div class="small-section">
	  	<h6 class="font-weight-bold"><a class="text-dark" href="<?php the_permalink();?>"><?php echo the_title();?></a></h6>
	  	<span class="font-weight-light">By <a class="text-dark "href="<?php echo get_author_posts_url( get_the_author_meta( 'ID'))?>"><?php the_author();?></a></span><span class="small font-weight-light"> - <?php echo get_the_date(); ?></span>
	  </div>
  </div>
  <hr>

<?php endwhile; else: ?>
	<p><?php esc_html_e( 'Sorry, no post was found.' ); ?></p>
<?php endif?>


<?php
 	wp_reset_query();
 	wp_reset_postdata();

?>












 