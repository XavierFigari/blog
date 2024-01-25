<?php
require '../ressources/views/layouts/header.tpl.php';

// à virer : just pour l'autocomplétion
//$posts = lastBlogPosts($database, 5) ;
?>


<h1>Les <?=$articlesToDisplay?> derniers articles :</h1>

<?php if (empty($posts)): ?>
    <p>Bummer ! Il n'y aucun article !</p>
<?php else : ?>
    <?php foreach ($posts as $currentPost): ?>
<!--        <br>New post :<br><br>-->
        <h2><?= $currentPost["title"] ?></h2>
        <p class="postAuthor"> <?= "par " . $currentPost["firstName"] . " " . $currentPost["name"] ?></p>
        <p class="postContent"> <?= $currentPost["content"] ?></p>
        <p class="postFooter"> <?= "Publié le : " . $currentPost["pubDate"] ?></p>

    <?php endforeach; ?>
<?php endif; ?>