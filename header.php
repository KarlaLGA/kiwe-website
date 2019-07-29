<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kiwe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="./js/text-circle.js"></script> -->


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kiwe' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-primary">
		<div class="site-branding">


			<?php
			if ( is_front_page() && is_home() ) :
				?>




				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			
			?>

<div class="logo">

			<?php
			the_custom_logo();
			?>
			</div>

		</div><!-- .site-branding -->

		<?php if (is_page('rhome') ) :  ?>


		<nav id="site-navigation nav-restaurant" class="main-navigation">
			<button class=" menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button> 
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-main-r',
				'menu_id'        => 'primary-menu-r',
			) );
			?>
		</nav><!-- #site-navigation -->

		<?php else : ?>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button> 
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-main',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

			<?php endif; ?>
		</div>

		<?php if(is_home() || is_front_page() || is_page('rhome') ) :?>

			<div class="header-secondary">

				<nav id="site-navigation" class="subheader-navigation">
					<!-- <button class="menu-toggle" aria-controls="subheader-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kiwe' ); ?></button> -->
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-subheader',
							'menu_id'        => 'subheader-menu',
						) );
					?>
					</nav><!-- #site-navigation -->
			</div>

		<?php endif; ?>



	</header><!-- #masthead -->

	<?php if (is_home() || is_front_page()) : ?>

		<div id="content" class="user-content">
	
	<?php elseif (is_page('rhome') ) : ?>

		<div id="content" class="restaurant-content">
	
	<?php else : ?>

		<div id="content" class="site-content">

	<?php endif; ?>

