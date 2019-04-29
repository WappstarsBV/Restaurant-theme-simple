<?php
/**
 * @package HeadLabNeo
 * @subpackage 123 Steigerhout
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<?php 
$option_fields = get_fields( 'options' ); //var_dump($option_fields); 
foreach ( $option_fields as $key => $value ) {
    ${$key} = $value;
}
?>

<?php include ( get_stylesheet_directory() . '/template-parts/homepage/hero.php' ); ?>

<?php include ( get_stylesheet_directory() . '/template-parts/homepage/delivery.php' ); ?>

<?php include ( get_stylesheet_directory() . '/template-parts/homepage/catering.php' ); ?>

<?php include ( get_stylesheet_directory() . '/template-parts/homepage/news-acties.php' ); ?>

<?php get_footer(); ?>