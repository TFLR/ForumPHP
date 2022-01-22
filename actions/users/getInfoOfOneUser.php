<?php
require('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){
    
    $idOfUser = $_GET['id'];
    $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowCount() > 0){

        $usersInfos = $checkIfUserExists->fetch();

            $username = $usersInfos['username'];
            $email =  $usersInfos['email'];
            $checkAdmin = $usersInfos['admin'];

        }else{
            $errorMsg = "L'utilisateur n'a pas été trouvé !";
        }
    }else{
        $errorMsg = "L'utilisateur n'a pas été trouvé !";
    }