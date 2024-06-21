<?php get_header('Liste des articles de Blog', 'admin'); ?>

<div class="container mb-4">
  <div class="mb-4">
    <a href="<?= $router->generate('dashboard'); ?>">Retour</a>
  </div>
  <div class="mb-4">
    <h3>Liste des articles</h3>
  </div>
  <div class="mb-4">
    <a href="<?= $router->generate('addNew'); ?>" class="btn btn-success">Ajouter un nouvel article</a>
  </div>
  
  <?php foreach ($news as $new) { ?>
    <div class="article-container mb-5 pb-5 border-bottom">
      <h4 class="article-title"><?= htmlentities($new->title); ?></h4>
      <div class="article-content"><?= nl2br(htmlentities($new->content)); ?></div>
      <div class="article-dates">
        <span>Posté le : <?= date('d/m/Y', strtotime($new->created_at)); ?></span>
        <span>Modifié le : <?= date('d/m/Y', strtotime($new->modified_at)); ?></span>
      </div>
      <div class="article-actions mt-2">
        <a class="btn btn-warning" href="<?= $router->generate('editNew', ['id' => htmlentities($new->id)]); ?>">Editer</a>
        <a class="btn btn-danger" href="<?= $router->generate('deleteNew', ['id' => htmlentities($new->id)]); ?>">Supprimer</a>
      </div>
    </div>
  <?php } ?>
</div>

<?php get_footer('admin'); ?>
