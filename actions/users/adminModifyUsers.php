<?php

require('actions/database.php');
if(isset($_POST['validate'])){
    $newEmail = htmlspecialchars($_POST['email']);
    $newUsername = htmlspecialchars($_POST['username']);
    $checkIfUsernameAlreadyExists = $bdd->prepare('SELECT username FROM users WHERE username = ?');
    $checkIfUsernameAlreadyExists->execute(array($newUsername));
    $checkIfEmailAlreadyExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
    $checkIfEmailAlreadyExists->execute(array($newEmail));

    
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
    if(!empty($_POST['email'])){
        if($checkIfEmailAlreadyExists->rowCount() == 0){
            echo "";
        $editEmail = $bdd->prepare('UPDATE users SET email = ? WHERE id = ?');
        $editEmail->execute(array($newEmail,$_SESSION['id']));

        header("Refresh:0");
        }else{
            echo "";
            $errorMsg = "L'email est déjà utilisée !";
        }
        }
    
    if(!empty($_POST['username'])){
        if($checkIfUsernameAlreadyExists->rowCount() == 0){
            echo "";
        $editUsername = $bdd->prepare('UPDATE users SET username = ? WHERE id = ?');
        $editUsername->execute(array($newUsername,$_SESSION['id']));
        header("Refresh:0");
        }else{
            echo "";
            $errorMsg = "Le nom d'utilisateur est déjà utilisé !";
        }
    }
}
