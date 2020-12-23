<?php 
 session_start();
 unset($_SESSION['username']);
 unset($_SESSION['password']);
 //unset($_SESSION['image']);
//  setcookie("username", "", time()-3600);
//  setcookie("pass", "", time()-3600);
 header("Location: login.php");
?>