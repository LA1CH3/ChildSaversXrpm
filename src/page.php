<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<?php

	if(have_posts()) : while(have_posts()) : the_post();

		

	?>

	<section class="shared single-post-content">
		<h2 class="cs-header-2"><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</section>



<?php endwhile; endif; wp_reset_postdata(); ?>

</main>
<?php get_footer(); ?>
