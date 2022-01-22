<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: /forumphp/signup.php');