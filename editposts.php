<?php 
require('actions/users/securityAction.php');
require 'actions/articles/getInfosOfPostAction.php'; 
require('actions/articles/editPostsAction.php');
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
    if(isset($Post_content)){
        ?>
        <form action="#" method="POST">
<div>
            <label for="exampleInputEmail1" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="title" value = "<?= $Post_title?>">
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Description de l'article</label>
            <textarea class="form-control" name="description"><?= $Post_description?></textarea>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Contenu de l'article</label>
            <textarea type="text" class="form-control" name="content"><?= $Post_content?></textarea>
        </div>
 <button type="submit" class="btn btn-primary" name="validate">Modifier l'article</button>
		</form>
        <?php
    }
    ?>

    </div>
<script src="./assets/navbar.js"></script>
</body>
</html>