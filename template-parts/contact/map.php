<?php 
$map = get_field('map', 'options');
?>

<?php if($map) { ?>
<div class="rt-uno-contact-map">
    <h2 class="map-title"><?php esc_html_e( 'Onze locatie', 'rt-uno' ); ?></h2>

    <div class="contact-map">
        <?php echo $map; ?>
    </div><!-- /.contact-map -->

    <div class="bottom-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
    </div>
</div><!-- /.rt-uno-contact-map -->
<?php } ?>