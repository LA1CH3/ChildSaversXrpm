<?php


/* Template Name: About */



 ?>

 <?php get_header(); ?>

 <main role="main">
	
	<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1>About Us</h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 		</div>
	</section>
	<section class="story">

	<?php if(have_posts()) : while(have_posts()) : the_post(); 

	// grabbing custom fields
	$mission = get_field('mission');
	$vision = get_field('vision'); ?>


		<h2>Our Story</h2>
		<?php the_content(); ?>
	</section>
	<section class="tiles-about">
		<div class="row third box-content">
				<div class="content">
					<h2>Mission</h2>
					<?php echo $mission; ?>
				</div>
				<div class="image" id="kid1"></div>
			</div>
			<div class="row third box-content kid3box">
				<div class="image" id="kid3"></div>
				<div class="content">
					<h2>Vision</h2>
					<?php echo $vision; ?>
				</div>
			</div>
	</section>
	<section class="shared">
		<h2 class="cs-header-2">Statement of Shared Values</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi id modi, cum dignissimos quae explicabo iste, voluptatibus obcaecati in, molestiae nobis ratione. Perspiciatis quasi voluptatibus esse corrupti, suscipit saepe. Id?</p>
		<div class="values-slider">

		<?php if(have_rows('slider')):

				while(have_rows('slider')) : the_row();

				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$content = get_sub_field('content');

			?>
			<div>
				<?php echo wp_get_attachment_image($image, 'full'); ?>
				<h2 class="cs-header-2"><?php echo $title; ?></h2>
				<?php echo $content; ?>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</section>

<?php endwhile; endif; wp_reset_postdata(); ?>



 </main>

 <?php get_footer(); ?>