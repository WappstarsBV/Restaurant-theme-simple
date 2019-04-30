<?php
/**
 * @package _s
 * @subpackage RT Uno
 * Template Name: Diensten(eg. afhalen, bezorgen ... )
 */
?>

<?php get_header(); ?>

<?php 
$option_fields = get_fields( 'options' ); //var_dump($option_fields); 
foreach ( $option_fields as $key => $value ) {
    ${$key} = $value;
}
?>

<?php include ( get_stylesheet_directory() . '/template-parts/diensten/header.php' ); ?>

<?php include ( get_stylesheet_directory() . '/template-parts/diensten/dienst.php' ); ?>

<?php get_footer(); ?>