<?php
require '../ressources/views/layouts/header.tpl.php';

// à virer : just pour l'autocomplétion
//$posts = lastBlogPosts($database, 5) ;
?>


<h2>Les <?=$articlesToDisplay?> derniers articles :</h2>

<?php if (empty($posts)): ?>
    <p>Bummer ! Il n'y aucun article !</p>
<?php else : ?>
    <?php foreach ($posts as $currentPost): ?>
        <h3><a href="http://blog.local/index.php?action=blogpost&id=<?=$currentPost["id"]?>"><?= $currentPost["title"] ?></a></h3>
        <p class="postAuthor"> <?= "par " . $currentPost["firstName"] . " " . $currentPost["name"] ?></p>
        <p class="postContent"> <?= $currentPost["content"] ?></p>
        <p class="postFooter"> <?= "Publié le : " . $currentPost["pubDate"] ?></p>

    <?php endforeach; ?>
<?php endif; ?>

<?php
require '../ressources/views/layouts/footer.tpl.php';
?>

