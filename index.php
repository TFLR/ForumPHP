<?php
    require('actions/users/securityAction.php');
    require('actions/articles/allAuthorsPosts.php');
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


<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'; ?> 
<?php
        while($articles = $getAllAuthorsArticles->fetch()){

            ?>
  <section id="postIndex" class="widthWrapper">

    <article>
    <div class="container">  
      <a href="view.php?id=<?= $articles['id']; ?>">
        <h2><?=$articles['title'];?></h2>
        <p><?=$articles['description'];?></p>
        <span class="subtle"><?=$articles['author_username'];?></span>
        <br> </br>
        <span class="subtle"><?=$articles['date'];?></span>
        <?php
      if(($_SESSION['id'] == $articles['author_id']) OR $_SESSION['admin'] == 1){
        ?>
        <a href="actions/articles/deletePostAction.php?id=<?= $articles['id']; ?>" class = "button">Delete</a>
        <a href="editposts.php?id=<?= $articles['id']; ?>" class = "button">Modify</a>
        <?php
    }
    ?>
      </a>
      </div>
    </article>
  </section>
   
            <?php

        }
    ?>

    <style>
html,
body,
div,
article,
section,
header,
h1,
h2,
h3,
h4,
h5,
h6,
ul,
li,
ol,
p,
img {
  margin: 0;
  padding: 0;
}

img {
  border: none;
}

/* Global Styles */
body {
  line-height: 1.55;
  font-size: 100%;
  font-weight: 400;
  font-family: helvetica, arial, sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Roboto Slab", serif;
  font-weight: 700;
  line-height: 1.2;
}

h2 {
  font-size: 1.55em;
  padding-bottom: 0.35em;
}

a {
  text-decoration: none;
  font-weight: bold;
  font-weight: 400;
}

.widthWrapper {
  max-width: 750px;
  margin: 0 auto;
}

/* Post Index */
#postIndex {
  margin: 3em auto;
}

article {
  margin-top: -0.063em;
}

article a {
  display: block;
  padding: 2.374em 2.5em 2.5em 2.5em;
  overflow: hidden;
  border-top: 0.063em solid #ccc;
  border-bottom: 0.063em solid #ccc;
}

article a:hover {
  background: #eee;
  border-top: #666 solid 0.25em;
  padding: 2.187em 2.5em 2.5em 2.5em;
}

.postImg {
  float: left;
  width: 25%;
  box-sizing: border-box;
  padding-right: 2em;
}

.postImg img {
  width: 100%;
}

article a h2 {
  color: #222;
  float: right;
  width: 75%;
}

article a:hover h2 {
  color: #157ebf;
}

article a p {
  color: #444;
  float: right;
  width: 75%;
}

article a:hover p {
  color: #222;
}

@media only screen and (max-width: 750px) {
  #postIndex {
    width: 100%;
  }

  article a {
    padding: 2.374em 1.5em 2.5em 1.5em;
  }

  article a:hover {
    padding: 2.187em 1.5em 2.5em 1.5em;
  }
}

@media only screen and (max-width: 481px) {
  .postImg {
    display: none;
  }

  article a p,
  article a h2 {
    width: 100%;
  }
}
a.button {
  display:inline-block;
  height: 20px;
  width: 100px;
}

.container{  
text-align: center;  
}  
</style>
<script src="./assets/navbar.js"></script>
</body>
</html>
