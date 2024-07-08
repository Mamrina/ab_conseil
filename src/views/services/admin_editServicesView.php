<?php get_header('Editer un service', 'admin'); ?>

<div class="container mb-4 mt-4">
  <form action="" method="post" class="form-signin w-100 m-auto" enctype="multipart/form-data">
    <h3 class="mb-5 fw-normal text-center">Ajouter un service</h3>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('title'); ?>
      <input type="text" name="title" value="<?= getValue('title'); ?>" class="form-control <?= $error['class']; ?>" placeholder="Titre">
      <label for="title">Titre du service *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('description'); ?>
      <textarea name="description" class="form-control <?= $error['class']; ?>" style="height: 300px; resize: vertical;" id="description" 
      placeholder="Description *"><?= getValue('description'); ?></textarea>
      <label for="description">Description *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('duration'); ?>
      <input type="text" name="duration" value="<?= getValue('duration'); ?>" class="form-control <?= $error['class']; ?>" placeholder="Durée">
      <label for="duration">Durée *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('rates'); ?>
      <input type="text" name="rates" value="<?= getValue('rates'); ?>" class="form-control <?= $error['class']; ?>" placeholder="Tarifs">
      <label for="rates">Tarif *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('location'); ?>
      <input type="text" name="location" value="<?= getValue('location'); ?>" class="form-control <?= $error['class']; ?>" placeholder="Lieu">
      <label for="location">Lieu *</label>
      <?= $error['message']; ?>
    </div>
    <div>
      <button class="btn btn-success w-100 py-2 mt-3" type="submit">Soumettre</button>
    </div>
  </form>
</div>

<?php get_footer('admin'); ?>