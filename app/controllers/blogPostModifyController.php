<?php

require '../app/persistences/blogPostData.php';
$post_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $args = array(
        "title" => FILTER_SANITIZE_SPECIAL_CHARS,
        "content" => FILTER_SANITIZE_SPECIAL_CHARS,
        "endDate" => FILTER_SANITIZE_SPECIAL_CHARS,
        "importance" => FILTER_SANITIZE_NUMBER_INT
    );
    $formData = filter_input_array(INPUT_POST, $args);
    $curdate = date("Y-m-d");
    $formData['pubDate'] = $curdate; // On met la date du jour

    blogPostUpdate($database, $formData, $post_id) ;
    $str="index.php?action=blogpost&id=" . $post_id ;
    header("Location: $str");
} else {
//    $post_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $posts = blogPostById($database, $post_id);
    $post = $posts[0];
    // Display form pre-filled with existing data
    require '../ressources/views/blogPostUpdate.tpl.php';
}
