<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?> | Admin | Alexandra Bily Conseil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg mb-4" data-bs-theme="dark" style="background: #3e467f;" >
			<div class="container">
				<a class="navbar-brand" href="<?= $router->generate('dashboard'); ?>">Tableau de bord - AB Conseil</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="<?= $router->generate('users'); ?>">Mon compte</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $router->generate('listServices'); ?>">Mes services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $router->generate('listSchedules'); ?>">Horaires et contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= $router->generate('listNews'); ?>">Actualités</a>
						</li>
					</ul>
					<div class="navbar-text">
						<a href="<?= $router->generate('logout'); ?>" class="btn btn-danger">Déconnexion</a>
					</div>
				</div>
			</div>
		</nav>
  </header>

