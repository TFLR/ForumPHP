<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: /php_exam/signup.php');