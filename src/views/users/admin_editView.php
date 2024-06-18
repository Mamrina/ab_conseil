<?php
get_header('Editer un utilisateur', 'admin'); ?>
<div class="container mb-4">
  <h1 class="mb-5">Modifier mes informations</h1>
  <form action="" method="post" class="form-signin w-100 m-auto novalidate">
  <div>
      <?php $error = checkEmptyFields('firstname'); ?>
      <label for="firstname" class="form-label">Prénom *</label>
      <input type="text" name="firstname" id="firstname" value="<?= getValue('firstname'); ?>" class="form-control <?= $error['class']; ?>">
      <?= $error['message']; ?>
      <?= $errorsMessage['firstname']; ?>
    </div>
    <div>
      <?php $error = checkEmptyFields('name'); ?>
      <label for="name" class="form-label">Nom *</label>
      <input type="text" name="name" id="name" value="<?= getValue('name'); ?>" class="form-control <?= $error['class']; ?>">
      <?= $error['message']; ?>
      <?= $errorsMessage['name']; ?>
    </div>
    <div>
    <?php $error = checkEmptyFields('about_me'); ?>
      <label for="about_me" class="form-label">A propos de moi *</label>
      <textarea name="about_me" id="about_me" class="form-control <?= $error['class']; ?>"><?= getValue('about_me'); ?></textarea>
      <?= $error['message']; ?>
      <?= $errorsMessage['about_me']; ?>
    </div>
    <div>
      <?php $error = checkEmptyFields('email'); ?>
      <label for="email" class="form-label">Adresse Email *</label>
      <input type="email" name="email" id="email" value="<?= getValue('email'); ?>" class="form-control <?= $error['class']; ?>">
      <?= $error['message']; ?>
      <?= $errorsMessage['email']; ?>
    </div>
    <div>
      <?php $error = checkEmptyFields('pwd'); ?>
      <label for="pwd" class="form-label">Mot de passe *</label>
      <input type="password" name="pwd" id="pwd" class="form-control <?= $error['class']; ?>">
      <p class="form-text mb-0">"La règle des mots de passes"</p>
      <?= $error['message']; ?>
      <?= $errorsMessage['pwd']; ?>
    </div>
    <div>
      <?php $error = checkEmptyFields('pwdConfirm'); ?>
      <label for="pwdConfirm" class="form-label">Confirmation Mot de passe *</label>
      <input type="password" name="pwdConfirm" id="pwdConfirm" class="form-control <?= $error['class']; ?>">
      <?= $error['message']; ?>
      <?= $errorsMessage['pwdConfirm']; ?>
    </div>
    <div class="mt-4">
      <input type="submit" class="btn btn-success" value="Sauvegarder">
    </div>
  </form>
</div>

<?php get_header('admin'); ?>