<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Site-Hawk</title>
  <link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/geral.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/plugins.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url");?>/css/<?php echo $style; ?>.css">
<style media="screen">
  .menu{
    background: none;
  }
</style>
</head>
<body>
  <!-- Cabesalho -->
  <header class="header container-fluid">
    <div class="container">
      <?php include get_template_directory()."/includes/molecules/icones-redes-sociais.php"?>
      <a href="<?php bloginfo("url") ?>">
        <div class="logo col-lg-12">
          <div class="logo-sobre">
          </div>
        </div>
        <div class="h-titulo col-lg-4">
          <h1 class="titulo"><strong>Hawk</strong></h1>
          <h2 class="subtitulo"><strong>Animes e Games</strong></h2>
        </div>
      </a>
    </div>
  </header>
  <!-- menu -->
  <?php include get_template_directory()."/includes/molecules/menu-2.php" ?>
  <main class="container">
