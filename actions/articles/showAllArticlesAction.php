<?php
require('actions/database.php');

$getAllAuthorArticles = $bdd->query('SELECT * FROM articles ORDER BY id DESC');

if(isset($_GET['search']) AND !empty($_GET['search'])){
    $usersSearch = $_GET['search'];

    $getAllAuthorArticles = $bdd->query('SELECT * FROM articles WHERE title LIKE "%'.$usersSearch.'%" ORDER BY id DESC');

}