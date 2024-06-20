<?php 
get_header('Contact', 'public'); 
$schedules = getSchedules()
?>

<main>
  <div id="block-schedules">
    <h3>contacte</h3>
  </div>
  <section class="wrapper">
    <div class="formatting-text">
      <p class="bold-italic">Horaires d'ouverture</p>
      <ul>
        <?php foreach ($schedules as $schedule): ?>
          <li>
            <p><?= htmlspecialchars($schedule['week_day']) . ' : ' . htmlspecialchars($schedule['morning_opening']) . ' - ' . htmlspecialchars($schedule['morning_close']); ?> et <?= htmlspecialchars($schedule['opening_afternoon']) . ' - ' . htmlspecialchars($schedule['closing_afternoon']); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
  <section class="wrapper">
    <div class="formatting-general">
      <p>Veuillez remplir ce formulaire pour toute demande d'infomation ou demande de devis.</p>
      <p>Les champs suivis d'une * sont obligatoires.</p>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>