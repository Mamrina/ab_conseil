<?php get_header('Qui suis-je ?', 'public'); ?>

<main>
  <div class="img-ab" id="picture-cover">
    <img src="./images/picture_alexandra_bily.png" alt="Portrait de Alexandra Bily">
  </div>
  <section class="wrapper">
    <a class="home-return" href="<?= $router->generate('home'); ?>">Retour à l'accueil</a>
    <div class="background-text">
      <div class="formatting-text">
        <p class="bold-italic  animate__animated animate__slideInLeft">À propos…</p>
        <p><?= htmlspecialchars($aboutMeData['about_me']); ?></p>
        <p><?= htmlspecialchars($aboutMeData['about_me_2']); ?></p>
      </div>
    </div>
    <div class="button-center">
      <a class="button" href="<?= $router->generate('services'); ?>">mes services</a>
      <a class="button" href="<?= $router->generate('schedules'); ?>">me contacter</a>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>
