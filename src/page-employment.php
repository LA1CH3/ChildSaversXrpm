<?php


/* Template Name: Employment */



 ?>

<?php get_header(); ?>

<main role="main">

	<section class="waypoint">
			<div class="jumbo jumbo-about">
	 			<h1>Employment Opportunities</h1>
	 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
	 			<button class="scroll-jumbo">
				<img src="<?php echo get_template_directory_uri() . '/img/arrow_home.svg'; ?>" alt="Go Down">
			</button>
	 		</div>
	</section>
	<section data-scroll class="shared">
		<h2 class="cs-header-2">Grow with us!</h2>
		<p>Located in a historic building at the top of Church Hill overlooking Shockoe Bottom, ChildSavers is proudly celebrating its 90th year serving children and families of Richmond with our diverse workforce.</p>
		<p>We believe all children have the right to be safe, healthy, happy, and ready to learn. We provide trauma response, mental health counseling and early childhood development services so that children have a chance to reach their potential and thrive.</p>
		<p>Join our team and make a difference in the life of a child.</p>
		<p><strong>ChildSavers is currently accepting applications for the following position(s):</strong></p>
	</section>
	<section class="tiles-about">
		<?php
		$args = array(
			'post_type' => 'employment',
			'posts_per_page' => 2
			);
		$query = new WP_Query($args);

		if($query->have_posts()) :
			$i = 0;

			while($query->have_posts()) : $query->the_post(); 

			$desc = get_field('description');
			$image = get_field('image');
		 
		 	if($i % 2 == 0){ ?>

			<div class="row third box-content">
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<p><?php echo $desc; ?></p>
					<a class="read-mores" href="<?php the_permalink(); ?>">Read More</a>
				</div>
				<div class="image" id="kid1" style="background-image:url(<?php echo $image; ?>)"></div>
			</div>

		 <?php $i++; } else { ?>

			<div class="row third box-content">
				<div class="image" id="kid1" style="background-image:url(<?php echo $image; ?>)"></div>
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<p><?php echo $desc; ?></p>
					<a class="read-mores" href="<?php the_permalink(); ?>">Read More</a>
				</div>
			</div>

		 <?php $i++; } ?>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
	<section class="shared apply">
		<h2 class="cs-header-2">How to Apply</h2>
		<p>Please send cover letters, completed job applications (available for download), and résumés to:</p>
		<p><a href="mailto:careers@childsavers.org">careers@childsavers.org</a>; Please include the position title as the Subject of the e-mail.</p>
		<p>You may also fax application materials attn: Linda Whitaker at (804) 644-9596 or mail them to:</p>
		<p>
			<address>
				Linda Whitaker<br>
				Vice President, Administration and Human Resources<br>
				ChildSavers<br>
				200 North 22nd Street<br>
				Richmond, VA 23223
			</address>
		</p>
		<p><a href="#">Download an application</a></p>
		<p>ChildSavers is a drug-free workplace.</p>
		<p>ChildSavers in an Equal Opportunity Employer.  All employees and applicants will be treated without regard to age, sex, color, religion, race, national origin, veteran status, sexual orientation, gender identification, marital or familial status, physical or mental disability, legal source of income, or any other status protected by law.</p>
	</section>

</main>

<?php get_footer(); ?>