<?php
while ( have_posts() ) :
    the_post(); ?>
<div class="rt-uno-over-header">
    <div class="top-curve">
        <?php include ( get_stylesheet_directory() . '/images/white-curve.svg' ); ?>
    </div><!-- /.top-curve -->
    <header class="over-header container">
        <div class="over-header-content">
        <div class="clearfix">
            <?php the_title( '<h1>', '</h1>' ); ?>
            <p class="over-intro"><?php echo strip_tags(get_the_content()); ?></p><!-- /.over-intro -->
        </div>
        </div><!-- /.over-header-content -->
    </header><!-- .entry-header -->
</div><!-- /.rt-uno-over-header -->

<?php endwhile; // End of the loop.
?>