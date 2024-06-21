<?php get_header('Mes services', 'public'); ?>

<main>
  <div id="block-services">
    <h4>mes services</h4>
  </div>
  <section class="wrapper">
    <div class="formatting-text">
      <ul>
      <?php foreach ($services as $index => $service): ?>
        <li class="services">
          <h3 class="title-service  animate__animated animate__slideInLeft"><?= htmlspecialchars($service['title']); ?></h3>
          <p><?= htmlspecialchars($service['description']); ?></p>
          <p>Durée : <?= htmlspecialchars($service['duration']); ?></p>
          <p>Tarif : <?= htmlspecialchars($service['rates']); ?></p>
          <p>Lieu : <?= htmlspecialchars($service['location']); ?></p>
        </li>
      <?php endforeach; ?>
      </ul>
    </div>
    <div class="position-button">
      <a class="button animate__animated animate__fadeInUp" href="<?= $router->generate('schedules'); ?>">me contacter</a>
    </div>
  </section>
  <div>
  </div>
</main>

<?php get_footer('public'); ?>