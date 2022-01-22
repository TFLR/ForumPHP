<?php 
require('actions/users/securityAction.php');
require('actions/users/securityAdmin.php');
require('actions/users/allUsersInfosAction.php');
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
<form action="#" method="POST">
    <div class = "contains">
    <?php
    if($users['admin'] == 2){
echo "admin:yes \n";
      }else{
        echo "admin:no \n"; 
      }?>
        <br></br>
    <span class="name">Nom d'utilisateur : <?=$users['username'];?></span>
    <br></br>
    <span class="name">Email : <?=$users['email'];?></span>
    <br></br>
      <a name="validate" href= "modifyprofil.php?id=<?= $users['id']; ?>" class ="button">Change</a>
      
  </div>
</form>
<?php
}
?>

<style>

.contains{  
position: relative;
text-align: center;  
border: solid;
height: 200px;
width: 400px;
left:40%;
margin-top: 20px;
} 

a.button{
    font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
</style>
<script src="./assets/navbar.js"></script>
</body>
</html>