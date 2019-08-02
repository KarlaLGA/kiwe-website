<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Kiwe
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Are you lost?</h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<?php
					$img= wp_get_attachment_image_src(410, 'medium'); 
					
					if($img)
					{
						?>
						<div class="error-container">
							<img class="error-kiwe" src="<?php echo $img[0] ?>" alt="error-kiwe">
						</div>
						<?php
					}
					?>
					<div class="nav-info">
					<h2 >Let us help you find your way</h2>
					<div class="btn-container">
						<a class="btn-link" href="<?php echo get_page_link(2); ?>">I am a customer</a>
						<a class="btn-link" href="<?php echo get_page_link(18); ?>">I am a restaurant owner</a>
					</div>
					</div>
			
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
