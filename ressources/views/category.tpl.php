<?php
require '../ressources/views/layouts/header.tpl.php';
?>

<h1>Articles de la catégorie <?= $categoryName ?></h1>

<?php if (empty($posts)): ?>
    <p>Aucun article de cette catégorie !</p>
<?php else : ?>
    <?php foreach ($posts as $currentPost): ?>
        <h2><?= $currentPost["title"] ?></h2>
        <p class="postAuthor"> <?= "par " . $currentPost["firstName"] . " " . $currentPost["name"] ?></p>
        <p class="postContent"> <?= $currentPost["content"] ?></p>
        <p class="postFooter"> <?= "Publié le : " . $currentPost["pubDate"] ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>

