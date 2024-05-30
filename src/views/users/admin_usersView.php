<?php get_header('Mon compte utilisateur', 'admin'); ?>

<div>
  <h2>Mon compte utilisateur</h2>
  <!-- <a href="<?= $router->generate('addUser'); ?>" class="btn btn-success">Ajouter un nouvel administrateur</a> -->
</div>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td class="align-middle"><?= htmlentities($user->email); ?></td>
        <td class="text-center align-middle">
          <a class="btn btn-warning" href="<?= $router->generate('editUser', ['id' =>  htmlentities($user->id)]); ?>">Editer</a>
          <a class="btn btn-danger" href="<?= $router->generate('deleteUser', ['id' =>  htmlentities($user->id)]); ?>">Supprimer</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php get_footer('admin'); ?>