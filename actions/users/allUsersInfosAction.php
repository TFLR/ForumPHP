<?php
require('actions/database.php');

$getAllUsersArticles = $bdd->prepare('SELECT * FROM users WHERE id = ?');
$getAllUsersArticles->execute(array($_SESSION['id']));

$getAllUsers = $bdd->prepare('SELECT * FROM users');
$getAllUsers->execute();