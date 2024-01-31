<?php

function lastBlogPosts (PDO $pdo, $number) {
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
    return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
}
function blogPostById (PDO $pdo, $id) {
    $query = "SELECT 
                    posts.id,
                    posts.title,
                    posts.content,
                    posts.pubDate,
                    posts.endDate,
                    authors.name,
                    authors.firstName,
                    DATE_FORMAT(pubDate, '%d/%m/%Y') as date
              FROM posts
                INNER JOIN authors
                    ON posts.authors_id = authors.id
              WHERE posts.id = " . $id ;
    return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

    // MIEUX :
//    $query = "SELECT title, content, name FROM posts JOIN authors ON posts.authors_id = authors.id AND posts.id = ?";
//    PDOStatement: $stmt = $pdo->prepare($query);
//    $stmt -> execute([$idArticle]);
//    $result = $stmt->fetch(PDO::FETCH_ASSOC);

//    // return post with author
//   return $result;

}
function commentsByBlogPost (PDO $pdo, $id) {
    $query = "  SELECT comments.comment,
                    authors.name,
                    authors.firstName
                FROM comments
                    INNER JOIN posts ON comments.posts_id = posts.id
                    INNER JOIN authors ON comments.authors_id = authors.id
                WHERE comments.posts_id = " . $id ;
    return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
}

function blogPostCreate (PDO $pdo, $data) {
    $queryCreate = "INSERT INTO posts ( title, content, pubDate, endDate, importance, authors_id ) 
                    VALUES (?, ?, ?, ?, ?, (SELECT id FROM authors WHERE name = ?) )";
    $statement = $pdo -> prepare($queryCreate);
    $statement -> execute([$data['title'], $data['content'], $data['pubDate'], $data['endDate'], $data['importance'], "Anonyme"]);
}

function blogPostUpdate(PDO $pdo, $formData, $post_id) {
    $queryUpdate = "UPDATE posts 
    SET title = ?, 
        content = ?, 
        pubDate = ?, 
        endDate = ?, 
        importance = ? 
    WHERE
        id = ? ;  ";

    $statement = $pdo -> prepare($queryUpdate);
    $statement -> execute([ $formData['title'],   $formData['content'],    $formData['pubDate'],
                            $formData['endDate'], $formData['importance'], $post_id]);

}