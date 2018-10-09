<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Site-Hawk</title>
  <link rel="stylesheet" href="css/geral.css">
  <link rel="stylesheet" href="css/plugins.css">
  <link rel="stylesheet" href="css/<?php echo $style; ?>.css">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</script>
</head>
<body>
  <!-- Cabesalho -->
  <header class="container-fluid">
    <div class="container">
      <div class="logo col-lg-2">
        <a href="index.php"><img src="imagens/logo-menu.png" alt="logo top"></a>
      </div>
      <a href="index.php">
        <div class="col-lg-4">
          <h1 class="titulo h-titulo"><strong>Hawk</strong></h1>
          <h2 class="subtitulo h-titulo"><strong>Animes e Games</strong></h2>
        </div>
      </a>
      <?php include("includes/molecules/icones-redes-sociais.php") ?>
    </div>
  </header>
  <?php include("includes/molecules/$menu"); ?>
  <main class="corpo container">
