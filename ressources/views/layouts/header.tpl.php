<?php
$metaTitle = "Mon blog";
$metaDescription = "Articles divers sur le sport";

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?>">
    <title>
        <?= $metaTitle ?>
    </title>
    <link rel=" stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>Le Blog de moi</h1>
    <div class="nav">
        <a href="/">Home</a>
        <a href="/?action=blogPostCreate">Créer un article</a>
    </div>
</header>