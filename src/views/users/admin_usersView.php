<?php get_header('Mon compte utilisateur', 'admin'); ?>
<div class="container mb-4">
<?= displayAlert(); ?>
<a href="<?= $router->generate('dashboard'); ?>">Retour</a>
  <div>
  <h3>Mon compte administrateur</h3>
  <p>Pour modifier vos informations, cliquez sur 'Editer'.</p>
</div>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">A propos</th>
      <th scope="col">A propos plus</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td class="align-middle"><?= htmlentities($user->firstname); ?></td>
        <td class="align-middle"><?= htmlentities($user->name); ?></td>
        <td class="align-middle"><?= htmlentities($user->about_me); ?></td>
        <td class="align-middle"><?= htmlentities($user->about_me_2); ?></td>
        <td class="text-center align-middle">
          <a class="btn btn-warning" href="<?= $router->generate('editUser', ['id' =>  htmlentities($user->id)]); ?>">Editer</a>
          <a class="btn btn-danger" href="<?= $router->generate('deleteUser', ['id' =>  htmlentities($user->id)]); ?>">Supprimer</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>


<?php get_footer('admin'); ?>