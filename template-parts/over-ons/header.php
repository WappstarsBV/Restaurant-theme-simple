<?php
$imageOne = get_field('afbeelding_1_over_ons', 'option')['url'];
$imageTwo = get_field('afbeelding_2_over_ons', 'option')['url'];

while ( have_posts() ) :
    the_post(); ?>
<div class="rt-uno-over-header">
    <header class="over-header container">
        <div class="over-header-content">
            <?php if($imageOne) { ?>
            <div class="top-header-image" style="background-image: url(<?php echo $imageOne; ?>)"></div><!-- /.top-header-image -->
            <?php } ?>

            <?php if($imageTwo) { ?>
            <div class="bottom-header-image" style="background-image: url(<?php echo $imageTwo; ?>)"></div><!-- /.top-header-image -->
            <?php } ?>

            <?php the_title( '<h1>', '</h1>' ); ?>
            <p class="over-intro"><?php echo strip_tags(get_the_content()); ?></p><!-- /.over-intro -->
        </div><!-- /.over-header-content -->
    </header><!-- .entry-header -->
</div><!-- /.rt-uno-over-header -->

<?php endwhile; // End of the loop.
?>