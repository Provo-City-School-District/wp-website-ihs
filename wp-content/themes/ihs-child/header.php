<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-41GZ7V6TTV"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-41GZ7V6TTV');
	</script>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php if (is_home()) { ?>News | <?php } ?><?php if (is_page()) {
															the_title(); ?> | <?php } ?><?php if (is_single()) {
																							the_title(); ?> | <?php } ?><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/slick/slick.css' ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/slick/slick-theme.css' ?>" />
	<link href="https://customer.cludo.com/css/templates/v1.1/essentials/cludo-search.min.css" type="text/css" rel="stylesheet">
	<!-- Favicon Code -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/assets/favicon/filename'; ?>">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() . '/assets/favicon/filename'; ?>" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() . '/assets/favicon/filename'; ?>" sizes="16x16">
	<!-- Favicon End -->
	<?php wp_head(); ?>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<a class="skip-to-link" href="#trp-floater-ls">Skip to Translation</a>
	<a class="skip-to-link" href="#mainMenu">Skip to Main Menu</a>
	<a class="skip-to-link" href="#contentArea">Skip to Main Content</a>

	<header id="pcsdBranding">
		<img src="<?php echo get_template_directory_uri() . '/assets/icons/pcsd-logo-website-header-branding.png' ?>" alt="Provo City School District Logo" />
		<h1><a href="https://provo.edu">Provo City School District</a></h1>
	</header>
	<header id="mainHeader">
		<a href="<?php bloginfo('siteurl'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/header-logo.png'; ?>" alt="Independence Logo" id="siteLogo" />
			<h1>Independence High School</h1>
		</a>
		<aside>
			<ul class="sociallinks">
				<li><a href="https://www.instagram.com/lionsindependence/"><img src="<?php echo get_template_directory_uri() . '/assets/icons/socialmedia-instagram-white.svg' ?>" alt="Link to Instagram" /></span>
					</a>
				</li>
				<li><a href="https://twitter.com/lionsihs"><img src="<?php echo get_template_directory_uri() . '/assets/icons/socialmedia-twitter-white.svg' ?>" alt="Link to Twitter" /></span>
					</a>
				</li>
				<li><a href="https://www.facebook.com/independencelions/"><img src="<?php echo get_template_directory_uri() . '/assets/icons/socialmedia-facebook-white.svg' ?>" alt="Link to Facebook" /></span>
					</a>
				</li>
			</ul>
			<!-- Search Form -->
			<form id="cludo-search-form" action="/" method="get" autocomplete="off"><!-- Search Form -->
				<label for="s" class="visuallyhidden" id="websitesearch">Website Search: </label>
				<input class="search-input" aria-labelledby="websitesearch" id="s" name="s" type="text" value="<?php the_search_query(); ?>" placeholder="Search this website..." />
				<input class="search-submit search-icon" type="submit" value="Search" />

			</form>
			<!-- end Search Form -->
			<!-- Contact Information -->
			<ul class="contactinfo" itemscope itemtype="https://schema.org/PostalAddress">
				<li><span itemprop="streetAddress">636 N. Independence Ave</span><span itemprop="addressLocality"> Provo</span>, <span itemprop="addressRegion">Utah</span> <span itemprop="postalCode">84601</span><span class="phone" itemprop="telephone"> Phone: (801) 374-4920</span><span class="fax" itemprop="faxNumber"> Fax: (801) 370-4614</span>
			</ul>
			<!-- End Contact Information -->
		</aside>
		<nav id="mainMenu" role="navigation">
			<input type="checkbox" id="reveal-menu" role="button" aria-labelledby="menu-label">
			<label id="menu-label" class="mobileMenu" for="reveal-menu"><img src="<?php echo get_template_directory_uri() . '/assets/icons/menu.svg'; ?>" alt="" />Menu</label>
			<?php get_template_part('mainmenu'); ?>
		</nav>
	</header>