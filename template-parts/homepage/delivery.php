<div class="rt-uno-delivery">
    <div class="container">
        <div class="delivery-content">
            <?php if($aafbelding_1_ab) { ?>
            <div id="image_1" class="content-image" style="background-image: url(<?php echo $aafbelding_1_ab['url']; ?>)"></div><!-- /#image_1.content-image -->
            <?php } ?>

            <?php echo ($titel_ab) ? '<h2>' . strip_tags($titel_ab) . '</h2>' : ''; ?>
            <?php echo ($tekst_ab) ? '<p>' . strip_tags($tekst_ab, '<a>') . '</p>' : ''; ?>
            <?php 
            if($knop_1_ab && $link_1_ab) {
                echo '<a href="'. $link_1_ab .'" class="button">'. $knop_1_ab .'</a>';
            }
            ?>

            <?php if($aafbelding_2_ab) { ?>
            <div id="image_2" class="content-image" style="background-image: url(<?php echo $aafbelding_2_ab['url']; ?>)"></div><!-- /#image_2.content-image -->
            <?php } ?>

        </div><!-- /.delivery-content -->
    </div><!-- /.container -->
</div><!-- /.rt-uno-delivery -->