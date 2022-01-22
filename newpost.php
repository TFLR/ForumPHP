<?php 
require ('actions/users/securityAction.php'); 
require ('actions/articles/newPostAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/navbar.php'; ?>
<br><br>
<form action="#" method="POST">
<?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>
<div>
            <label for="exampleInputEmail1" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="title" style='text-align: center;margin-top: 20px;'>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Description de l'article</label>
            <textarea class="form-control" name="description" style='text-align: center;margin-top: 20px;'></textarea>
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Contenu de l'article</label>
            <textarea type="text" class="form-control" name="content" style='text-align: center;margin-top: 20px;'></textarea>
        </div>
 <button type="submit" class="btn btn-primary" name="validate" style='text-align: center;margin-top: 20px;'>Publier l'article</button>
		</form>
    <script src="./assets/navbar.js"></script>
</body>
</html>
