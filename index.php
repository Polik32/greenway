<?php get_header(); ?>
<section class="path-one-info-greenway"
    style="background: url(<?php the_field('background-path-one-info-greenway') ?>); background-repeat: no-repeat; background-size: cover;">
    <div class="cloud">
        <img src="<?php the_field('background-path-one-info-greenway_clouds') ?>" alt="экологически чистые товары" class="cloud4">
    </div>
    <div class="logo-about-us-primar-wrapper">
        <img class="logo-about-us-primary" src="<?php the_field('logo-about-us-primary') ?>"
            alt="Логотип эко товары Украина">
    </div>
    <div class="path-one-info-greenway__block-2">
        <p class="path-one-info-greenway__block-2__text">Продукция для тех, кто выбрал осознанный экологический подход к своей жизни.</p>
        <button class="bt-popup" style="vertical-align:middle" id="popup" href="javascript:void(0);"><span>Перезвоните
                мне!</span></button>
    </div>
</section>
<div class="wrapper">
    <a class="pulse" href="#2"><i class="fas fa-angle-double-down"></i></a>
</div>
<section class="about_us" style="background: <?php the_field('about_us-hex') ?>" id="1">
    <div class="container">
        <div class="row about_us-wrapper">
			<div class="about_us__block-two col-4 wow fadeInUp">
                <img class="about_us__block-two__img" src="<?php the_field('logo_about_us') ?>"
                    alt="Логотип Greenway товары Украина">
            </div>
            <div class="about_us__block-one col-8">
                <p class="about_us__block-one__text wow fadeInUp"><?php the_field('text_about_us') ?>
                </p>
            </div>
        </div>
    </div>
    <img class="about_us__img" src="<?php the_field('about_us__img') ?>" alt="экологически чистые товары">
