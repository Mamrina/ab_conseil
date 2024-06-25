<?php get_header('Actualités', 'public'); ?>

<main>
  <div id="block-news">
    <h3>Actualités</h3>
  </div>
  <section class="wrapper">
    <a class="home-return" href="<?= $router->generate('home'); ?>">Retour à l'accueil</a>
    <div class="background-text">
      <div class="formatting-text">
      <ul>
        <?php foreach ($news as $index => $new): ?>
          <li class="news <?= $index >= 2 ? 'hidden' : '' ?>">
            <p class="title-new animate__animated animate__slideInLeft"><?= htmlspecialchars($new['title']); ?></p>
            <p><?= htmlspecialchars($new['content']); ?></p>
            <p class="mini">
              Posté le <?= (new DateTime($new['created_at']))->format('d/m/Y H:i'); ?>,
              modifié le <?= (new DateTime($new['modified_at']))->format('d/m/Y H:i'); ?>
            </p>
          </li>
        <?php endforeach; ?>
        </ul>
        <?php if (count($news) > 2): ?>
          <button id="show-more" class="button">Voir plus d'articles</button>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>
