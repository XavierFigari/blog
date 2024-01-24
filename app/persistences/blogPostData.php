<?php

function lastBlogPosts ($db) {
    $query = file_get_contents('../database/lastBlogPosts.sql');
    // $handle = $db->prepare($query);
    $statement = $db->query($query);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    // $lastBlogs = array('','','','','','','','','',) ;
    // $arr[] = array();
    // return $lastBlogs;
}