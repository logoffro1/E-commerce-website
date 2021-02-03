<?php
include ("../partials/dbconnect.php");
include ("../DAO/database.php");

$email = mysqli_real_escape_string($connect,$_POST['email']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$password2 = $_POST['password2'];

if($password == $password2){
  if(strlen($password)>=6){

    if(!checkIfUserExists($email)){
      $passwordHash = password_hash($password,PASSWORD_DEFAULT);

          $query = "INSERT INTO customers(username,password) VALUES('$email','$passwordHash')";
          $connect->query($query);
          echo "<script> alert('New customer registered!');
        window.location.href='../customerforms.php';
          </script>";
    } else{
      echo "<script> alert('Account already exists!');
    window.location.href='../customerforms.php';
      </script>";
    }

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
