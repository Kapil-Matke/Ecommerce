<?php 
session_start();
unset($_SESSION['userId']);
unset($_SESSION['emailId']);
header("location:login.php");
die();
?>