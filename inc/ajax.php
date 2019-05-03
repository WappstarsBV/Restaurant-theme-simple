<?php 

/**
* AJAX functions for the website
* sub jQuery
*/

/**
* AJAX load news
*/
add_action( 'wp_ajax_nopriv_load_more_news', 'load_more_news' );
add_action( 'wp_ajax_load_more_news', 'load_more_news' );

function load_more_news() {

	$paged = $_POST['page']+1;

	//echo $paged;

	$args = array(
		'post_type' => 'post',
		//'posts_per_page' => 6,
		'post_status' => 'publish',
		'paged' => $paged,
	);

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) { 
			$the_query->the_post();

			get_template_part( 'template-parts/content', 'index' );

		}

		/* Restore original Post Data */
		wp_reset_postdata();

	} else {
		// no posts found
	}

	die();

}