<?php
while ( have_posts() ) :
    the_post(); ?>
<div class="rt-uno-diensten-header">
    <header class="diensten-header container">
        <div class="diensten-header-content">
        <?php the_title( '<h1>', '</h1>' ); ?>
        <p class="diensten-intro"><?php echo strip_tags(get_the_content(), '<p>, <a>'); ?></p><!-- /.diensten-intro -->
        </div><!-- /.diensten-header-content -->

        <?php if(has_post_thumbnail()) {
            $thumb = get_the_post_thumbnail_url();
            echo '<div class="diensten-header-image" style="background-image: url('. $thumb .');"></div><!-- /.diensten-header-image -->';
        } else { } ?>
    </header><!-- .entry-header -->
</div><!-- /.rt-uno-densten-header -->

<?php endwhile; // End of the loop.
?>