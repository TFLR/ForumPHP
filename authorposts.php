<?php 
require('actions/users/securityAction.php');
require('actions/articles/allAuthorPosts.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/navbar.css">
    <link rel="stylesheet" href="./assets/card.css">
    <title>Forum</title>
</head>
<body>
<?php include 'includes/navbar.php'; ?> 

    <?php
        while($articles = $getAllAuthorArticles->fetch()){

            ?>
            <div class="container1">
  
  <div class="card-media">
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top">
      <span class="card-media-body-heading"><?=$articles['title'];?></span>
      </div>
      <span class="card-media-body-heading1"><?=$articles['description'];?></span>
      <br> </br>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
      <span class="subtle"><?=$articles['date'];?></span>
        <a href="editposts.php?id=<?= $articles['id']; ?>" class="card-media-body-supporting-bottom-text card-media-link u-float-right">Modify</a>
        <a href="view/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">View</a>
      </div>
    </div>
  </div>
</div>
            <?php

        }
    ?>

<script src="./assets/navbar.js"></script>
</body>
</html>