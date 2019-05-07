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
        
        <div class="share-pagination clearfix">
            <div class="share clearfix">
                <div class="share-btn">
                <?php include ( get_stylesheet_directory() . '/images/share.svg' ); ?>
                </div>
                <div id="sharing-is-caring"></div><!-- /#sharing-is-caring -->
            </div><!-- /.share -->
            <div class="pagination clearfix">
                <?php
                     $next_post = get_next_post();
                     $prev_post = get_previous_post();
                     //var_dump($prev_post);
                     
                    if($prev_post) { ?>
                        <a class="prev" href="<?php echo get_the_permalink($prev_post->ID) ?>">
                        <?php include get_stylesheet_directory() . '/images/prev.svg'; ?>
                        </a>
                    <?php } else { ?>
                        <span class="prev">
                        <?php include get_stylesheet_directory() . '/images/prev.svg'; ?>
                        </span>
                    <?php }

                    if($next_post) { ?>
                        <a class="next" href="<?php echo get_the_permalink($next_post->ID) ?>">
                        <?php include get_stylesheet_directory() . '/images/next.svg'; ?>
                        </a>
                    <?php } else { ?>
                        <span class="next">
                        <?php include get_stylesheet_directory() . '/images/next.svg'; ?>
                        </span>
                    <?php }
                ?>
            </div><!-- /.pagination -->
        </div><!-- /.share-pagination clearfix -->

    </div><!-- /.container -->

    <div class="bottom-curve">
	<?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
	</div><!-- /.bottom-curve -->
</div>