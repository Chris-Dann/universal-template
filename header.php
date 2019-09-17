<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dano_ut' ); ?></a>

	<header id="masthead" class="ut_header container-fluid">
		<div class="container">
			<?php
			the_custom_logo();
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<?php
			$dano_ut_description = get_bloginfo( 'description', 'display' );
			if ( $dano_ut_description || is_customize_preview() ) :
				?>
				<h2 class="site-description"><?php echo $dano_ut_description; /* WPCS: xss ok. */ ?></h2>
			<?php endif; ?>

			<!-- social media icons --> 
			<div class="ut_social_media_header_icons">
				<i class="fab fa-twitter-square"></i>
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-instagram"></i>
			</div>
		</div>
	&nbsp;
	</header><!-- #masthead -->	
	<!-- MOBILE NAVIGATION ELEMENTS -->
	<nav id="mobile-navigation" class="ut_hamburger_menu">
		<div class="ut_hamburger_menu_hamburger">
			<i class="ut_hamburger_menu_hamburger__icon fas fa-bars"></i>
		</div>
		<div class="ut_hamburger_menu_menu">
			<div class="ut_hamburger_menu_menu__close_button">
				<i class="ut_hamburger_menu_menu__close_button--icon fas fa-times"></i>
			</div>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'handheld-menu',
				'container'		 => '',
			) );
			?>
		</div>
	</nav>
	<!-- DESKTOP NAVIGATION ELEMENTS -->
	<nav id="site-navigation" class="ut_main_menu container-fluid">
		<div class="container">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</div>
	</nav><!-- #site-navigation -->
	

	<div id="content" class="container-fluid">
