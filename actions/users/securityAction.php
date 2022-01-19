<?php
if(!isset($_SESSION['auth'])){
    header('location: signup.php');
}