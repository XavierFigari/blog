<?php

require '../app/persistences/blogPostData.php';
$postId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

blogPostDelete($database, $postId);

header("Location: /");
