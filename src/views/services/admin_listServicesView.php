<?php get_header('Liste des services', 'admin'); ?>

<div class="container mb-4">
  <div>
    <a href="<?= $router->generate('dashboard'); ?>" class="mb-5">Retour</a>
  </div>
  <h3 class="mt-5">Liste des services</h3>
  <div class="mt-5">
    <a href="<?= $router->generate('addService'); ?>" class="btn btn-success">Ajouter un nouveau service</a>
  </div>
  
  <?php foreach ($services as $service) { ?>
    <div class="service-block mt-5 pb-5 border-bottom">
      <h4><?= htmlentities($service->title); ?></h4>
      <p><?= nl2br(htmlentities($service->description)); ?></p>
      <p><strong>Durée :</strong> <?= htmlentities($service->duration); ?></p>
      <p><strong>Tarif :</strong> <?= htmlentities($service->rates); ?></p>
      <p><strong>Lieu :</strong> <?= htmlentities($service->location); ?></p>
      <div class="action-buttons">
        <a href="<?= $router->generate('editService', ['id' => htmlentities($service->id)]); ?>" class="btn btn-warning">Editer</a>
        <a href="<?= $router->generate('deleteService', ['id' => htmlentities($service->id)]); ?>" class="btn btn-danger">Supprimer</a>
      </div>
    </div>
  <?php } ?>
</div>

<?php get_footer('admin'); ?>
