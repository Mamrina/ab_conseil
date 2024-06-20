<?php
get_header('Dashboard', 'admin'); ?>
<div class="container mb-4">
  <h3 class="mb-5">Bienvenue Alexandra, que souhaitez-vous faire ?</h3>
  <nav>
    <ul class="list-unstyled">
      <li class="mb-3"><a class="text-decoration-none" href="<?= $router->generate('users'); ?>">Mon compte</a></li>
      <li class="mb-3"><a class="text-decoration-none" href="<?= $router->generate('listServices'); ?>">Mes services</a></li>
      <li class="mb-3"><a class="text-decoration-none" href="<?= $router->generate('listSchedules'); ?>">Horaires et Contact</a></li>
      <li class="mb-3"><a class="text-decoration-none" href="<?= $router->generate('listNews'); ?>">Actualités</a></li>
  </ul>
  </nav>
</div>

