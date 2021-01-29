<?php
session_start();

if(isset($_POST['login'])){
  require("../partials/dbconnect.php");
$username = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM customers WHERE username='$username' AND password ='$password'";
$results = $connect -> query($query);
$final = $results -> fetch_assoc();

$_SESSION['email'] = $final['username'];
$_SESSION['password'] = $final['password'];
$_SESSION['customerid'] = $final['id'];

if($username == $final['username'] && $password == $final['password']){
  header('location: ../cart.php');
} else{
  echo "<script> alert('Username or Password invalid!');
window.location.href='../customerforms.php';
  </script>";
}
}
 ?>
