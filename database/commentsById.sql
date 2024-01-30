USE blog;
SELECT comments.comment,
       authors.name,
       authors.firstName
FROM comments
         INNER JOIN posts on comments.posts_id = posts.id
         INNER JOIN authors
                    ON comments.authors_id = authors.id
WHERE comments.posts_id = 2;