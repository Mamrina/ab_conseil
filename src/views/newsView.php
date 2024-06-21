<?php get_header('Actualités', 'public'); ?>

<main>
  <div id="block-news">
    <h3>Actualités</h3>
  </div>
  <section class="wrapper">
    <div class="formatting-text">
      <ul>
      <?php foreach ($news as $new): ?>
        <li class="news">
          <p class="title-service  animate__animated animate__slideInLeft"><?= htmlspecialchars($new['title']); ?></p>
          <p><?= htmlspecialchars($new['content']); ?></p>
          <p class="mini">
            Posté le <?= (new DateTime($new['created_at']))->format('d/m/Y H:i'); ?>,
            modifié le <?= (new DateTime($new['modified_at']))->format('d/m/Y H:i'); ?>
          </p>
        </li>
      <?php endforeach; ?>  
      </ul>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>