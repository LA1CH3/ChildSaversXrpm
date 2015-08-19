<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Font Awesome in da house -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<script src="//use.typekit.net/aix6zex.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.css"/>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<!-- search overlay -->
	<div class="search-overlay">
		<form method="get" action="<?php echo esc_url(home_url()); ?>" role="search">
			<input class="cs-search" type="search" name="s" placeholder="Type your search here" value=""/>
			<input class="cs-submit read-mores" type="submit" role="button" value="Search"/>
		</form>
		<a href="#" class="read-mores cs-search-exit">Back</a>
	</div>
	<!-- end search overlay -->

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-cs.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					<div class="nav-mobile-button-wrap">
						<div class="hamburger nav-mobile-show">
						  <div class="line first"></div>
						  <div class="line second"></div>
						  <div class="line thirdl"></div>
						</div>
					</div>

					<!-- nav -->
					<nav class="nav-desktop" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<!-- mobile nav -->
					<nav class="nav-mobile" role="navigation">
						<div class="hamburger clicked nav-mobile-show">
						  <div class="line first"></div>
						  <div class="line second"></div>
						  <div class="line thirdl"></div>
						</div>
						<?php html5blank_nav(); ?>
					</nav>

			</header>
			<!-- /header -->
