<?php
require('actions/database.php');

$getAllAuthorsArticles = $bdd->prepare('SELECT id,title,description,content,date,author_username,author_id FROM articles ORDER BY id DESC');
$getAllAuthorsArticles->execute();