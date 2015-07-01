<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<?php

	if(have_posts()) : while(have_posts()) : the_post(); ?>
	<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1><?php the_title(); ?></h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 			<button class="scroll-jumbo">
				<img src="<?php echo get_template_directory_uri() . '/img/arrow_home.svg'; ?>" alt="Go Down">
			</button>
 		</div>
	</section>
	<section class="shared service-content" data-scroll>
		<h2 class="cs-header-2">Information</h2>
		<?php the_content(); ?>
	</section>
	<section id="tiles">
		<?php if(have_rows('links')):

				$i = 0;

				while(have_rows('links')) : the_row(); 

				$title = get_sub_field('title');
				$desc = get_sub_field('description');
				$link = get_sub_field('link');
				$image = get_sub_field('image');

				if($i % 2 == 0){ ?>
					
					<div class="row third box-content">
						<div class="content">
							<h2><?php echo $title; ?></h2>
							<p><?php echo $desc; ?></p>
							<a class="read-mores" href="<?php echo $link; ?>">Read More</a>
						</div>
						<div class="image" id="kid1" style="background-image:url(<?php echo $image; ?>)"></div>
					</div>


				<?php $i++; } else { ?>

					<div class="row third box-content">
						<div class="image" id="kid1" style="background-image:url(<?php echo $image; ?>)"></div>
						<div class="content">
							<h2><?php echo $title; ?></h2>
							<p><?php echo $desc; ?></p>
							<a class="read-mores" href="<?php echo $link; ?>">Read More</a>
						</div>
					</div>

				<?php $i++; } endwhile; endif; ?>
	</section>


	<?php endwhile; endif; wp_reset_postdata(); ?>

</main>
<?php get_footer(); ?>
