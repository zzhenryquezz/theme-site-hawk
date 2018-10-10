<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/geral.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/plugins.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); echo "/css/home.css"; ?>">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); echo "/css/jquery.bxslider.min.css"; ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <!-- Cabesalho -->
  <header class="container-fluid">
    <div class="container">
      <div class="logo col-lg-2">
        <a href="<?php bloginfo("url") ?>"><img src="<?php bloginfo('template_url') ?>/imagens/logo-menu.png" alt="logo top"></a>
      </div>
      <a href="<?php bloginfo("url") ?>">
        <div class="col-lg-4">
          <h1 class="titulo h-titulo"><strong><?php bloginfo('name') ?></strong></h1>
          <h2 class="subtitulo h-titulo"><strong><?php bloginfo('description') ?></strong></h2>
        </div>
      </a>
      <?php include get_template_directory()."/includes/molecules/icones-redes-sociais.php"?>
    </div>
  </header>
  <?php include get_template_directory()."/includes/molecules/menu-1.php"?>

  <!-- Exerpr do Site: resumo de artigos
    <?php
      $args =array('post_type' => 'page', 'pagename' => 'sobre' );
      $my_page = get_posts($args)
    ?>
    <?php if($my_page) : foreach ($my_page as $post ) : setup_postdata($post);?>

      <h2><?php the_title(); ?></h2>

      <?php the_excerpt(); ?>

        <a href="<?php the_permalink(); ?>"; class="custom-botoam">Leia mais</a>

    <?php endforeach;?>

    <?php else: ?>

      <p>Nenhum conteudo inserido na pagina sobre.</p>

    <?php endif; ?>-->
  <main class="corpo container">
