<?php


/* Template Name: Help */



 ?>

 <?php get_header(); ?>

 <main role="main">
	
	<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1>How To Help</h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 			<button class="scroll-jumbo">
				<img src="<?php echo get_template_directory_uri() . '/img/arrow_home.svg'; ?>" alt="Go Down">
			</button>
 		</div>
	</section>
	<section data-scroll>
		<div class="jumbo jumbo-help">
			<h2>ChildSavers' services are made possible through the financial gifts of people like you.</h2>
			<a class="read-mores help-link" target="_blank" href="https://ssl.charityweb.net/childsavers/">Donate Now</a>
		</div>
	</section>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<section class="tiles-about">
		<div class="row third box-content">
				<div class="content">
					<h2>Lunchtime at ChildSavers</h2>
					<p>You are invited to join us for Lunchtime @ ChildSavers. We’ll share with you our vision for Richmond’s children and our beautiful new Children’s Center. </p>
					<a class="read-mores" href="#">Contact Us</a>
				</div>
				<div class="image" id="kid1"></div>
			</div>
			<div class="row third box-content kid3box">
				<div class="image" id="kid3"></div>
				<div class="content">
					<h2>Wishlist</h2>
					<p>Toys, books, costumes, and art supplies are used every day at ChildSavers. Play, sand tray, and art therapy help children express themselves when they can’t find words.</p>
					<a href="#" class="read-mores">Learn More</a>
				</div>
			</div>
	</section>
	<section class="shared">
		<h2 class="cs-header-2">Volunteer Opportunities</h2>
		<p><strong>Volunteer Mission Statement:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi id modi, cum dignissimos quae explicabo iste, voluptatibus obcaecati in, molestiae nobis ratione. Perspiciatis quasi voluptatibus esse corrupti, suscipit saepe. Id?</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, iure, sint. Alias maxime sit ex necessitatibus odit quasi perferendis ducimus cumque debitis possimus natus optio nihil, repellat, fuga magni excepturi.</p>
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