<?php
get_header('Dashboard', 'admin'); ?>
<div class="container mb-4">
  <h1>Bienvenue Alexandra, que souhaitez-vous faire ?</h1>
  <nav>
    <ul>
      <li><a href="<?= $router->generate('users'); ?>">Mon compte</a></li>
      <li><a href="<?= $router->generate('listServices'); ?>">Mes services</a></li>
      <li><a href="<?= $router->generate('listNews'); ?>">Mon Blog</a></li>
  </ul>
  </nav>
</div>

