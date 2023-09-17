<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/header.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/header-media.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/hero.css">
    <!-- css dari luar -->
<?php foreach($data['css'] as $dat) : ?>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/<?= $dat ?>">
<?php endforeach; ?>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/footer.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/footer-media.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/joinChat.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title><?= $data['title'] ?></title>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>icon.ico">
</head>
<body>
    <!--Navbar start-->
    <nav class="navbar">
        <a href="<?= BASEURL; ?>" class="navbar-logo">
            <img src="<?= BASEURL; ?>img/icon.png">
        </a>
  
        <div class="navbar-nav">
          <a href="<?= BASEURL; ?>">Beranda</a>
          <a href="<?= BASEURL; ?>#about">Tentang Kami</a>
          <a href="<?= BASEURL; ?>#layanan">Jasa</a>
          <a href="<?= BASEURL; ?>#staff">Staff Kami</a>
            <a href="<?= BASEURL; ?>contactus" class="nav-contact">
                Hubungi Kami
            </a>
        </div>
  
        <div class="navbar-extra">
          <a id="hamburger-menu"><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <!--Navbar end-->
    <!-- hero section start -->
    <div class="hero">
        <div class="hero-icon-container">
            <div class="hero-icon"></div>
        </div>
        <div class="title">
            <h1><?= $data['title'] ?></h1>
        </div>
        <div class="hero-p">
            <p>JAM OPERASIONAL :</p>
            <p>SENIN - JUMAT JAM 09.00 -17.00</p>
            <p>SABTU 09.00 - 13.00</p>
            <p>MINGGU LIBUR</p>
        </div>
        <div class="hero-kotak"></div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $data['waveColor']; ?>" fill-opacity="1" d="M0,128L120,149.3C240,171,480,213,720,208C960,203,1200,149,1320,122.7L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    </div>
    <!-- hero section end -->