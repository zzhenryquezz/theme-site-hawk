<?php
// ativando suporte a imagem destacada e custum-sizes
add_theme_support("post-thumbnails");
add_image_size('thumb-home', 350, 250, false);
add_image_size('thumb-slide', 900, 186, true);
// ativando excerpt
add_post_type_support('page', 'excerpt');

//ativando menus dinamicos
function register_my_menus(){
  register_nav_menus(
    array(
      'header-menu-1' => _('Menu do Topo'),
      'header-menu-2' => _('Menu do Topo-2')
    )
  );
}
add_action( 'init', 'register_my_menus');

// post type
function resumo_post_type() {
  register_post_type( 'carousel',
  array(
    'labels' => array(
      'name' => __( 'Carousel' ),
      'singular_name' => __( 'Carousel' )
    ),
    'public' => true,
    'has_archive' => true,
    'has_archive' => 'dashicons-welcome-widgets-menus',
    'supports' => array('title', 'thumbnail', 'page-attributes'),

  )
);
}
add_action( 'init', 'resumo_post_type');
// theme supports

?>
