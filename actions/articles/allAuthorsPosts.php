<?php
require('actions/database.php');

$getAllAuthorsArticles = $bdd->prepare('SELECT id,title,description,content,date FROM articles');
$getAllAuthorsArticles->execute();