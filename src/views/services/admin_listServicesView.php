<?php get_header('Liste des services', 'admin'); ?>
<div class="container mb-4">
  <?= displayAlert(); ?>
<a href="<?= $router->generate('dashboard'); ?>">Retour</a>
  <h2 class="mb-10">Liste des services</h2>
  
  <a href="<?= $router->generate('addService'); ?>" class="btn btn-success">Ajouter un nouveau service</a>
  
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">Durée</th>
        <th scope="col">Tarif</th>
        <th scope="col">Lieu</th>
        </tr>
    </thead>
    <thbody>
      <?php foreach ($services as $service) { ?>
        <tr>
          <td class="align-middle"><?= htmlentities($service->title); ?></td>
          <td class="align-middle"><?= htmlentities($service->description); ?></td>
          <td class="align-middle"><?= htmlentities($service->duration); ?></td>
          <td class="align-middle"><?= htmlentities($service->rates); ?></td>
          <td class="align-middle"><?= htmlentities($service->location); ?></td>
          <td class="text-center align-middle">
            <a class="btn btn-warning" href="<?= $router->generate('editService', ['id' =>  htmlentities($service->id)]); ?>">Editer</a>
            <a class="btn btn-danger" href="<?= $router->generate('deleteService', ['id' =>  htmlentities($service->id)]); ?>">Supprimer</a>
          </td>
        </tr>
      <?php } ?>
    </thbody>
  </table>
</div>