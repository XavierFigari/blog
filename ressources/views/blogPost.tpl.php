<?php
require '../ressources/views/layouts/header.tpl.php';
?>


<h1>Article n° <?= $postId ?> :</h1>

<?php if (empty($post)): ?>

    <p>L'article <?= $postId ?> n'existe pas !</p>
<?php else : ?>
    <h2><?= $post["title"] ?></h2>
    <p class="postAuthor"> <?= "par " . $post["firstName"] . " " . $post["name"] ?></p>
    <p class="postContent"> <?= $post["content"] ?></p>
    <p class="postFooter"> <?= "Publié le : " . $post["pubDate"] ?></p>
    <div class="postActions">
        <a class="postButton" href="?action=blogPostModify&id=<?= $postId ?>">Modifier l'article</a>
        <a class="postButton" href="?action=blogPostDelete&id=<?= $postId ?>">Supprimer l'article (irréversible !)</a>
    </div>
    <h2>Commentaires :</h2>
    <?php if (empty($comments)): ?>
        <p>Aucun commentaire.</p>
    <?php else : ?>
        <?php foreach ($comments as $currentComment): ?>
            <p class="postAuthor"><?= $currentComment["firstName"] . " " . $currentComment["name"] . " :" ?></p>
            <p><?= $currentComment["comment"] ?> </p>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>

