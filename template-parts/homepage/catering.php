<div class="rt-uno-catering" style="background-image: url(<?php echo $achtergrond_cat['url']; ?>)">
    <div class="top-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve.svg' ); ?>
    </div><!-- /.top-curve -->
    <div class="container">
        <div class="catering-content">
            <?php if($titel_cat) { ?>
            <h2><?php echo $titel_cat; ?></h2>
            <?php } ?>
            <?php if($tekst_cat) { ?>
            <p><?php echo strip_tags($tekst_cat); ?></p>
            <?php } ?>
            <?php if($button_text_cat && $button_link_cat) { ?>
            <a href="<?php echo $button_link_cat; ?>" class="button"><?php echo $button_text_cat; ?></a>
            <?php } ?>
        </div><!-- /.catering-content -->
    </div><!-- /.container -->
    <div class="bottom-image" id="catering-spices" style="background-image: url(<?php echo $afbeelding_1_cat['url']; ?>)"></div><!-- /.bottom-image -->
    <div class="bottom-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
    </div>
</div><!-- /.rt-uno-catering -->