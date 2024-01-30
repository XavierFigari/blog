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
        <h2><a href="http://blog.local/index.php?action=blogpost&id=<?=$currentPost["id"]?>"><?= $currentPost["title"] ?></a></h2>
        <p class="postAuthor"> <?= "par " . $currentPost["firstName"] . " " . $currentPost["name"] ?></p>
        <p class="postContent"> <?= $currentPost["content"] ?></p>
        <p class="postFooter"> <?= "Publié le : " . $currentPost["pubDate"] ?></p>

    <?php endforeach; ?>
<?php endif; ?>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>

