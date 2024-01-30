<?php

function lastBlogPosts (PDO $db, $number) {
    $query = "SELECT 
                    posts.id,
                    posts.title,
                    posts.content,
                    posts.pubDate,
                    authors.name,
                    authors.firstName,
                    DATE_FORMAT(pubDate, '%d/%m/%Y') as date
              FROM posts
                INNER JOIN authors
                    ON posts.authors_id = authors.id
              ORDER BY pubDate DESC LIMIT " . $number ;
    return $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
}
function blogPostById (PDO $db, $id) {
    $query = "SELECT 
                    posts.id,
                    posts.title,
                    posts.content,
                    posts.pubDate,
                    authors.name,
                    authors.firstName,
                    DATE_FORMAT(pubDate, '%d/%m/%Y') as date
              FROM posts
                INNER JOIN authors
                    ON posts.authors_id = authors.id
              WHERE posts.id = " . $id ;
    return $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
}
function commentsByBlogPost (PDO $db, $id) {
    $query = "  SELECT comments.comment,
                    authors.name,
                    authors.firstName
                FROM comments
                    INNER JOIN posts ON comments.posts_id = posts.id
                    INNER JOIN authors ON comments.authors_id = authors.id
                WHERE comments.posts_id = " . $id ;
    return $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
}
