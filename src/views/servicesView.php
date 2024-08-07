<?php get_header('Mes services', 'public'); ?>

<main>
  <div id="block-services">
    <h4>mes services</h4>
  </div>
  <section class="wrapper">
    <a class="home-return" href="<?= $router->generate('home'); ?>">Retour à l'accueil</a>
    <div class="background-text">  
      <div class="formatting-text">
        <ul>
          <?php foreach ($services as $index => $service): ?>
            <li class="services">
              <h3 class="title-service  animate__animated animate__slideInLeft"><?= htmlentities($service['title']); ?></h3>
              <p><?= htmlentities($service['description']); ?></p>
              <p>Durée : <?= htmlentities($service['duration']); ?></p>
              <p>Tarif : <?= htmlentities($service['rates']); ?></p>
              <p>Lieu : <?= htmlentities($service['location']); ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
      <div class="position-button">
        <a class="button animate__animated animate__fadeInUp" href="<?= $router->generate('schedules'); ?>">me contacter</a>
      </div>
    </section>
</main>

<?php get_footer('public'); ?>