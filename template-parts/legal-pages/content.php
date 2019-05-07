<div class="legals-content clearfix">
    
    <div class="top-curve">
	<?php include ( get_stylesheet_directory() . '/images/white-curve.svg' ); ?>
    </div><!-- /.top-curve -->

    <div class="container">
        <div class="content">
        <?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>
        </div><!-- /.content -->
    </div><!-- /.container -->

    <div class="bottom-curve">
	<?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
    </div><!-- /.bottom-curve -->
    
</div><!-- /.legals-content -->