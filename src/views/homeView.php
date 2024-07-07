<?php get_header('Accueil', 'public'); ?>
<main>
  <section>
    <div class="img-rhune" id="title-cover">
      <img src="./assets/images/vue_sur_la_rhune.jpg" alt="Vue sur la Rhune">
      <div class="text-over-image">
        <h1>Alexandra Bily Conseil</h1>
        <h2>Consultante RH</h2>
        <h2>Bilan de compétences & Formation professionnelle</h2>
        <a class="button animate__animated animate__fadeInUp" href="<?= $router->generate('schedules'); ?>">me contacter</a>
        <a class="button animate__animated animate__fadeInUp" href="<?= $router->generate('about_me'); ?>">qui suis-je ?</a>
      </div>
    </div>
  </section>
  <section class="wrapper">
    <h3 id="title-support">accompagnement</h3>
    <div class="background-text">
      <div class="formatting-text">
        <p class="bold-italic">Mon accompagnement se fonde sur 3 axes principaux : </p>
        <p>Grâce au bilan de compétences, nous explorerons ensembles, vos aspirations, vos motivations et vos compétences pour élaborer un plan stratégique aligné sur vos objectifs professionnels.</p>
        <p>Avec la formation professionnelle, je propose des programmes sur mesure visant à renforcer vos compétences et à favoriser votre croissance dans un monde professionnel en constante évolution.</p>
        <p>Que vous soyez en quête de nouvelles opportunités d'emplois, de stages enrichissants ou d'un contrat en alternance ou même une préparation à des oraux, je suis là pour vous guider dans votre démarche de recherche avec des conseils pratiques et des stratégies efficaces.</p>
        <p>Chaque individu est unique, et c'est pourquoi mon approche est entièrement personnalisée. Mon objectif est de créer un environnement bienveillant où vous pouvez explorer vos potentiels, surmonter les défis et atteindre vos objectifs professionnels. Mon accompagnement ne se limite pas à une simple séance. Je m'engage à suivre votre évolution, à ajuster notre plan d'action en fonction de vos besoins changeants, et à être votre partenaire de confiance tout au long de votre parcours.</p>
      </div>
    </div>
      <div class="button-center">
        <a class="button animate__animated animate__fadeInUp" href="<?= $router->generate('services'); ?>">mes services</a>
        <a class="button animate__animated animate__fadeInUp" href="<?= $router->generate('schedules'); ?>">me contacter</a>
      </div>
  </section>
  <section class="wrapper">
    <div class="formatting-text block-color">
      <h3 class="bold-italic accessibility">Accessibilité aux personnes handicapées</h3>
      <p>Toute personne doit pouvoir être en mesure d'effectuer un bilan de compétences quelle que soit sa situation. Il nous appartient d’envisager ensemble les mesures nécessaires en lien avec les organismes spécialisés (l’Agefiph et Cap Emploi) pour aménager au mieux la démarche. . Pour toute demande, merci de contacter notre référente handicap au 05 59 74 84 10 ou par courriel : contact@interstices-sud-aquitaine.fr</p>
    </div>
  </section>
</main>

<?php get_footer(); ?>