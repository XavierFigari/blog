SELECT title, content, pubDate
FROM posts
ORDER BY pubDate DESC
LIMIT 10;

SELECT posts.title,
       authors.name,
       authors.firstName,
       DATE_FORMAT(pubDate, '%d/%m/%Y') as date
FROM posts
         INNER JOIN authors
                    ON posts.authors_id = authors.id;
