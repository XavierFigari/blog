<?php

// Données de connexion à la base SQL
$host = 'localhost';
$dbUser = 'xavier';
$dbPassword = 'campus';
$dbName = 'blog';

$database = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $dbUser, $dbPassword);

