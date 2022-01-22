<?php 
require('actions/users/securityAction.php');
require('actions/users/securityAdmin.php');
require('actions/users/allUsersInfosAction.php');
require('actions/users/adminModifyUsers.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/navbar.css">
    <link rel="stylesheet" href="./assets/card.css">
    <link rel="stylesheet" href="./assets/profil.css">
    <title>Document</title>
</head>
<body>
<?php include 'includes/navbar.php'; ?> 
<?php
if(isset($errorMsg)){echo $errorMsg.'</p>';} 
while($users = $getAllUsers->fetch()){
    ?> 
<div class="container3">
<form action="#" method="POST" enctype="multipart/form-data">
  <div class="card">
    <form method="POST" action="" enctype="multipart/form-data" style = "height: 50px">
      <label class = "label" for="profileImage"> 
        <a style="cursor: pointer;"><em class="fa fa-upload"></em><img src='utilisateurs/pp/bokuto.jpg' width='200' height='200';></a></label> 
        <input type="file" name="pp" id="profileImage" style="display: none;"/>
      </form>
        <!-- <input type="file" name="avatar" />
        <input type="submit" name="mettre a jour" /> -->

      <div class="info" style ="height: 300px;">
    <?php
    if($users['admin'] == 1){
echo "admin:yes";
      }else{
        echo "admin:no";  
      }?>
    <span class="name"><?=$users['username'];?></span>
    <br></br>
    <span class="job"><?=$users['email'];?></span>
    <div>
    <label for="exampleInputEmail1" class="form-label">Nouveau nom d'utilisateur :</label>
    <input type="text" class="form-control" name="username">
    </div>
    <div>
    <label for="exampleInputEmail1" class="form-label">Nouveau email :</label>
    <input type="email" class="form-control" name="email">
    </div>
<div>
            <label for="exampleInputEmail1" class="form-label">Nouveau mot de passe :</label>
            <input type="password" class="form-control" name="password">
        </div>
        </div>
      <button name="validate">Change</button>
  </div>
</form>
</div>
<?php
}
?>

<style>a.button {
  display:inline-block;
  height: 20px;
  width: 100px;
}

.container{  
text-align: center;  
}  

img{
  position: relative;
  left: 100px;
}

</style>
<script src="./assets/navbar.js"></script>
</body>
</html>