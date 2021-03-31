
<aside class="latest-aside">
	<!-- latest post starts -->
		<h3>Latest Post</h3>
		<hr>
		<section class="latest-post">
			<?php get_template_part('templates/parts/sidebar','latest-post');?>
		</section>
	<!-- latest post ends -->
	<!-- search starts here -->
	<div class="pt-5">
		<hr>
		<?php get_search_form();?>
	    <hr>
	</div>
	<!-- starts ends here -->
	
	<!-- categories starts here -->
		<section class="categories pt-5">
			<h3>Categories</h3>
			<hr>
			<div class="cat flex flex-row flex-wrap">
				<?php get_template_part('templates/parts/categories','content');?>
			</div>
		</section>
	<!-- categories ends here -->
</aside>