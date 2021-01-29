<?php
include ("../partials/dbconnect.php");

$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password == $password2){
  if(strlen($password)>=6){
    $query = "INSERT INTO customers(username,password) VALUES('$email','$password')";
    $connect->query($query);
    echo "<script> alert('New customer registered!');
  window.location.href='../customerforms.php';
    </script>";
  } else{
    echo "<script> alert('Password is too short!');
  window.location.href='../customerforms.php';
    </script>";
  }
}else{
  echo "<script> alert('Password does not match!');
window.location.href='../customerforms.php';
  </script>";
}
 ?>
