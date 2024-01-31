<?php
require '../ressources/views/layouts/header.tpl.php';
?>
<h1>Modifier l'Article n° <?=$post_id?></h1>

<form action="?action=blogPostModify&id=<?=$post_id?>" method="post">
    <div>
        <label for="title">Titre de l'article</label>
        <input  id="title" name="title" type="text" value="<?=$post["title"]?>">
    </div>
    <div>
        <label for="content">Contenu de l'article</label>
        <textarea name="content" id="content" cols="30" rows="10"><?=$post["content"]?></textarea>
    </div>
    <div>
        <label for="pubDate">Date de publication</label>
        <input id="pubDate" name="pubDate" type="date"  value="<?=$post['pubDate']?>">
    </div>
    <div>
        <label for="endDate">Fin de publication</label>
        <input id="endDate" name="endDate" type="date"  value="<?=$post['endDate']?>">
    </div>
    <div>
        <label for="importance">Importance</label>
        <input id="rating" name="importance" type="range" min="0" max="5"  value="<?=$post['importance']?> ">
    </div>
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>


<?php
require '../ressources/views/layouts/footer.tpl.php';
?>

