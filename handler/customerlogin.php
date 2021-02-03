<?php
session_start();

if(isset($_POST['login'])){
  require("../partials/dbconnect.php");

$username = mysqli_real_escape_string($connect,$_POST['email']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$passwordHash = password_hash($password,PASSWORD_DEFAULT);
$query = "SELECT * FROM customers WHERE username='$username'";
$results = $connect -> query($query);
$final = $results -> fetch_assoc();

if($final != null){
  $_SESSION['email'] = $final['username'];
  $_SESSION['password'] = $final['password'];
  $_SESSION['customerid'] = $final['id'];
}
  if($username == $final['username'] && password_verify($password,$final['password'])){
    header('location: ../index.php');
  } else{
    echo "<script> alert('Username or Password invalid!');
  window.location.href='../customerforms.php';
    </script>";
  }
}


 ?>
