<!doctype html>
<html lang="pt-BR">

<head>
  <title><?php echo $titulo_pagina; ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="icon" href="./img/f_fatecon.ico" type="image/x-icon">
</head>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<body>
  <header class="py-3 my-3">
    <nav class="navbar navbar-expand-lg bg-black navbar-dark fixed-top">
      <div class="container-fluid">
        <img src="./img/Fatecon2025logoSM.png" alt="Logo grande" class="navbar-brand logo d-lg-none d-md-none d-sm-block ">
        <img src="./img/Fatecon2025logo.png" alt="Logo pequena" class="navbar-brand logo d-none d-lg-block d-md-block">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>" href="./index.php">
              <h4>Início</h4>
            </a>
            <a class="nav-link <?= $current_page == 'boraconhecer.php' ? 'active' : '' ?>" href="./boraconhecer.php">
              <h4>Bora Conhecer</h4>
            </a>
            <a class="nav-link <?= $current_page == 'revivaconosco.php' ? 'active' : '' ?>" href="./revivaconosco.php">
              <h4>Reviva Conosco</h4>
            </a>
            <a class="nav-link <?= $current_page == 'regulamentos.php' ? 'active' : '' ?>" href="regulamentos.php">
              <h4>Regulamento</h4>
            </a>
            <a class="nav-link <?= $current_page == 'quemsomos.php' ? 'active' : '' ?>" href="quemsomos.php">
              <h4>Quem Somos</h4>
            </a>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>