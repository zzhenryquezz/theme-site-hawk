<?php
// ativando suporte a imagem destacada
add_theme_support("post-thumbnails");

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

// mini artigos
function resumo_post_type() {
  register_post_type( 'acme_products',
  array(
    'labels' => array(
      'name' => __( 'Resumos' ),
      'singular_name' => __( 'Resumo' )
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
