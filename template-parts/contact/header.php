<?php
$imageOne = get_field('afbeelding_1_contact', 'option')['url'];
$imageTwo = get_field('afbeelding_2_contact', 'option')['url'];

while ( have_posts() ) :
    the_post(); ?>
<div class="rt-uno-contact-header">
    <header class="contact-header container">
        <div class="contact-header-content">
            <?php if($imageOne) { ?>
            <div class="top-header-image" style="background-image: url(<?php echo $imageOne; ?>)"></div><!-- /.top-header-image -->
            <?php } ?>

            <?php if($imageTwo) { ?>
            <div class="bottom-header-image" style="background-image: url(<?php echo $imageTwo; ?>)"></div><!-- /.top-header-image -->
            <?php } ?>
            <?php the_title( '<h1>', '</h1>' ); ?>
            <div class="contact-intro"><?php echo get_the_content(); ?></div><!-- /.contact-intro -->
        </div><!-- /.contact-header-content -->
    </header><!-- .contact-header -->
</div><!-- /.rt-uno-contact-header -->

<?php endwhile; // End of the loop.
?>