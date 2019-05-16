<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rt-uno
 */

?>

<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<span><?php echo get_the_date(); ?></span>

	<?php if(has_post_thumbnail()) {
		the_post_thumbnail();
	} ?>

	<div class="post-content">
		<h2><?php the_title(); ?></h2>
		<p><?php echo strip_tags(mb_strimwidth(get_the_content(), 0, 150, ' ...'), '<b>, <strong>'); ?></p>
		<span class="lees-meer"><?php esc_html_e( 'Lees meer', 'rt-uno' ); ?></span>
	</div><!-- /.post-content -->
	
</a><!-- #post-<?php the_ID(); ?> -->
