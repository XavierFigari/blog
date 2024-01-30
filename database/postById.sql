SELECT posts.title,
                    posts.content,
                    posts.pubDate,
                    authors.name,
                    authors.firstName,
                    DATE_FORMAT(pubDate, '%d/%m/%Y') as date
              FROM posts
                INNER JOIN authors
                    ON posts.authors_id = authors.id
              WHERE posts.id = 2;

# replace 2 with the required id
