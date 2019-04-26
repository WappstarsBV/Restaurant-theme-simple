<div class="rt-uno-hero">
    <div class="container">
        <div class="hero-content">
            <div class="clearfix">
            <?php echo ($titel_hero) ? '<h1>'. strip_tags($titel_hero) .'</h1>' : ''; ?>
            <?php echo ($ondertitel_hero) ? '<h2>'. strip_tags($ondertitel_hero) .'</h2>' : ''; ?>
            <?php echo ($tekst_hero) ? '<p>'. strip_tags($tekst_hero) .'</p>' : ''; ?>
            <?php 
            if ($knop_tekst_hero && $knop_link_hero) {
                echo
                '
                <a href="'. $knop_link_hero .'" class="button">'. $knop_tekst_hero .'</a>
                ';
            }
            ?>
            </div>
        </div><!-- /.hero-content -->
        <?php echo ($aafbelding_hero) ? '<img src="'. $aafbelding_hero['url'] .'" />' : ''; ?>
    </div><!-- /.container -->
</div><!-- /.rt-uno-hero -->