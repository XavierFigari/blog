<?php
require '../ressources/views/layouts/header.tpl.php';
?>


<h1>Article n° <?=$articleId?> :</h1>

<?php if (empty($post)): ?>
    <p>L'article <?=$articleId?> n'existe pas !</p>
<?php else : ?>
        <h2><?= $post[0]["title"] ?></h2>
        <p class="postAuthor"> <?= "par " . $post[0]["firstName"] . " " . $post[0]["name"] ?></p>
        <p class="postContent"> <?= $post[0]["content"] ?></p>
        <p class="postFooter"> <?= "Publié le : " . $post[0]["pubDate"] ?></p>
    <h2>Commentaires :</h2>
    <?php foreach ($comments as $currentComment): ?>
        <p class="postAuthor"><?=$currentComment["firstName"] . " " . $currentComment["name"] . " :" ?></p>
        <p><?=$currentComment["comment"]?> </p>
    <?php endforeach; ?>
<?php endif; ?>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>

