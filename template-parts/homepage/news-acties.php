<div class="rt-uno-news-acties">
    <div class="container">
        <?php //var_dump($afbeelding_1_na); ?>
        <div class="na-top-image na-image" style="background-image:url(<?php echo $afbeelding_1_na['url']; ?>); width: <?php echo $afbeelding_1_na['width']; ?>px; height: <?php echo $afbeelding_1_na['height'] ?>px;"></div><!-- /.na-top-image -->
        <div class="news-acties-content">
            <?php if($titel_na) { ?>
            <h2><?php echo $titel_na; ?></h2>
            <?php } ?>
            <?php if($tekst_na) { ?>
            <p><?php echo strip_tags($tekst_na); ?></p>
            <?php } ?>
        </div><!-- /.news-acties-content -->
        <div class="news-acties-posts">
        <?php

        $count_posts = wp_count_posts()->publish;

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $aantal_posts_na
        );

        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $content = strip_tags(mb_strimwidth(get_the_content(), 0, 250, '...'));
                echo
                '
                <div class="na-post">
                <a href="'. get_the_permalink() .'" class="clearfix">
                    <div class="clearfix">
                        <h3>'. get_the_title() .'</h3>
                        <span>'. get_the_date() .'</span>
                    </div>
                    <p>'. $content .'</p>
                </a>
                </div><!-- /.na-post -->
                ';
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            ?>
            <div class="geen-acties">
                <h3><?php esc_html_e( 'Geen acties op dit moment', 'rt-uno' ) ?></h3>
            </div><!-- /.geen-acties -->
            <?php 
        }

        ?>
        </div><!-- /.news-acties-posts -->
        <?php if($count_posts > $aantal_posts_na) { ?>
            <?php if($knop_tekst_na && $knop_link_na) { ?>
            <div class="news-acties-button">
                <a href="<?php echo $knop_link_na; ?>" class="button"><?php echo $knop_tekst_na; ?></a>
            </div><!-- /.news-acties-button -->
            <?php } ?>
        <?php } ?>

        <div class="na-bottom-image na-image" style="background-image:url(<?php echo $afbelding_2_na['url']; ?>); width: <?php echo $afbelding_2_na['width']; ?>px; height: <?php echo $afbelding_2_na['height'] ?>px;"></div><!-- /.na-bottom-image -->
    </div><!-- /.container -->
</div><!-- /.rt-uno-news-acties -->