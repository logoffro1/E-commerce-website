<?php
session_start();

if(empty($_SESSION['username'] && $_SESSION['password'])){
  header('location: adminlogin.php');
}


 ?>
