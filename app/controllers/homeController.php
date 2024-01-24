<?php
global $database;
echo 'Hello world';
require '../app/persistences/blogPostData.php' ;

//afficher les 10 derniers posts

$posts = lastBlogPosts($database) ;
var_dump($posts);

