<?php

if($_SESSION['admin'] != 2){
    header('location: signup.php');
}