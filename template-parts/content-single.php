<div class="container">
    <header>
        <h1 class="nieuws-acties-single-title"><?php single_post_title(); ?></h1>
        <p class="date-published"><?php echo get_the_date(); ?></p>
    </header>
</div><!-- /.container -->

<div class="nieuws-acties-post">
    <div class="top-curve">
	<?php include ( get_stylesheet_directory() . '/images/white-curve.svg' ); ?>
    </div><!-- /.top-curve -->

    <div class="container">
        <div class="post-content">

            <?php if(has_post_thumbnail()) { 
                the_post_thumbnail();
            } ?>

            <div class="content">
                <?php the_content(); ?>
            </div><!-- /.content -->
        </div><!-- /.post-content -->
        
        <div id="sharing-is-caring"></div><!-- /#sharing-is-caring -->

    </div><!-- /.container -->

    <div class="bottom-curve">
	<?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
	</div><!-- /.bottom-curve -->
</div>