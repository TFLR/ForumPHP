<?php

require('actions/database.php');

$getAllAuthorArticles = $bdd->prepare('SELECT title,description,content,date FROM articles WHERE author_id = ?');
$getAllAuthorArticles->execute(array($_SESSION['id']));