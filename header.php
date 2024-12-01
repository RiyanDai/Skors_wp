<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SKORS!</title>

  <link rel="shortcut icon" href="<?= get_theme_file_uri( '/img/sortcut.png' ) ?>" type="image/svg+xml">

  <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'css/style.css' ) ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">
  <header class="header" data-header>
    <div class="container" id="judul">
      <img src="<?= get_theme_file_uri( 'img/Logo-Putih.svg' )?>" alt="logo" >
      <div class="top_menu" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="/" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="#client" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

          <li>
            <a href="article" class="navbar-link" data-nav-link>Article</a>
          </li>


        </ul>
      </di>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>