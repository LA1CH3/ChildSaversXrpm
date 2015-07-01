 <?php get_header(); ?>

 <?php
global $wp_query;
$term = $wp_query->get_queried_object();
$title = $term->name;

  ?>

 <main role="main">
	
	<section class="waypoint">
		<div class="jumbo jumbo-about">
 			<h1><?php echo $title;  ?></h1>
 			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city2.svg'; ?>" alt="Richmond, Virginia">
 			<button class="scroll-jumbo">
				<img src="<?php echo get_template_directory_uri() . '/img/arrow_home.svg'; ?>" alt="Go Down">
			</button>
 		</div>
	</section>

	<section id="tiles" data-scroll>
	<?php if(have_posts()) : 
			$i = 0;
			while(have_posts()) : the_post();  

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