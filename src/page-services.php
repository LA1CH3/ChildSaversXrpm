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
	<?php 
	$args = array(
		'post_type' => 'services'
		);
	$query = new WP_Query($args);

	?>
	<?php if($query->have_posts()) : 
			$i = 0;
			while($query->have_posts()) : $query->the_post();  

				$image = get_field('image');
			
				if($i % 2 == 0){ ?>
					
				<div class="row third box-content">
					<div class="image" id="kid1" style="background-image: url(<?php echo $image; ?>);"></div>
					<div class="content">
						<h2><?php the_title(); ?></h2>
						<a class="read-mores" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
				<?php $i++; ?>

				<?php } else { ?>

				<div class="row third box-content">
					<div class="content">
						<h2><?php the_title(); ?></h2>
						<a class="read-mores" href="<?php the_permalink(); ?>">Read More</a>
					</div>
					<div class="image" id="kid1" style="background-image: url(<?php echo $image; ?>);"></div>
				</div>
				<?php $i++; ?>
			
			<?php } ?>

	<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>

</main>

 <?php get_footer(); ?>