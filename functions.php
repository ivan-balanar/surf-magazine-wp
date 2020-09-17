<?php

// Connect scripts, styles

function surfing_scripts() {


  wp_enqueue_style( 
    'surfing-reboot', 
    get_template_directory_uri() . '/libs/bootstrap-reboot/bootstrap-reboot.min.css' 
  );

  wp_enqueue_style( 
    'surfing-main', 
    get_stylesheet_uri() 
  );

  wp_enqueue_style( 
    'surfing-gfonts', 
    'https://fonts.googleapis.com/css2?family=Fira+Sans&family=Playfair+Display:wght@400;700&family=Poppins:wght@300&display=swap'
  );

  wp_enqueue_style( 
    'surfing-fontspartan', 
    get_template_directory_uri() . '/fonts/league-spartan/league.css' 
  );

  wp_enqueue_style( 
    'surfing-owlCarousel', 
    get_template_directory_uri() . '/libs/owl carousel/assets/owl.carousel.min.css' 
  );

  wp_enqueue_style( 
    'surfing-owlCarouselTheme', 
    get_template_directory_uri() . '/libs/owl carousel/assets/owl.theme.default.min.css' 
  );

  wp_deregister_script( 'jquery' );

  wp_enqueue_script( 
    'jquery', 
    'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', 
    array(),
    true
  );

  wp_enqueue_script( 
    'owlCarousel', 
    get_template_directory_uri() . '/libs/owl carousel/owl.carousel.min.js',
    array('jquery'), 
    true
  );

  wp_enqueue_script( 
    'shop-slider', 
    get_template_directory_uri() . '/js/shop-slider.js',
    array('jquery', 'owlCarousel'), 
    true
  );

  wp_enqueue_script( 
    'header-slider', 
    get_template_directory_uri() . '/js/header-slider.js',
    array('jquery', 'owlCarousel'), 
    true
  );

}
add_action( 'wp_enqueue_scripts', 'surfing_scripts' );

// Register custom type posts

add_action('init', 'register_post_types');
function register_post_types(){
	$cptArgsArray = array(
		'labels'             => array(
			'name'               => 'Boards',
			'singular_name'      => 'Board',
			'add_new'            => 'Create new',
			'add_new_item'       => 'Create new board',
			'edit_item'          => 'Edit board',
			'new_item'           => 'New board',
			'view_item'          => 'Look board',
			'search_items'       => 'Search board',
			'not_found'          => 'Boards is not find',
			'not_found_in_trash' => 'Not found in cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Boards'
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
		'supports'           => array(
      'title',
      // 'editor',
      // 'author',
      'thumbnail',
      // 'excerpt',
      // 'comments'
      )
    );
    register_post_type('boards', $cptArgsArray );
}

// Add prev posts

add_theme_support( 'post-thumbnails' );

if ( function_exists('add_image_size') ){
  add_image_size('board-slider', 225, 490, true);
}