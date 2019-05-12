<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rt-uno
 */

get_header();
?>

	<div id="primary" class="area-404">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Die pagina kan niet gevonden worden.', 'rt-uno' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
				<p><?php _e('Niets gevonden op deze locatie.', 'rt-uno'); ?></p>
				<p><a class="go-home-btn" href="<?php echo get_home_url(); ?>"><?php _e('Ga naar homepagina', 'tr-uno'); ?></a></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
		<div class="bottom-curve">
			<?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
