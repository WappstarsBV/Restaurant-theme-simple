<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rt-uno
 */

get_header();

?>

	<div id="primary" class="nieuws-acties-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<div class="container">
				<header>
					<h1 class="nieuws-acties-title"><?php single_post_title(); ?></h1>
				</header>
				</div><!-- /.container -->
				<?php
			endif;

			echo '<div class="nieuws-acties-posts">';

			
			echo '<div class="top-curve">';
			include ( get_stylesheet_directory() . '/images/white-curve.svg' );
			echo '</div><!-- /.top-curve -->';

			echo '<div class="container response-container">';

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				get_template_part( 'template-parts/content', 'index' );

			endwhile;

			echo '</div><!-- /.response-container -->';

			global $post;

			if( wp_count_posts('post')->publish > get_option('posts_per_page') ) {
				
			echo
			'
			<div id="load-more">
				<a href="#" id="load-more-link" data-page="1" data-url="'. admin_url('admin-ajax.php') .'">Laad meer nieuws/acties</a>
			</div>
			';

			} // END if

			echo '<div class="bottom-curve">';
			include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' );
			echo '</div><!-- /.bottom-curve -->';

			echo '</div><!-- /.nieuws-acties-posts -->';

			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<?php include ( get_stylesheet_directory() . '/template-parts/modules/cta.php' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
