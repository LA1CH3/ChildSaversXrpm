<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<?php

	if(have_posts()) : while(have_posts()) : the_post();

		$image = get_field('image');

	?>

	<section class="waypoint">
		<div class="jumbo jumbo-news" style="background-image: url(<?php echo $image; ?>)">
		</div>
	</section>
	<section class="shared single-post-content">
		<h2 class="cs-header-2"><?php the_title(); ?></h2>
		<h3 class="cs-header-date"><?php the_time( get_option( 'date_format' ) ); ?></h3>
		<?php the_content(); ?>
		<div class="post-nav">
			<?php previous_post_link("%link", "Previous Post"); ?>
			<?php next_post_link("%link", "Next Post"); ?>
		</div>
	</section>



<?php endwhile; endif; wp_reset_postdata(); ?>

</main>
<?php get_footer(); ?>
