<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(is_search()):?>
    <meta name="robots" content="noindex, nofollow" />
    <?php endif;?>

    <?php wp_head() ?>
    <title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title>

    <meta charset="<?php bloginfo('charset')?>" />

    <!-- Stylesheets-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
</head>


<body <?php body_class()?>>
	<header class="header <?php if( is_front_page() ) : echo 'home--header'; else: echo 'site--header'; endif; ?>">
		<div class="headerContainer">
			<a class="headerLogo" href="<?php echo esc_url(home_url('/')) ?>">
				<img src="<?php echo THEME_URL; ?>_dev/img/logo-white.png" alt="procold_logo">
			</a>
			<div class="hamburger">
				<div class="hamburgerLines">
					<span class="hamburger__line1"></span>
					<span class="hamburger__line2"></span>
					<span class="hamburger__line3"></span>
				</div>
			</div>
			<div class="headerNavbar">
				
				<nav class="navLinks">
					<?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
				</nav>
				<!--
				<div class="headerLang">
					<ul>
						<li><a href="#"></a>PL</li>
						<li><a href="#"></a>EN</li>
						<li><a href="#"></a>DE</li>
					</ul>
				</div>
				-->
			</div>
		</div>
	</header>

	