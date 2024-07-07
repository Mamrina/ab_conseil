<?php get_header('Se connecter', 'login'); ?>

<div class="d-flex align-items-center mt-5">
  <p>En cours de développement</p>
  <form action="" method="post" class="form-signin m-auto">
    <h3 class="mb-3 text-center">Mot de passe oublié</h3>
    <div class="form-floating mb-3">
      <?php $error = checkEmptyFields('email'); ?>
      <input type="email" name="email" class="form-control <?= $error['class']; ?>" placeholder="Email">
      <label for="floatingInput">Email actuel</label>
      <?= $error['message']; ?>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Envoyer</button>
  </form>
</div>

<?php get_footer('login'); ?>