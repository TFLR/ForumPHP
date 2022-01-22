<?php
require('actions/database.php');

$getAllAuthorArticles = $bdd->prepare('SELECT id,title,description,content,date,author_username FROM articles WHERE author_id = ?');
$getAllAuthorArticles->execute(array($_SESSION['id']));