<?php

require '../app/persistences/blogPostData.php';

$categoryName = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

$posts = blogPostsByCategory($database, $categoryName);

// Les afficher

require '../ressources/views/category.tpl.php';