</section>
<section class="catalog " style="background: <?php the_field('background-all-hex') ?>" id="2">
    <h1 class="section-name"><?php the_field('first_name_section') ?></h1>
    <div class="container">
        <div class="row">
            <div class="catalog__items col-12">
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
	'post_type'   => 'cards',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
	foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                <div class="catalog__item col-xl-3 col-md-4 col-sm-8 wow fadeInUp" data-wow-duration="0.35s"
                    data-wow-delay="0.15s">
                    <img class="catalog__item__logo" src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="Greenway эко товары Украина">
                    <p class="catalog__item__name"><?php the_title() ?></p>
                    <p class="catalog__item__description"><?php the_field('description') ?></p>
                    <img class="catalog__item__img" src="<?php the_field('imgdown') ?>"
                        alt="Эко товары Украина Greenway">
                    <div class="catalog__item__fon-hover">
                        <a href="<?php the_field('link') ?>"><img class="catalog__item__button-hover"
                                src="<?php echo get_template_directory_uri()?>/assets/img/finger.png"
                                alt="Кнопка купить товары Greenway"></a>
                    </div>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <section class="pay-and-delivery"
        style="background: url(<?php the_field('background-pay-and-delivery') ?>), <?php the_field('background-all-hex') ?>; background-repeat: no-repeat; background-size: contain;"
        id="3">
        <h1 class="section-name"><?php the_field('second_name_section') ?></h1>
        <div class="container">
            <div class="row">
				<div class="pay-and-delivery__text col-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
					<p class="pay-and-delivery-head-text"><?php the_field('pay_and_delivery-text') ?></p>
					<p><?php the_field('pay_text') ?></p>
					<p><?php the_field('delivery_text') ?></p>
				</div>
		  <div class="container">
            <div class="row">
				<div class="pay-and-delivery-link col-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
					<a class="pay-and-delivery__liqpay col-6" href="https://www.liqpay.ua">
                            <img class="pay-and-delivery__liqpay__img" src="<?php the_field('pay_logo') ?>"
                                alt="liqpay Greenway купить">
                        </a>
					<a class="pay-and-delivery__nova-poshta col-6" href="https://novaposhta.ua">
                            <img class="pay-and-delivery__nova-poshta__img" src="<?php the_field('delivery_logo') ?>"
                                alt="nova-poshta Greenway купить">
                        </a>
				</div>
             </div>
          </div>
            </div>
        </div>
    </section>
    <style>
        .start-bussines {
            background: url("<?php the_field('background-start-bussines-img-second') ?>"), url("<?php the_field('background-start-bussines-img-first') ?>"), <?php the_field('background-all-hex') ?>;
            background-repeat: no-repeat;
            background-position-x: -130px, right;
            background-position-y: bottom, 100px;
            background-size: auto, auto;
        }

        @media screen and (max-width: 991px) {
            .start-bussines {
                background: url("<?php the_field('background-start-bussines-img-second') ?>"), <?php the_field('background-all-hex') ?>;
                background-repeat: no-repeat;
                background-position-x: -130px, right;
                background-position-y: bottom, 100px;
                background-size: auto, auto;
            }
        }
    </style>
    <section class="start-bussines" id="4">
        <h1 class="section-name"><?php the_field('third_name_section') ?></h1>
        <div class="container">
            <div class="row">
                <p class="start-bussines__tagline col-12 wow fadeInUp" data-wow-duration="0.35s" data-wow-delay="0.15s">
                    <?php the_field('start_bussines_tagline') ?></p>
                <p class="start-bussines__text col-12 wow fadeInUp" data-wow-duration="0.55s" data-wow-delay="0.35s">
                    <?php the_field('start-bussines-text') ?></p>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="0.55s" data-wow-delay="0.35s">
                <div class="start-bussines__contacts col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <p class="start-bussines__contacts__name">Телефоны для консультаций:</p>
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
                    <p class="start-bussines__contacts__mentor">Елена ваш будущий партнер!</p>
                </div>
                <div class="start-bussines__bid col-6">
                    <p id="title-bussines">Оставьте свои контактные данные и мы к вам объязательно перезвоним</p>
                    <form id="contact-bussines" action="<?php echo get_template_directory_uri()?>/mail_bussines.php"
                        method="post">
                        <div id="note-bussines"></div>
                        <div class="form-head" id="fields-bussines">
                            <input type="text" name="name" placeholder=" Введите имя" required>
                            <input type="text" name="tel" placeholder=" +38(999) 999-9999" required>
                            <textarea name="message" placeholder=" Задайте вопрос" style="height:150px"
                                required></textarea>
                            <button type="submit" class="bt-popup-send-mail"
                                style="vertical-align:middle">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews"
        style="background: url(<?php the_field('reviews-img') ?>), <?php the_field('background-all-hex') ?>; background-repeat: no-repeat; background-size:contain;"
        id="5">
        <h1 class="section-name"><?php the_field('fourth_name_section') ?></h1>
        <div class="container">
            <div class="row">
                <div class="reviews__items wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.15s">
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
	'post_type'   => 'review',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
	foreach( $posts as $post ){
	setup_postdata($post);
   ?>
                    <div class="reviews__item col-12">
                        <p class="reviews__item__name"><?php the_field('name') ?></p>
                        <p class="reviews__item__town"><?php the_field('town') ?></p>
                        <p class="reviews__item__text"><?php the_field('text') ?></p>
                        <p class="reviews__item__date"><?php the_field('date') ?></p>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
	<section class="questions" id="6">
		<h1 class="section-name"><?php the_field('five_name_section') ?></h1>
		<div class="container">
            <div class="row">
				<div class="accordion-block wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.15s">
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
'post_type'   => 'questions',
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
setup_postdata($post);
?>
				<button class="accordion"><?php the_field('question') ?></button>
					<div class="panel">
 						 <p><?php the_field('answer') ?></p>
					</div>
<?php
}

wp_reset_postdata(); // сброс
?>
				</div>	
		   </div>
        </div>	
	</section>
    <?php get_footer(); ?>