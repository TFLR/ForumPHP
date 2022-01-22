<?php 
require('actions/users/securityAction.php');
require('actions/users/securityAdmin.php');
require 'actions/users/getInfoOfOneUser.php'; 
require 'actions/users/adminEditUsersInfos.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'; ?> 
<div>
<br><br>
<?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
            }
        ?>
<?php
    if(isset($checkAdmin)){
        ?>
        <form action="#" method="POST">
<div>
            <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur : <?= $username?></label>
            <input type="text" class="form-control" name="username"style='text-align: center;margin-top: 20px;'>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Email : <?= $email?></label>
            <input type="text" class="form-control" name="email"style='text-align: center;margin-top: 20px;'>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Nouveau mot de passe :</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Admin : <?= $checkAdmin?></label>
            <input type="text" class="form-control" name="admin">
        </div>
 <button type="submit" class="btn btn-primary" name="validate" style='text-align: center;margin-top: 20px;'>Modifier</button>
		</form>
        <?php
    }
    ?>

    </div>
<script src="./assets/navbar.js"></script>
</body>
</html>