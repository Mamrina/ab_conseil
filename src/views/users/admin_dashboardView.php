<?php
get_header('Dashboard', 'admin'); 
displayAlert()
?>
<div class="container mb-4 text-center">
  <div>
    <h3 class="mb-5 mt-5">Bienvenue Alexandra, que souhaitez-vous faire ?</h3>
  </div>
  <nav>
    <ul class="list-unstyled row justify-content-around">
      <div class="col-md-6 mb-3">
        <a class="text-decoration-none" href="<?= $router->generate('users'); ?>">
          <li class="card p-4 fs-4">Mon compte</li>
        </a>
      </div>
      <div class="col-md-6 mb-3">
        <a class="text-decoration-none" href="<?= $router->generate('listServices'); ?>">
          <li class="card p-4 fs-4">Mes services</li>
        </a>
      </div>
      <div class="col-md-6 mb-3">
        <a class="text-decoration-none" href="<?= $router->generate('listSchedules'); ?>">
          <li class="card p-4 fs-4">Horaires</li>
        </a>
      </div>
      <div class="col-md-6 mb-3">
        <a class="text-decoration-none" href="<?= $router->generate('listNews'); ?>">
          <li class="card p-4 fs-4">Actualités</li>
        </a>
      </div>
    </ul>
</nav>

</div>

