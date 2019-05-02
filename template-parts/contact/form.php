<?php 
$tel = get_field('telefoon_general', 'options');
$email = get_field('e_mail_adres_general', 'options');
$adres = get_field('adres', 'options');
$postcode = get_field('postcode', 'options');
$plaats = get_field('plaats', 'options');
// Openingstijden
$op = get_field('openingstijden', 'options');
// Contact form
$form = get_field('contact_formulier', 'options');
?>

<div class="rt-uno-contact-form">
    <div class="top-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve.svg' ); ?>
    </div><!-- /.top-curve -->
    
    <div class="contact-wrapper clearfix">
        <div class="contact-form">
            <?php 
            echo ($form) ? do_shortcode( $form ) : '';
            ?>
        </div><!-- /.contact-form -->
        <div class="openings-contact">
            <div class="openingstijden">
                <h2><?php esc_html_e('Openingstijden', 'rt-uno'); ?></h2>
                <?php 
                echo '<ul>';
                foreach($op as $o)
                {
                    echo
                    '
                    <li>
                        <span>'. $o['dag'] .':</span>'. $o['tijd'] .'
                    </li>
                    ';
                }
                echo '</ul>';
                ?>
            </div><!-- /.openingstijden -->
            <div class="contactgegevens">
                <h2><?php esc_html_e('Contactgegevens', 'rt-uno'); ?></h2>
                <ul>
                    <?php if($adres) {
                    echo '<li>'. $adres .'</li>';
                    } ?>
                    <?php if($postcode && $plaats) {
                    echo '<li>'. $postcode .', '. $plaats .'</li>';
                    } ?>
                    <?php if($tel) {
                    echo '<li>Tel: <a href="tel:'. preg_replace( '/[^0-9+]/', '', $tel) .'" target="_blank">'. $tel .'</a></li>';
                    } ?>
                    <?php if($email) {
                    echo '<li>E-mail: <a href="mailto:'. $email .'" target="_blank">'. $email .'</a></li>';
                    } ?>
                </ul>
            </div><!-- /.contactgegevens -->
        </div><!-- /.openigs-contact -->
    </div><!-- /.container -->

    <div class="bottom-curve">
    <?php include ( get_stylesheet_directory() . '/images/white-curve-reflect.svg' ); ?>
    </div>
</div><!-- /.rt-uno-contact-form -->