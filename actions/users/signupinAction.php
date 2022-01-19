<?php

require('actions/database.php');

//vérifie si la variable validate est déclarée
if(isset($_POST['validate'])){
    // vérifie si tout les champs du formulaire ont bien été complété 
    if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password'])){
        // Données de l'utilisateur
        $user_username = htmlspecialchars($_POST['username']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = md5($_POST['password']);
        // récupère les infos de l'utilisateur
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT username,email FROM users WHERE username = ? OR email = ?');
        $checkIfUserAlreadyExists->execute(array($user_username,$user_email));
        // verifie si l'utilisateur existe déjà ou si l'email est déjà utilisée
        if($checkIfUserAlreadyExists->rowCount() == 0){
            //insérer dans la bdd les données insrites sur le formulaire
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(username,email,password)VALUES(?,?,?)');
            $insertUserOnWebsite->execute(array($user_username,$user_email,$user_password));
            //récuperer les infos de l'utilisateur
            $getInfoOfThisUserReq = $bdd->prepare('SELECT id , username FROM users WHERE username = ?');
            $getInfoOfThisUserReq->execute(array($user_username));

            $userInfos = $getInfoOfThisUserReq->fetch();
            //autentifier l'utilisateur sur le site
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['username'] = $userInfos['username'];
            // redirige l'utilisateur vers la page d'acceuil
            // header('location: index.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà ou l'email est déjà utilisée";
        }
    }else{
        $errorMsg = "Veuillez compléter tous les champs !";
    }
}


//vérifie si la variable validate est déclarée
if(isset($_POST['validate1'])){
    // vérifie si tout les champs du formulaire ont bien été complété 
    if(!empty($_POST['email1']) AND !empty($_POST['password1'])){
        // Données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email1']);
        $user_password = md5($_POST['password1']);
        //vérif si l'email existe
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $checkIfUserExists->execute(array($user_email));
        
        if($checkIfUserExists->rowCount()>0){
            //Récupere les données de l'utilisateur qui se connecte
            $userInfos = $checkIfUserExists->fetch();
            //vérifier le mot de passe.
            if($user_password == $userInfos['password']){
            //autentifier l'utilisateur sur le site
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['username'] = $userInfos['username'];
            // redirige l'utilisateur vers la page d'acceuil
            header('location: index.php');
            }else{
                $errorMsg = "Le mot de passe est incorrect !";
            }
        }else{
            $errorMsg = "L'email est incorrect !";
        }
    }else{
        $errorMsg = "Veuillez compléter tous les champs !";
    }
}