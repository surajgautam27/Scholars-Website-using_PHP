<?php 
Session_start();
unset($_SESSION['user_name']);
session_destroy();
header('location:indexx.php')
?>