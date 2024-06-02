<?php
get_header('Dashboard', 'admin'); ?>

<div class="container mb-4">
  <h1>Bienvenue , que souhaitez-vous faire ?</h1>
  <nav>
    <ul>
      <li><a href="<?= $router->generate('users'); ?>">Espace utilisateur</a></li>
      <li><a href="<?= $router->generate('listServices'); ?>">Voir les services</a></li>
      <li><a href="<?= $router->generate('shcedules'); ?>">Voir les horaires</a></li>
  </ul>
  </nav>
</div>

