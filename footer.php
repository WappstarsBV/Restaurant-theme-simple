<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rt-uno
 */

?>

	</div> <!-- // .row -->
	</div> <!-- // .container -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="legals-menu container clearfix">
		<?php 
		//if(has_nav_menu( 'legals' )) {
			headlab_menu('legals'); 
		//}
		?>
		</div><!-- /.legals-menu -->
		<div class="adres container clearfix">
		<?php esc_html_e('Adres', 'rt-uno'); ?> - <?php the_field('adres', 'options'); ?> <?php the_field('postcode', 'options'); ?>, <?php the_field('plaats', 'options'); ?>
		</div><!-- /.adres -->
		<div class="openings container clearfix">
			<?php esc_html_e('Openingstijden', 'rt-uno'); ?> - <?php the_field('openings', 'options'); ?>
		</div><!-- /.openings -->
		<div class="site-info container clearfix">
			<div class="copy">
				&copy; copyright <b><?php bloginfo( 'name' ); ?></b> <?php echo date("Y"); ?>
			</div><!-- /.copy -->
			<div class="made-by">
				Made by <a href="https://wappstars.nl" target="_blank"><b>WappStars</b></a>
			</div><!-- /.made-by -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
