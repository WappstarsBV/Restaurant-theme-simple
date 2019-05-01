<?php 
$cta_title = get_field('titel_cta', 'options');
$cta_tekst = get_field('tekst_cta', 'options');
$cta_shortcode = get_field('shortcode_cta', 'options');
$knop_tekst = get_field('knop_tekst_cta', 'options');
$knop_link = get_field('knop_link_cta', 'options');
$knop_content = get_field('knop_content_cta', 'options');
$bg = get_field('achtergrond_afbeelding_cta', 'options')['url'];
?>

<?php if($cta_title && $cta_tekst && $cta_shortcode) { ?>
<div class="rt-uno-cta">
    <div class="container">
        <div class="cta-content">
            <h2><?php echo $cta_title; ?></h2>
            <p><?php echo strip_tags($cta_tekst); ?></p>
            <?php echo do_shortcode( $cta_shortcode ); ?>
        </div><!-- /.cta-content -->
        
        <?php if($knop_tekst && $knop_link) { ?>
        <div class="cta-contact">
            <span><?php esc_html_e( 'OF', 'rt-uno' ); ?></span>
            <a href="<?php echo $knop_link; ?>"><?php echo $knop_tekst; ?></a>
        </div><!-- /.cta-contact -->
        <?php } ?>
    </div><!-- /.container -->
</div><!-- /.rt-uno-cta -->
<?php } else { ?>

    <?php if($knop_tekst && $knop_link && $knop_content) { ?>
        <div class="rt-uno-cta">
            <div class="container">
                <div class="cta-contact cta-contact-styled">
                    <h2>Stuur ons een bericht</h2>
                    <p><?php echo strip_tags($knop_content_cta); ?></p>
                    <a href="<?php echo $knop_link; ?>"><?php echo $knop_tekst; ?></a>
                </div><!-- /.cta-contact -->
            </div><!-- /.container -->
        </div><!-- /.rt-uno-cta -->
    <?php } ?>

<?php } ?>