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
    if(isset($FILES['pp']) AND !empty($_FILES['pp']['name'])){
        $max = 2097152;
        $validFile = array('jpg','jpeg','gif','png');
        if($FILES['pp']['size'] <= $max){
            $UploadFile = strtolower(substr(strrchr($FILES['pp']['name'],'.'),1));
            if(in_array($UploadFile, $validFile)){
                $emplacement = "../../utilisateurs/pp/".$_SESSION['id'].".".$UploadFile;
                $result = move_uploaded_file($FILES['pp']['tmp_name'],$emplacement);
                if($result){
                    $updatepp = $bdd->prepare('UPDATE users SET pp = :pp WHERE id = :id');
                    $updatepp->execute(array('pp' => $_SESSION['id'].".".$UploadFile,'id' => $_SESSION['id']));
                    // header("Refresh:0");
                }else{
                  $errorMsg = "Erreur lors de l'importation de votre image !";
                }
            }else{
            $errorMsg = "Votre photo de profil doit être du format jpg,jpeg,gif ou png !";
            }
        }else{
           $errorMsg = "Votre photo de profil ne doit pas dépasser 2Mo !";
        }
      }
}
