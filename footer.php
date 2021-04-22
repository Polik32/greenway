<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package new-theme
 */

?>
    <footer>
    <div class="container-fluid mb-5 pb-5">
        <div class="row pt-5">
            <img class="footer-logo col-xl-3 col-md-6 col-sm-10 offset-1" src="<?php the_field('logo_footer') ?>"
                alt="Логотип Greenway купить эко товары">
            <ul class="menu-footer col-xl-2 offset-1">
                <?php                           
// параметры по умолчанию
$posts = get_posts( array(
'numberposts' => -1,
'category'    => 0,
'orderby'     => 'date',
'order'       => 'ASC',
'include'     => array(),
'exclude'     => array(),
'meta_key'    => '',
'meta_value'  =>'',
'post_type'   => 'menu',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
                <li><a href="<?php the_field('href') ?>"><?php the_field('menu_name') ?></a></li>
                <?php
}

wp_reset_postdata(); // сброс
?>
            </ul>
            <div class="footer-contact col-lg-3 col-xl-4 offset-1">
                <?php                           
// параметры по умолчанию
$posts = get_posts( array(
'numberposts' => -1,
'category'    => 0,
'orderby'     => 'date',
'order'       => 'ASC',
'include'     => array(),
'exclude'     => array(),
'meta_key'    => '',
'meta_value'  =>'',
'post_type'   => 'contacts',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
                <p><?php the_field('contact') ?></p>
                <?php
}

wp_reset_postdata(); // сброс
?>
                <div class="social-icons">
                    <span><a href="https://www.facebook.com/profile.php?id=100026177210075"><i
                                class="fab fa-facebook"></i></a></span>
                    <span><a href="https://www.instagram.com/elenaalekseevnapolonskaia/?hl=ru"><i
                                class="fab fa-instagram"></i></a></span>
                    <span><a
                            href="https://invite.viber.com/?g2=AQARillqRojJEUxZgXQcVBciAnxAaRtmlImF9rMLSZh%2Fo4vlFbP2AYlmZVGRA5ZU"><i
                                class="fab fa-viber"></i></a></span>
                    <span><a href="https://t.me/ElenaPolonskaya"><i class="fab fa-telegram"></i></a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="scrollup">
        <!-- Иконка fa-chevron-up (Font Awesome) -->
        <i class="fas fa-arrow-alt-circle-up"></i>
    </div>
    <hr>
    <div class="footer__copy">
        <p class="footer__copy-text">&copyВсе права защищены 2020</p>
    </div>
</footer>
<!-- jQuery, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
<!-- Slick Slider JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- jS -->
<?php wp_footer(); ?>
<script type='text/javascript'>
    new WOW().init();
</script>
</body>

</html>