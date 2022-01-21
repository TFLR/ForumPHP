<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../signup.php');
}
require("../database.php");
if(isset($_GET['id']) && !empty($_GET['id'])){
    $idArticle = $_GET['id'];

    $checkArticleExist = $bdd->prepare('SELECT author_id FROM articles WHERE id = ?');
    $checkArticleExist->execute(array($idArticle));

    if($checkArticleExist->rowCount() > 0){
        $usersInfos = $checkArticleExist->fetch();
        if($usersInfos['author_id']== $_SESSION['id']){
            $deleteArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
            $deleteArticle->execute(array($idArticle));
            header('location: ../../authorposts.php');
        }else{
            echo "Aucun article n'a été trouvée";
        }
    }else{
        echo "Aucun article n'a été trouvée";
    }
}else{
    echo "Aucun article n'a été trouvée";
}