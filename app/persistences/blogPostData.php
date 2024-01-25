<?php

function lastBlogPosts (PDO $db, $number) {
    $query = "SELECT posts.title,
                    posts.content,
                    posts.pubDate,
                    authors.name,
                    authors.firstName,
                    DATE_FORMAT(pubDate, '%d/%m/%Y') as date
              FROM posts
                INNER JOIN authors
                    ON posts.authors_id = authors.id
              ORDER BY pubDate DESC LIMIT " . $number ;

//    $query = "SELECT * FROM posts ORDER BY pubDate DESC LIMIT " . $number;
    //$statement = ;
    return $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
}