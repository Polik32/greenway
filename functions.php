<?php
function catalog(){
	register_post_type('cards', array(
		'labels'             => array(
			'name'               => 'Каталог продукции',
			'singular_name'      => 'Каталог продукции',
			'add_new'            => 'Добавить новый каталог',
			'add_new_item'       => 'Добавить новый каталог',
			'edit_item'          => 'Редактировать каталог',
			'new_item'           => 'Новый каталог',
			'view_item'          => 'Посмотреть каталог',
			'search_items'       => 'Найти каталог',
			'not_found'          =>  'Каталогов не найдено',
			'not_found_in_trash' => 'В корзине каталогов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Продукция'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail')
	) );
}

function reviews(){
	register_post_type('review', array(
		'labels'             => array(
			'name'               => 'Отзывы',
			'singular_name'      => 'Отзывы',
			'add_new'            => 'Добавить новый отзыв',
			'add_new_item'       => 'Добавить новый отзыв',
			'edit_item'          => 'Редактировать отзыв',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          =>  'Отзывов не найдено',
			'not_found_in_trash' => 'В корзине отзывов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail')
	) );
}

function menu (){
	register_post_type('menu', array(
		'labels'             => array(
			'name'               => 'Меню',
			'singular_name'      => 'Меню',
			'add_new'            => 'Добавить пункт меню',
			'add_new_item'       => 'Добавить пункт меню',
			'edit_item'          => 'Редактировать пункт меню',
			'new_item'           => 'Новый пункт меню',
			'view_item'          => 'Посмотреть пункт меню',
			'search_items'       => 'Найти пункт меню',
			'not_found'          =>  'Пунктов меню не найдено',
			'not_found_in_trash' => 'В корзине пунктов меню не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Меню'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}

function contacts (){
	register_post_type('contacts', array(
		'labels'             => array(
			'name'               => 'Контакты',
			'singular_name'      => 'Контакты',
			'add_new'            => 'Добавить контакт',
			'add_new_item'       => 'Добавить контакт',
			'edit_item'          => 'Редактировать контакт',
			'new_item'           => 'Новый контакты',
			'view_item'          => 'Посмотреть контакт',
			'search_items'       => 'Найти контакт',
			'not_found'          =>  'Контактов не найдено',
			'not_found_in_trash' => 'В корзине контактов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Контакты'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}

function questions (){
	register_post_type('questions', array(
		'labels'             => array(
			'name'               => 'Вопросы',
			'singular_name'      => 'Вопросы',
			'add_new'            => 'Добавить вопрос',
			'add_new_item'       => 'Добавить вопрос',
			'edit_item'          => 'Редактировать вопрос',
			'new_item'           => 'Новый вопрос',
			'view_item'          => 'Посмотреть вопрос',
			'search_items'       => 'Найти вопрос',
			'not_found'          =>  'Вопросов не найдено',
			'not_found_in_trash' => 'В корзине вопросов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Вопросы'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}

function Greenway() {
	
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.css' );
	
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/style.css' );
		
	wp_enqueue_script( 'buttonUp', get_template_directory_uri() . '/assets/js/buttonUp.js', array(), '20151215', true );
	
	wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', array(), '20151215', true );
	
	wp_enqueue_script( 'pop', get_template_directory_uri() . '/assets/js/pop.js', array(), '20151215', true );
	
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), '20151215', true );
		
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider-reviews.js', array(), '20151215', true );
	
	wp_enqueue_script( 'form', get_template_directory_uri() . '/contact.js', array(), '20151215', true );
	
	wp_enqueue_script( 'bussines', get_template_directory_uri() . '/contact_bussines.js', array(), '20151215', true );
	
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'preloader', get_template_directory_uri() . '/assets/js/preloader.js', array(), '20151215', true );
	
	wp_enqueue_script( 'acardion', get_template_directory_uri() . '/assets/js/accordion.js', array(), '20151215', true );
	
}

function my_jquery() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'Greenway', 'init', 'my_jquery', 'reviews', 'catalog', 'menu', 'contacts', 'questions');

add_action('init','catalog');

add_action('init', 'reviews');

add_action('init', 'menu');

add_action('init', 'contacts');

add_action('init', 'questions');

show_admin_bar(false);

add_theme_support( 'post-thumbnails');
		
add_theme_support( 'post-thumbnails', array( 'catalog' ) );

add_theme_support ('menus');


//*******************************************************************************************
// Отключение rss-ленты
function fb_disable_feed() {
wp_redirect(get_option('siteurl'));
}

add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

// Отключение RSD-ссылки
remove_action( 'wp_head', 'rsd_link' );
// Отключение wlwmanifest-ссылки
remove_action( 'wp_head', 'wlwmanifest_link' );
//Отключить короткие ссылки в WordPress
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

//удаление версии WordPress start 
function remove_wpversion() {
     return '';
}
add_filter('the_generator', 'remove_wpversion');


add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
	remove_menu_page( 'index.php' );                  // Консоль
	remove_menu_page( 'edit.php' );                   // Записи
	remove_menu_page( 'edit-comments.php' );          // Комментарии
	remove_menu_page( 'users.php' );                  // Пользователи
	remove_menu_page( 'tools.php' );                  // Инструменты
}