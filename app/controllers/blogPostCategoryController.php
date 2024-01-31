<?php

require '../app/persistences/blogPostData.php';
// get the id from URL
$postId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$post = blogPostById($database, $postId);
$comments = commentsByBlogPost($database, $postId);

// Les afficher

/*echo "Post :<br>";
var_dump($post); echo "<br>";
echo "comments :<br> " ;
var_dump($comments);echo "<br>";*/

require '../ressources/views/blogPost.tpl.php';

