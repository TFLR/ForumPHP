<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['title'])AND !empty($_POST['description']) AND !empty($_POST['content'])){

               //Les données à faire passer dans la requête
               $newPostTitle = htmlspecialchars($_POST['title']);
               $newPostDescription = nl2br(htmlspecialchars($_POST['description']));
               $newPostContent = nl2br(htmlspecialchars($_POST['content']));
               
               //Modifier les informations de la question qui possède l'id rentré en paramètre dans l'URL
               $editQuestionOnWebsite = $bdd->prepare('UPDATE articles SET title = ?, description = ?, content = ? WHERE id = ?');
               $editQuestionOnWebsite->execute(array($newPostTitle, $newPostDescription, $newPostContent,  $idOfPost));
       
               //Redirection vers la page d'affichage des questions de l'utilisateur
               header('Location: authorposts.php');
    }else{
        $errorMsg = "Veuillez complétez tous les champs !";
    }
}