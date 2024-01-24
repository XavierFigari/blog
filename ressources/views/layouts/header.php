<?php
$metaTitle = "CV de Xavier";
$metaDescription = "Ceci est un résumé rapide de mon parcours et de mes compétences";

// Start session :
session_start();
$id_session = session_id();

// First visit :
if (!isset($_SESSION['dateFirstVisit'])) {
    $_SESSION['dateFirstVisit'] = date('Y-m-d-H-i-s');
}

// Visit counter
if (!isset($_SESSION['countViewPage'])) {
    $_SESSION['countViewPage'] = 1;
} else {
    $_SESSION['countViewPage']++;
}

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?>">
    <title>
        <?= $metaTitle ?>
    </title>
    <link rel=" stylesheet" href="style.css">
</head>

<body>
<nav class="menu">
    <h3><a href="index.php?page=cv">Mon CV</a></h3>
    <h3><a href="index.php?page=hobby">Un de mes hobbies</a></h3>
    <h3><a href="index.php?page=contact">Contact</a></h3>
</nav>

