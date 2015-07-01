 <?php get_header(); ?>

 <main role="main" class="blog">

<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1>News</h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 			<button class="scroll-jumbo">
				<img src="<?php echo get_template_directory_uri() . '/img/arrow_home.svg'; ?>" alt="Go Down">
			</button>
 		</div>
</section>

<section data-scroll>
	<?php echo do_shortcode('[ajax_load_more post_type="post" button_label="View More News" posts_per_page="4" transition="fade" destroy_after="3"]'); ?>
</section>



 </main>

 <?php get_footer(); ?>




