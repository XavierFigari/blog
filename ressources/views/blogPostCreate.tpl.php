<?php
require '../ressources/views/layouts/header.tpl.php';
?>
<h1>Nouvel Article :</h1>

<form class="formulaire" action="?action=blogPostCreate" method="post">
    <div>
        <label for="title">Titre de l'article</label>
        <input id="title" name="title" type="text">
    </div>
    <div>
        <label for="content">Contenu de l'article</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="endDate">Date de fin de publication</label>
        <input id="endDate" name="endDate" type="date">
    </div>
    <div>
        <label for="importance">Importance</label>
        <input id="rating" name="importance" type="range" min="0" max="5" value="0">
    </div>
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>


<?php
require '../ressources/views/layouts/footer.tpl.php';
?>

