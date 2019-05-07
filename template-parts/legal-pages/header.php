<div class="container">
    <header>
        <h1 class="legals-title"><?php single_post_title(); ?></h1>
        <p class="date-published"><?php esc_html_e( 'Bijgewerkt op', 'rt-uno' );  ?>: <?php the_modified_date(); ?></p>
    </header>
</div><!-- /.container -->