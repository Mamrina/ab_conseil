<?php get_header('Actualités', 'public'); ?>

<main>
  <div id="block-news">
    <h3>Actualités</h3>
  </div>
  <section class="wrapper">
    <a class="home-return" href="<?= $router->generate('home'); ?>">Retour à l'accueil</a>
    <div class="background-text">
      <div class="search-bar">
        <input type="text" id="search" placeholder="Rechercher un article…">
        <i class="fas fa-search"></i>
      </div>
      <div class="formatting-text">
      <ul id="news-list">
        <?php foreach ($news as $index => $new): ?>
          <li class="news <?= $index >= 2 ? 'hidden' : '' ?>">
            <p class="title-new animate__animated animate__slideInLeft"><?= htmlentities($new['title']); ?></p>
            <p><?= htmlentities($new['content']); ?></p>
            <p class="mini">
            Posté le <?= date('d/m/Y H:i', strtotime($new['created_at'])); ?>,
            modifié le <?= date('d/m/Y H:i', strtotime($new['modified_at'])); ?>
            </p>
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="see-more-center">
      <?php if (count($news) > 2): ?>
        <button id="show-more" class="button">Voir plus d'articles</button>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer('public'); ?>
