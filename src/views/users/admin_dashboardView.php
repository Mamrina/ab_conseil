<?php
get_header('Dashboard', 'admin'); ?>

<h1>Bienvenue , que souhaitez-vous faire ?</h1>
<ul>
  <li><a href="<?= $router->generate('users'); ?>">Espace compte utilisateur</a></li>
  <li><a href="<?= $router->generate('services'); ?>">Voir les services</a></li>
  <li><a href="<?= $router->generate('shcedules'); ?>">Voir les horaires</a></li>
</ul>