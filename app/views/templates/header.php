<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header-media.css">
    <link rel="stylesheet" href="css/hero.css">
    <!-- css dari luar -->
<?php foreach($data['css'] as $dat) : ?>
    <link rel="stylesheet" href="css/<?= $dat ?>">
<?php endforeach; ?>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/joinChat.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <title><?= $data['title'] ?></title>
    <link rel="icon" type="image/x-icon" href="icon.ico">
</head>
<body>
    <!--Navbar start-->
    <nav class="navbar">
        <a href="<?= BASEURL; ?>" class="navbar-logo">
            <img src="img/icon.png">
        </a>
  
        <div class="navbar-nav">
          <a href="<?= BASEURL; ?>">Beranda</a>
          <a href="about">Tentang Kami</a>
          <a href="jasa">Jasa</a>
          <a href="project">Project</a>
            <a href="contactUs" class="nav-contact">
                Hubungi Kami
            </a>
        </div>
  
        <div class="navbar-extra">
          <a href="#" id="hamburger-menu"><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <!--Navbar end-->