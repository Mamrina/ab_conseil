<?php get_header('Editer un article', 'admin'); ?>

<div class="container mb-4">
    <form action="" method="post" class="form-signin w-100 m-auto" enctype="multipart/form-data">
        <h1 class="mb-5 fw-normal text-center">Ajouter un article</h1>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('title'); ?>
            <input type="text" name="title" value="<?= getValue('title'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="title">Titre de l'article *</label>
            <?= $error['message']; ?>
        </div>
        <div class="form-floating mb-3">
            <?php $error = checkEmptyFields('content'); ?>
            <input type="text" name="content" value="<?= getValue('content'); ?>" class="form-control <?= $error['class']; ?>" placeholder="#">
            <label for="text">Contenu *</label>
            <?= $error['message']; ?>
        </div>
        <div>
            <button class="btn btn-success w-100 py-2 mt-3" type="submit">Soumettre</button>
        </div>
    </form>
</div>

<?php get_footer('admin'); ?>