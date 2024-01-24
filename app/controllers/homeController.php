<?php
// global $database;
//echo 'Hello world';
require '../app/persistences/blogPostData.php' ;

//afficher les 10 derniers posts

$posts = lastBlogPosts($database) ;

/*foreach ($posts as $row):
    echo '<li>' . $row['title'] . '-' . $row['content'] '</li>' ;
endforeach;*/

var_dump($posts);

