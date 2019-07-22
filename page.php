<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kiwe
 */

get_header();
?>

	<div id="primary" class="content-area">
	<?php if (is_page('contact-us') ) : ?>
		
		<main id="main" class="site-main site-contact">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	<?php elseif (is_page('about') ) : ?>

		<main id="main" class="site-main site-about">
		<svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" 
		height="0" width="0">
			<defs>
				<clipPath id="staff"> 		
					<!-- <style>.cls-1{fill:none;}.cls-2{fill:#fff;stroke:#000;stroke-miterlimit:10;}</style> -->
					<path class="cls-2" d="M358.43,118c-.37-.94-.75-1.87-1.14-2.8-.22-.55-.44-1.09-.68-1.63q-3-7.06-6.55-13.82c-.74-1.4-1.49-2.8-2.27-4.19h0c-.31-.56-.63-1.12-.95-1.68-.64-1.12-1.29-2.23-2-3.33A184.42,184.42,0,0,0,334.44,75q-1.87-2.5-3.84-5c-2.19-2.74-4.45-5.41-6.81-8-.38-.44-.77-.88-1.18-1.31l-.68-.75q-2.82-3-5.77-6c-1-1-1.93-1.89-2.91-2.81L313.1,51c-.37-.35-.74-.7-1.12-1l-.18-.17c-.74-.69-1.49-1.37-2.24-2q-2-1.83-4.14-3.6l-.15-.12-.75-.64h0q-3.43-2.88-7-5.58l-1.28-1c-1.1-.82-2.22-1.63-3.34-2.42h0q-3.4-2.4-6.93-4.67l-.86-.55-1.48-.93A184.47,184.47,0,0,0,185.88.5C83.5.5.5,83.5.5,185.88a185.46,185.46,0,0,0,7.64,52.84A72.7,72.7,0,0,1,108.56,331h0c0,.1-.07.19-.11.29s0,0,0,0a72.75,72.75,0,0,1-10.58,17.7,184.46,184.46,0,0,0,88,22.21c102.39,0,185.39-83,185.39-185.39A184.84,184.84,0,0,0,358.43,118Z" transform="translate(120.9 177.76)"/>
				</clipPath>
			</defs>
			<rect class="cls-1" width="612" height="792"/>
		</svg>

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->


	<?php else : ?>

		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	<?php endif; ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
