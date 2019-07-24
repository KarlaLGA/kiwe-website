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

		
		<main id="main" class="site-main site-contact">
		<section class="team-members-container">
		<?php
 
			// The Query
			$args=array( 'post_type' => 'members',
						'orderby' => 'modified',
						'order'   => 'ASC', ) ;

			$the_query = new WP_Query( $args );
			
			// The Loop
			if ( $the_query->have_posts() ) {
				echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					?>
					<li class="single-team-member">
					<div class="team-member">
					<?php the_title( '<h2 class="team-member-name">', '</h2>' ); ?>
					<div class="team-member-picture-container">
					<?php the_post_thumbnail( 'medium', array( 'class' => 'team-member-picture' ) ); ?>
					</div>
					<h4 class="team-member-role"><?php the_field('position'); ?></h4>
					</div>
				
					</li>
					<?php
				}
				echo '</ul>';
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();

			?>
		
		</section>
		</main><!-- #main -->


	</div><!-- #primary -->

<?php

get_footer();
