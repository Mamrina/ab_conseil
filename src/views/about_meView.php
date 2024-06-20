<?php
get_header('Qui suis-je ?', 'public');
$userId = 5;
$aboutMeData = getAboutMe($userId);
?>

<main>
  <div class="img-ab" id="picture-cover">
    <img src="./images/picture_alexandra_bily.png" alt="Portrait de Alexandra Bily">
  </div>
  <section class="wrapper">
    <div class="formatting-text">
      <p class="bold-italic">À propos…</p>
      <p><?= htmlspecialchars($aboutMeData['about_me']); ?></p>
      <p><?= htmlspecialchars($aboutMeData['about_me_2']); ?></p>
    </div>
    <div class="button-center">
      <a class="button" href="<?= $router->generate('services'); ?>">mes services</a>
      <a class="button" href="<?= $router->generate('schedules'); ?>">me contacter</a>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>
