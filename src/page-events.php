<?php


/* Template Name: Events */



 ?>

 <?php get_header(); ?>

 <main role="main">
	
	<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1>Events</h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 		</div>
	</section>

	<section id="tiles">

	<?php

	$args = array(
		'post_type' => 'events',
		'posts_per_page' => 4
		);

	$query = new WP_Query($args);

	if($query->have_posts()) :

		$i = 0;

		while($query->have_posts()) : $query->the_post(); 

		if($i % 2 == 0){ ?>

			<div class="row third box-content">
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<a class="read-mores" href="<?php the_permalink(); ?>">Learn More</a>
				</div>
				<div class="image" id="kid1"></div>
			</div>

			<?php $i++; ?>

		<?php } else { ?>
			
			<div class="row third box-content">
				<div class="image" id="kid1"></div>
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<a class="read-mores" href="<?php the_permalink(); ?>">Learn More</a>
				</div>
			</div>

			<?php $i++; ?>

		<?php } endwhile; endif; wp_reset_postdata(); ?>


	</section>


</main>

<?php get_footer(); ?>