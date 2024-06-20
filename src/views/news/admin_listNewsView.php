<?php get_header('Liste des articles de Blog', 'admin'); ?>

<div class="container mb-4">
<a href="<?= $router->generate('dashboard'); ?>">Retour</a>
  <h3 class="mb-10">Liste des articles</h3>
  
  <a href="<?= $router->generate('addNew'); ?>" class="btn btn-success">Ajouter un nouvel article</a>
  
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Contenu</th>
        <th scope="col">Posté le :</th>
        <th scope="col">Modifié le :</th>
        </tr>
    </thead>
    <thbody>
      <?php foreach ($news as $new) { ?>
        <tr>
          <td class="align-middle"><?= htmlentities($new->title); ?></td>
          <td class="align-middle"><?= htmlentities($new->content); ?></td>
          <td class="align-middle"><?= ($new->created_at); ?></td>
          <td class="align-middle"><?= ($new->modified_at); ?></td>
          <td class="text-center align-middle">
            <a class="btn btn-warning" href="<?= $router->generate('editNew', ['id' =>  htmlentities($new->id)]); ?>">Editer</a>
            <a class="btn btn-danger" href="<?= $router->generate('deleteNew', ['id' =>  htmlentities($new->id)]); ?>">Supprimer</a>
          </td>
        </tr>
      <?php } ?>
    </thbody>
  </table>
</div>