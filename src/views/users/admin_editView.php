<?php
get_header('Editer un utilisateur', 'admin'); ?>

<h1 class="mb-5">Modifier mon email et mot de passe</h1>

<form action="" method="post" class="form-signin w-100 m-auto novalidate">
  <div class=" mb-4">
    <?php $error = checkEmptyFields('email'); ?>
    <label for="email" class="form-label">Adresse Email *</label>
    <input type="email" name="email" id="email" value="<?= getValue('email'); ?>" class="form-control <?= $error['class']; ?>">
    <?= $error['message']; ?>
    <?= $errorsMessage['email']; ?>
  </div>
  <div class=" mb-4">
    <?php $error = checkEmptyFields('pwd'); ?>
    <label for="pwd" class="form-label">Mot de passe *</label>
    <input type="password" name="pwd" id="pwd" class="form-control <?= $error['class']; ?>">
    <p class="form-text mb-0">"La règle des mots de passes"</p>
    <?= $error['message']; ?>
    <?= $errorsMessage['pwd']; ?>
  </div>
  <div class=" mb-4">
    <?php $error = checkEmptyFields('pwd'); ?>
    <label for="pwd" class="form-label">Confirmation Mot de passe *</label>
    <input type="password" name="pwdConfirm" id="pwd-confirm" class="form-control <?= $error['class']; ?>">
    <?= $error['message']; ?>
    <?= $errorsMessage['pwdConfirm']; ?>
  </div>
  <div>
    <input type="submit" class="btn btn-success" value="Sauvegarder">
  </div>

</form>

<?php get_header('admin'); ?>