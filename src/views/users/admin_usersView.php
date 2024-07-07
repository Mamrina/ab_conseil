<?php get_header('Mon compte utilisateur', 'admin'); ?>

<div class="container mb-4">
  <div class="mb-5 mt-5">
    <a href="<?= $router->generate('dashboard'); ?>">Retour</a>
  </div>
  <div class="mb-5 mt-5">
    <h3>Mon compte administrateur</h3>
    <p>Pour modifier vos informations, cliquez sur 'Editer'.</p>
  </div>

  <?php foreach ($users as $user) { ?>
    <div class="user-info mb-4">
      <div><strong>Prénom :</strong> <?= htmlentities($user->firstname); ?></div>
      <div><strong>Nom :</strong> <?= htmlentities($user->name); ?></div>
      <div><strong>Téléphone :</strong> <?= htmlentities($user->phone); ?></div>
      <div><strong>À propos :</strong> <?= nl2br(htmlentities($user->about_me)); ?></div>
      <div><strong>Plus d'infos :</strong> <?= nl2br(htmlentities($user->about_me_2)); ?></div>
      <div class="action-buttons mt-2">
        <a class="btn btn-warning" href="<?= $router->generate('editUser', ['id' =>  htmlentities($user->id)]); ?>">Editer</a>
      </div>
    </div>
  <?php } ?>
</div>

<?php get_footer('admin'); ?>
