<?php

require '../app/persistences/blogPostData.php' ;

// Récupérer les 10 derniers posts
$articlesToDisplay = 3;
$posts = lastBlogPosts($database, $articlesToDisplay) ;

// Les afficher
// var_dump($posts);
require '../ressources/views/home.tpl.php' ;
