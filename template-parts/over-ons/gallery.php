<?php 
$gallery = get_field('galerij_over_ons', 'options');

//var_dump($gallery);
?>

<?php if($gallery) : ?>

<div class="rt-uno-over-gallery clearfix">
    <div class="top-curve">
        <?php include ( get_stylesheet_directory() . '/images/white-curve.svg' ); ?>
    </div><!-- /.top-curve -->
<?php 
foreach($gallery as $item) {
    echo
    '
    <a class="gallery-image" href="'. $item['url'] .'">
        <img src="'. $item['url'] .'" />
    </a>
    ';
}
?>
    <div class="bottom-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
    </div>
</div><!-- /.rt-uno-over-gallery -->

<?php endif; ?>