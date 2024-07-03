<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./images/ab_conseil.ico" type="image/x-icon">
  <title><?= $title; ?> | Alexandra Bily Conseil</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://kit.fontawesome.com/ad2e9db608.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
  <header>
    <div id="header" class="wrapper">
      <div>
        <a href="<?= $router->generate('home'); ?>"><h2 class="title-header">AB Conseil</h2></a>
      </div>
      <nav>
        <ul class="header-nav">
          <li>
            <a href="<?= $router->generate('about_me'); ?>">Qui suis-je ?</a>
          </li>
          <li>
            <a href="<?= $router->generate('services'); ?>">Mes services</a>
          </li>
          <li>
            <a href="<?= $router->generate('schedules'); ?>">Contact</a>
          </li>
          <li>
            <a href="<?= $router->generate('news'); ?>">Actualités</a>
          </li>
        </ul>
        <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      </nav>
    </div>
  </header>
