<?php 
require('actions/users/securityAction.php');
require('actions/articles/allAuthorPosts.php');
require('actions/users/allUsersInfosAction.php');
require('actions/users/modifyPasswordAction.php');
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
    <title>Forum</title>
</head>
<body>
<?php include 'includes/navbar.php'; ?> 
    <?php
if($users = $getAllUsersArticles->fetch()){
  ?>
<div class="container3">

  <div class="card">
    <div class="img">
      <img src="https://placeimg.com/250/250/people">
    </div>
    <div class="info">
    <form action="#" method="POST">
    <span class="name"><?=$users['username'];?></span>
    <div>
    <label for="exampleInputEmail1" class="form-label">Nouveau email :</label>
    <textarea type="text" class="form-control" name="content" style='text-align: center;margin-top: 20px;'><?=$users['email'];?></textarea>
    </div>
      <span class="job"><?=$users['email'];?></span>
<div>
            <label for="exampleInputEmail1" class="form-label">Nouveau mot de passe :</label>
            <input type="text" class="form-control" name="password">
        </div>
        </div>
      <button name="validate">Change</button>
  </div>
</form>
</div>
<?php
}
?>

<p class="title">Articles postés :</p>
<?php
        while($articles = $getAllAuthorArticles->fetch()){

            ?>
  <section id="postIndex" class="widthWrapper">

    <article>
    <div class="container">  
      <a href="view.php?id=<?= $articles['id']; ?>">
        <h2><?=$articles['title'];?></h2>
        <p><?=$articles['description'];?></p>
        <br> </br>
        <span class="subtle"><?=$articles['date'];?></span>
        <a href="actions/articles/deletePostAction.php?id=<?= $articles['id']; ?>" class = "button">Delete</a>
        <a href="editposts.php?id=<?= $articles['id']; ?>" class = "button">Modify</a>
        <?php
    }
    ?>
      </a>
      </div>
    </article>
  </section>

  <style>a.button {
  display:inline-block;
  height: 20px;
  width: 100px;
}

.container{  
text-align: center;  
}  </style>

<script src="./assets/navbar.js"></script>
</body>
</html>
