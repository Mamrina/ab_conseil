<?php get_header('Liste des services', 'admin'); ?>
<?php displayAlert(); ?>
<div class="container mb-4">
  <div class="mt-5">
    <a href="<?= $router->generate('dashboard'); ?>" class="mb-5">Retour</a>
  </div>
  <h3 class="mt-5 text-center fs-1">Liste des services</h3>
  <div class="mt-5">
    <a href="<?= $router->generate('addService'); ?>" class="btn btn-success">Ajouter un nouveau service</a>
  </div>
  
  <?php foreach ($services as $service) { ?>
    <div class="service-block mt-5 pb-5 border-bottom">
      <h2><?= htmlentities($service->title); ?></h2>
      <p><?= nl2br(htmlentities($service->description)); ?></p>
      <p><strong>Durée :</strong> <?= htmlentities($service->duration); ?></p>
      <p><strong>Tarif :</strong> <?= htmlentities($service->rates); ?></p>
      <p><strong>Lieu :</strong> <?= htmlentities($service->location); ?></p>
      <p><strong>Ajouté le :</strong> <?= date('d/m/Y H:i:s', strtotime($service->created_at)); ?></p>
      <p><strong>Modifié le :</strong> <?= date('d/m/Y H:i:s', strtotime($service->modified_at)); ?></p>
      <div class="action-buttons mt-2">
        <a href="<?= $router->generate('editService', ['id' => htmlentities($service->id)]); ?>" class="btn btn-warning">Editer</a>
        <a href="<?= $router->generate('deleteService', ['id' => htmlentities($service->id)]); ?>" class="btn btn-danger">Supprimer</a>
      </div>
    </div>
  <?php } ?>
</div>

<?php get_footer('admin'); ?>
