<?php

/* Template Name: Services */

 ?>

 <?php get_header(); ?>

 <main role="main">
	
	<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1>For Professionals</h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 		</div>
	</section>

	<section id="tiles">
	<?php if(have_posts()) : while(have_posts()) : the_post(); 

		if(have_rows('service')) : 

			$i = 0;

			while(have_rows('service')) : the_row(); 

				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$link = get_sub_field('link');
			
				if($i % 2 == 0){ ?>
					
				<div class="row third box-content">
					<div class="image" id="kid1" style="background-image: url(<?php echo $image; ?>);"></div>
					<div class="content">
						<h2><?php echo $title; ?></h2>
						<a class="read-mores" href="<?php echo $link; ?>">Read More</a>
					</div>
				</div>
				<?php $i++; ?>

				<?php } else { ?>

				<div class="row third box-content">
					<div class="content">
						<h2><?php echo $title; ?></h2>
						<a class="read-mores" href="<?php echo $link; ?>">Read More</a>
					</div>
					<div class="image" id="kid1" style="background-image: url(<?php echo $image; ?>);"></div>
				</div>
				<?php $i++; ?>
			
			<?php } ?>

		<?php endwhile; endif; ?>

	<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>

</main>

 <?php get_footer(); ?>