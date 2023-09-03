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
    <link rel="stylesheet" href="<?= BASEURL; ?>css/joinChat.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
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
          <a href="<?= BASEURL; ?>about">Tentang Kami</a>
          <a href="<?= BASEURL; ?>jasa">Jasa</a>
          <a href="<?= BASEURL; ?>project">Project</a>
            <a href="<?= BASEURL; ?>contactUs" class="nav-contact">
                Hubungi Kami
            </a>
        </div>
  
        <div class="navbar-extra">
          <a href="#" id="hamburger-menu"><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <!--Navbar end-->