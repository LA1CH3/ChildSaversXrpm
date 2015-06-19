<?php


/* Template Name: Team */



 ?>

<?php get_header(); ?>

<main role="main">

	<section class="waypoint">
			<div class="jumbo jumbo-about">
	 			<h1>Our Team</h1>
	 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
	 		</div>
	</section>
	<section class="tiles-about">
	<?php if(have_posts()) : 

			while(have_posts()) : the_post();

			if(have_rows('staff')):

				$i = 0;

				while(have_rows('staff')) : the_row(); 

				$name = get_sub_field('name');
				$title = get_sub_field('title');
				$email = get_sub_field('email');
				$image = get_sub_field('image');

				if($i % 2 == 0){ ?>
					
					<div class="row third box-content">
						<div class="content">
							<h2><?php echo $name; ?></h2>
							<p><?php echo $title; ?></p>
							<a class="read-mores" href="mailto:<?php echo $email; ?>">Email</a>
						</div>
						<div class="image" id="kid1" style="background-image:url(<?php echo $image; ?>)"></div>
					</div>


				<?php $i++; } else { ?>

					<div class="row third box-content">
						<div class="image" id="kid1" style="background-image:url(<?php echo $image; ?>)"></div>
						<div class="content">
							<h2><?php echo $name; ?></h2>
							<p><?php echo $title; ?></p>
							<a class="read-mores" href="mailto:<?php echo $email; ?>">Email</a>
						</div>
					</div>

				<?php $i++; } endwhile; endif; ?>

	</section>
	<section>

	<?php if(have_rows('staff_types')): while(have_rows('staff_types')) : the_row(); 

		$type = get_sub_field('type'); ?>

		<div class="staff-type">
			<h2><?php echo $type; ?></h2>
			<div class="members">
				<?php if(have_rows('members')) : while(have_rows('members')) : the_row(); 

				$name = get_sub_field('name');
				$title = get_sub_field('title');

				?>
					<div class="member">
						<h3><?php echo $name; ?></h3>
						<p><?php echo $title; ?></p>
					</div>
				<?php endwhile; endif; ?>
			</div>

		</div>
	<?php endwhile; endif; ?>
		
	</section>


<?php endwhile; endif; wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>