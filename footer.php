<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kiwe
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<nav id="site-navigation" class="footer-navigation">
			<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kiwe' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-footer',
				'menu_id'        => 'footer-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<nav id="site-navigation" class="social-navigation">
			<button class="menu-toggle" aria-controls="social-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kiwe' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-social',
				'menu_id'        => 'social-menu',
			) );
			?>
		</nav><!-- #site-navigation -->


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kiwe' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kiwe' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'kiwe' ), 'kiwe', '<a href="http://underscores.me/">Mixed Bag</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
