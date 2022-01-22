<?php

if($_SESSION['admin'] != 1){
    header('location: signup.php');
}