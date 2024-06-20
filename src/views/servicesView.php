<?php 
get_header('Mes services', 'public');
$services = getServices();
?>

<main>
  <div id="block-services">
    <h3>mes services</h3>
  </div>
  <section class="wrapper">
    <div class="formatting-text">
      <?php if (!empty($services)): ?>
      <ul>
        <?php foreach ($services as $service): ?>
          <li class="services">
            <p class="title-service"><?= htmlspecialchars($service['title']); ?></p>
            <p><?= htmlspecialchars($service['description']); ?></p>
            <p>Durée : <?= htmlspecialchars($service['duration']); ?></p>
            <p>Tarif : <?= htmlspecialchars($service['rates']); ?></p>
            <p>Lieu : <?= htmlspecialchars($service['location']); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
        <p>Aucun service disponible pour le moment.</p>
    <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>