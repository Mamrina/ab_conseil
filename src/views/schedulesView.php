<?php get_header('Contact', 'public'); ?>

<main>
  <div id="block-schedules">
    <h4>contact</h4>
  </div>
  <section class="wrapper">
    <a class="home-return" href="<?= $router->generate('home'); ?>">Retour à l'accueil</a>
    <div class="background-text">
      <div class="formatting-text">
        <p>Pour toute demande de renseignement, contacter moi au 06 27 07 05 05 ou abily@alexandrabilyconseil.com</p>
      </div>
      <div class="schedule-location">
        <div class="formatting-text">
          <p class="bold-italic animate__animated animate__slideInLeft">Horaires d'ouverture</p>
          <ul>
            <?php foreach ($schedules as $schedule): ?>
              <li>
                <p><?= htmlspecialchars($schedule['week_day']) . ' : 
                ' . htmlspecialchars($schedule['morning_opening']) . ' - 
                ' . htmlspecialchars($schedule['morning_close']); ?> et 
                <?= htmlspecialchars($schedule['opening_afternoon']) . ' - 
                ' . htmlspecialchars($schedule['closing_afternoon']); ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="formatting-text">
          <p class="bold-italic animate__animated animate__slideInRight">Localisation</p>
          <p>Urrugne, Hendaye, Ascain, Tarnos. <br>En distanciel, en France et à l'internationale.</p>
        </div>
      </div>
    </div> 
  </section>
</main>

<?php get_footer('public'); ?>