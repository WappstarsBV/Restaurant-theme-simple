<div class="rt-uno-diensten-dienst">
    <div class="top-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve.svg' ); ?>
    </div><!-- /.top-curve -->
    <div class="diensten-content container">
        <?php 
        foreach($items_diensten as $dienst) {
            //var_dump($dienst);

            echo
            '
            <div class="dienst">
                <div class="dienst-content">
                    <h2>'. $dienst['titel'] .'</h2>
                    <p>'. strip_tags($dienst['tekst']) .'</p>
                    <a href="'. $dienst['knop_link'] .'" class="button">'. $dienst['knop_tekst'] .'</a>
                </div><!-- /.dienst-content -->
                <div class="dienst-image" style="background-image: url('. $dienst['afbeelding']['url'] .')">
                    <img class="sr-only" src="'. $dienst['afbeelding']['url'] .'" />
                </div><!-- /.dienst-image -->
            </div><!-- /.dienst -->
            ';
        }
        ?>
    </div><!-- /.diensten-content -->
    <div class="bottom-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
    </div>
</div><!-- /.rt-uno-diensten-dienst -->