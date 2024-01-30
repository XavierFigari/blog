<?php

require '../app/persistences/blogPostData.php';

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

    $formData['name'] = "Anonyme";

    blogPostCreate($database, $formData);

    echo "Done";
} else {
    require '../ressources/views/layouts/blogPostCreate.tpl.php';
}
