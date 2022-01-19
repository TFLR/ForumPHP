<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])) {
        
        $postTitle = htmlspecialchars($_POST['title']);
        $postDescription = nl2br(htmlspecialchars($_POST['description']));
        $postContent = nl2br(htmlspecialchars($_POST['content']));
        $postDate = date('H:m:s d/m/Y');
        $postAuthorId = $_SESSION['id'];
        $postAuthorUsername = $_SESSION['username'];

        $insertArticles = $bdd->prepare('INSERT INTO articles(title,description,content,date,author_id,author_username)VALUES(?,?,?,?,?,?)');
        $insertArticles->execute(array($postTitle,$postDescription,$postContent,$postDate,$postAuthorId,$postAuthorUsername));

        $successMsg = "Vôtre article à bien été publié sur le forum";
    }else{
        $errorMsg = "Veuillez compléter tous les champs !";
    }
}