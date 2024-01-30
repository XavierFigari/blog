<?php

require '../app/persistences/blogPostData.php';
// get the id from URL
$articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$post = blogPostById($database, $articleId);
$comments = commentsByBlogPost($database, $articleId);

// Les afficher

/*echo "Post :<br>";
var_dump($post); echo "<br>";
echo "comments :<br> " ;
var_dump($comments);echo "<br>";*/

require '../ressources/views/blogPost.tpl.php';

