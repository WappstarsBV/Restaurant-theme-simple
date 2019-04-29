<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rt-uno
 */

?>
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rt-uno' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding container">

			<div class="logo">
			<?php if ( has_custom_logo() ) { the_custom_logo(); } else { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php } ?>
			</div><!-- /.logo -->

			<div class="menu-and-contact">
				<div class="contact">
					<?php 
					$tel = get_field('telefoon_general', 'option');
					$email = get_field('e_mail_adres_general', 'option');

					if($email) {
						echo '<a href="mailto:'. $email .'" class="email"><b>Email ons:</b> <span>'. $email .'</span></a>';
					}

					if($tel) {
						echo '<a href="tel:'. preg_replace( '/[^0-9+]/', '', $tel) .'" class="phone"><b>Bel ons:</b> <span>'. $tel .'</span></a>';
					}
					?>
				</div><!-- /.contact -->
				<?php (has_nav_menu( 'primary' )) ? wp_nav_menu( array('theme_location' => 'primary') ) : ''; ?>
			</div><!-- /.menu-and-contact -->

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation container">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rt-uno' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<?php (is_front_page()) ? $container = 'container-fluid' : $container = 'container'; ?>

	<div class="<?php echo $container;?>">
		<div class="row">
