<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo("name"); echo " | "; bloginfo('description') ?></title>
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/geral.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/plugins.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/<?php echo $style; ?>.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
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
  <main class="corpo container">
