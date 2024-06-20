<?php get_header('Editer les horaires', 'admin'); ?>
<?= displayAlert(); ?>

<div class="container mb-4">
  <form action="" method="post" class="form-signin w-100 m-auto" enctype="multipart/form-data">
    <h3 class="mb-5 fw-normal text-center">Ajouter un horaire</h3>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('week_day'); ?>
      <input type="text" name="week_day" value="<?= getValue('week_day'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
      <label for="week_day">Jour *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('morning_opening'); ?>
      <input type="text" name="morning_opening" value="<?= getValue('morning_opening'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
      <label for="morning_opening">Ouverture matin *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('morning_close'); ?>
      <input type="text" name="morning_close" value="<?= getValue('morning_close'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
      <label for="morning_close">Fermeture matin *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('opening_afternoon'); ?>
      <input type="text" name="opening_afternoon" value="<?= getValue('opening_afternoon'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
      <label for="opening_afternoon">Ouverture après-midi *</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('closing_afternoon'); ?>
      <input type="text" name="closing_afternoon" value="<?= getValue('closing_afternoon'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
      <label for="closing_afternoon">Fermeture après-midi *</label>
      <?= $error['message']; ?>
    </div>
    <div>
      <button class="btn btn-success w-100 py-2 mt-3" type="submit">Soumettre</button>
    </div>
  </form>
</div>

<?php get_footer('admin'); ?>