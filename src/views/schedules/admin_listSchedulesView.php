<?php get_header('Liste des horaires et contact', 'admin'); ?>
<?php displayAlert(); ?>
<div class="container mb-4">
  <div class="mt-5">
    <a href="<?= $router->generate('dashboard'); ?>">Retour</a>
  </div>
  <h3 class="mt-5 text-center fs-1">Liste des horaires</h3>
  <div class="mt-5">
    <a href="<?= $router->generate('addSchedule'); ?>" class="btn btn-success">Ajouter un nouvel horaire</a>
  </div>
  <table class="table table-striped table-hover mt-5">
    <thead>
      <tr>
        <th scope="col">Jour</th>
        <th scope="col">Ouverture matin</th>
        <th scope="col">Fermeture matin</th>
        <th scope="col">Ouverture après-midi</th>
        <th scope="col">Fermeture après-midi</th>
        </tr>
    </thead>
    <thbody>
      <?php foreach ($schedules as $schedule) { ?>
        <tr>
          <td class="align-middle"><?= htmlentities($schedule->week_day); ?></td>
          <td class="align-middle"><?= htmlentities($schedule->morning_opening); ?></td>
          <td class="align-middle"><?= htmlentities($schedule->morning_close); ?></td>
          <td class="align-middle"><?= htmlentities($schedule->opening_afternoon); ?></td>
          <td class="align-middle"><?= htmlentities($schedule->closing_afternoon); ?></td>
          <td class="text-center align-middle">
            <a class="btn btn-warning" href="<?= $router->generate('editSchedule', ['id' =>  htmlentities($schedule->id)]); ?>">Editer</a>
            <a class="btn btn-danger" href="<?= $router->generate('deleteSchedule', ['id' =>  htmlentities($schedule->id)]); ?>">Supprimer</a>
          </td>
        </tr>
      <?php } ?>
    </thbody>
  </table>
</div>