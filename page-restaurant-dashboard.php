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
		<main id="main" class="site-main">

		<div id="wp-vue-app">           
             <!-- <iframe src=" -->
                <?php
                    // echo get_template_directory_uri() . '/restaurant-side/index.html';
                ?>
                
                <!-- " frameborder="0"></iframe>  -->
				<iframe src="http://restaurant.kiwe.wmdd.ca" frameborder="0"></iframe>
        </div><!-- #vue-app -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
