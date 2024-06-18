<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?> | Alexandra Bily Conseil</title>
</head>
<body>
  <header>
    <div>
      <h1>LOGO</h1>
    </div>
    <nav>
      <ul>
        <li>
          <a href="<?= $router->generate('home'); ?>">Accueil</a>
          <a href="<?= $router->generate('about'); ?>">A propos</a>
        </li>
      </ul>
    </nav>
  </header>
