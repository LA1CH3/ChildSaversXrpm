<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="splash">
		
			<h1>Child<span>Savers</span> believes that all children can be safe, happy, healthy and ready to learn.</h1>

			<button class="scroll-down">&darr;</button>

			<img class="city" src="<?php echo get_template_directory_uri() . '/img/ChildSavers_city.svg'; ?>" alt="Richmond, Virginia">

			<img class="shooting" src="<?php echo get_template_directory_uri() . '/img/homepage-star.png'; ?>" alt="Richmond, Virginia">

			<img class="shooting-right" src="<?php echo get_template_directory_uri() . '/img/homepage-star-right.png'; ?>" alt="Richmond, Virginia">

		</section>
		<!-- /section -->
		<section id="tiles" class="waypoint">
			<div class="row third box-content">
				<div class="image" id="kid1"></div>
				<div class="content">
					<h2>For Parents</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam deserunt veniam pariatur ad commodi nobis voluptates mollitia labore, odio, quibusdam unde. Aut eius nostrum sint provident quo quidem, ipsum temporibus!</p>
					<a class="read-mores" href="#">Read More</a>
				</div>
			</div>
			<div class="row third box-content kid2box">
			<div class="image" id="kid2"></div>
				<div class="content">
					<h2>For Professionals</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, doloribus dolorem ipsum quod sit sint alias, dolore nam veniam deserunt ipsam sapiente a eum! Ducimus cumque facilis, eveniet reiciendis. Possimus.</p>
					<a class="read-mores" href="#">Read More</a>
				</div>
			</div>
			<div class="row third box-content">
				<div class="image" id="kid3"></div>
				<div class="content">
					<h2>How to Help</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt ut, pariatur modi in veritatis expedita blanditiis cum cumque, iure natus impedit saepe fugit vitae maiores illo, voluptatem deserunt quidem.</p>
					<a class="read-mores" href="#">Read More</a>
				</div>
			</div>
		</section>
		<section class="jumbo" id="anna">
			<div class="spotlight">
				<h3>The World Seen Through The Eyes of <span>Anna</span></h3>
				<a class="read-mores" href="#">Read Her Story</a>
			</div>
		</section>
	</main>

<?php get_footer(); ?>