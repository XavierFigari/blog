-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `authors` (`id`, `name`, `firstName`, `pseudo`) VALUES
(1,	'DUPONT',	'Matéo',	'Matéo'),
(2,	'MARTIN',	'Valentine',	'Valentine'),
(3,	'MACRON',	'Manuel',	'manu');

INSERT INTO `categories` (`id`, `catName`) VALUES
(1,	'loisirs'),
(2,	'philo');

-- INSERT INTO `comments` (`id`, `comment`, `posts_id`, `posts_authors_id`, `authors_id`) VALUES
INSERT INTO `comments` (`id`, `comment`, `authors_id`, `posts_id`) VALUES
(1,	'Bravo',	1,	1),
(2,	'Je suis d\'accord',	3,	2),
(4,	'Sans avis',	2,	2),
(5,	'Oui bravo',	1,	4);

INSERT INTO `posts` (`id`, `title`, `content`, `pubDate`, `endDate`, `importance`, `authors_id`) VALUES
(1,	'Le sport c\'est bien',	'J\'adore le biathlon !',	'2023-10-12',	'2024-04-03',	1,	1),
(2,	'J\'aime le couscous',	'Et après je fais du sport !',	'2023-10-12',	'2023-10-19',	2,	2),
(3,	'Le campus numérique au top !',	'Les formateurs j\'adore !',	'2024-01-02',	'2024-03-12',	NULL,	3),
(4,	'Ma grand-mère fait du sport',	'Elle a fait du biathlon dans sa jeunesse.',	'2024-01-10',	'2024-02-12',	3,	1),
(5,	'Mon chat fait du sport',	'Il fait du ski nautique',	'2021-10-10',	'2022-11-01',	NULL,	2);

INSERT INTO `posts_categories` (`post_id`, `category_id`) VALUES
(1,	1),
(1,	2),
(2,	1),
(3,	1),
(4,	2);

-- 2024-01-23 15:33:41
