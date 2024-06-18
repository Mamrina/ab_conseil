<?php get_header('Se connecter', 'login'); ?>
<?= displayAlert(); ?>
<div class='d-flex align-items-center'>
  <form action="" method="POST" class="form-signin m-auto">
    <img src="" alt="">
    <h1 class="mb-3 text-center">Se connecter</h1>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('email'); ?>
      <input type="email" name="email" class="form-control <?= $error['class']; ?>" placeholder="Email">
      <label for="floatingInput">Email</label>
      <?= $error['message']; ?>
    </div>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('pwd'); ?>
      <input type="password" name="pwd" class="form-control <?= $error['class']; ?>" placeholder="Mot de passe">
      <label for="floatingInput">Mot de passe</label>
      <?= $error['message']; ?>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
    <p class="mt-4 mb-3 text-body-secondary text-center">
      <a href="<?= $router->generate('lostPassword'); ?>">Mot de passe oublié ?</a>
    </p>
  </form>
</div>

<?php get_footer('login'); ?>