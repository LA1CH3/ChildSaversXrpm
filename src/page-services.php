<?php

/* Template Name: Services */

 ?>

 <?php get_header(); ?>

 <main role="main">
	
	<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1>Services</h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 			<button class="scroll-jumbo">
				<img src="<?php echo get_template_directory_uri() . '/img/arrow_home.svg'; ?>" alt="Go Down">
			</button>
 		</div>
	</section>

	<section class="story" data-scroll>

		<h2>Our Services</h2>
		<p>We offer a variety of services for parents and professionals who work with children who have experienced trauma.</p>
		
	</section>

	<section id="tiles">
					
				<div class="row third box-content">
					<div class="image" id="kid1" style="background-image: url(<?php echo $image; ?>);"></div>
					<div class="content">
						<h2>For Parents</h2>
						<a class="read-mores" href="<?php echo site_url('/service-type/for-parents/'); ?>">View More</a>
					</div>
				</div>

				<div class="row third box-content">
					<div class="content">
						<h2>For Professionals</h2>
						<a class="read-mores" href="<?php echo site_url('/service-type/for-professionals/'); ?>">View More</a>
					</div>
					<div class="image" id="kid1" style="background-image: url(<?php echo $image; ?>);"></div>
				</div>
	</section>

</main>

 <?php get_footer(); ?>