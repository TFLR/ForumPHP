<?php
    require('actions/users/securityAction.php');
    require('actions/articles/onePostInfosAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/navbar.css">
    <link rel="stylesheet" href="./assets/view.css">
    <title>Forum</title>
</head>
<body>
<?php include 'includes/navbar.php'; ?>
<?php
if(isset($Post_content)){
    ?>
            
<div class = 'div'>
  <h1 class ='title' style='text-align: center;margin-top: 20px;'><?= $Post_title?></h1>
		<p class = 'text' style='text-align: center;margin-top: 20px;'><?= $Post_description?></p>
		  <p class = 'text' style='text-align: center;margin-top: 20px;'><?= $Post_content?></p>
		<p class = 'text'><a class = 'b' href="index.php">&lt; back</a></p>
</div>
<?php
      }
      ?>
<script src="./assets/navbar.js"></script>
</body>
</html>