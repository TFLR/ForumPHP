<?php
require('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    
    $idOfPost = $_GET['id'];
    $checkIfPostExists = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $checkIfPostExists->execute(array($idOfPost));

    if($checkIfPostExists->rowCount() > 0){

        $postsInfos = $checkIfPostExists->fetch();
        if($postsInfos['author_id'] == $_SESSION['id']){

            $Post_title = $postsInfos['title'];
            $Post_description = $postsInfos['description'];
            $Post_content = $postsInfos['content'];
            $Post_date = $postsInfos['date'];

            $Post_description = str_replace("<br />",'',$Post_description);
            $Post_content = str_replace("<br />",'', $Post_content);

        }else{
            $errorMsg = "Vous n'avez pas les droits pour modifier cet article !";
        }
    }else{
        $errorMsg = "L'article n'a pas été trouvé !";
    }
}else{
    $errorMsg = "L'article n'a pas été trouvé !";
}