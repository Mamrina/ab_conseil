<?php get_header('Editer un article', 'admin'); ?>
<div class="container mb-4">
  <form action="" method="post" class="form-signin w-100 m-auto" enctype="multipart/form-data">
    <h3 class="mb-5 fw-normal text-center">Ajouter un article</h3>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('title'); ?>
      <input type="text" name="title" value="<?= getValue('title'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
      <label for="title">Titre de l'article *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('content'); ?>
      <textarea name="content" id="content" class="form-control <?= $error['class']; ?>" placeholder="#"><?= getValue('content'); ?></textarea>
      <label for="content">Contenu *</label>
      <?= $error['message']; ?>
    </div>
    <div>
      <button class="btn btn-success w-100 py-2 mt-3" type="submit">Soumettre</button>
    </div>
  </form>
</div>

<?php get_footer('admin'); ?>