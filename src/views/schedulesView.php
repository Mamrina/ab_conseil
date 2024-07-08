<?php get_header('Contact', 'public'); ?>

<main>
  <div id="block-schedules">
    <h4>contact</h4>
  </div>
  <section class="wrapper">
    <a class="home-return" href="<?= $router->generate('home'); ?>">Retour à l'accueil</a>
    <div class="background-text">
      <div id="strong">
      <p>Pour toute demande de renseignement, contacter moi au <strong>06 27 07 05 05</strong> ou par email <strong>
        <a href="mailto:marina.coldeboeuf@gmail.com">abily@alexandrabilyconseil.com</a></strong>
      </p>
      </div>
      <div class="schedule-location">
        <div class="formatting-text">
          <p class="bold-italic animate__animated animate__slideInLeft">Horaires d'ouverture</p>
          <ul>
            <?php foreach ($schedules as $schedule): ?>
              <li>
                <p><?= htmlentities($schedule['week_day']) . ' : 
                ' . htmlentities($schedule['morning_opening']) . ' - 
                ' . htmlentities($schedule['morning_close']); ?> et 
                <?= htmlentities($schedule['opening_afternoon']) . ' - 
                ' . htmlentities($schedule['closing_afternoon']); ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="formatting-text">
          <p class="bold-italic animate__animated animate__slideInRight">Localisation</p>
          <p><i class="fas fa-map-marker-alt"></i> Tarnos</p>
          <address>
          Pôle de Services Jean Bertin<br>
          3 rue Hélène Boucher<br>
          40220 TARNOS
          </address>
        </div>
      </div>
      <div id="mapid" style="height: 300px;"></div>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>