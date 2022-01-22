<?php

require('actions/database.php');

if(isset($_POST['validate'])){
    if(!empty($_POST['password'])){
                   //Les données à faire passer dans la requête
                   $newPassword = md5($_POST['password']);
                   
                   //Modifier les informations de la question qui possède l'id rentré en paramètre dans l'URL
                   $editPassword = $bdd->prepare('UPDATE users SET password = ? WHERE id = ?');
                   $editPassword->execute(array($newPassword,$_SESSION['id']));
               //Redirection vers la page d'affichage des questions de l'utilisateur
               session_destroy();
               header("Refresh:0");
    }
               
    }