<?php
session_start();
include ("../partials/dbconnect.php");

$username = mysqli_real_escape_string($connect,$_SESSION['email']);
$oldPassword = mysqli_real_escape_string($connect,$_POST['passwordold']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$password2 = mysqli_real_escape_string($connect,$_POST['password2']);

$passwordHashed = password_hash($password,PASSWORD_DEFAULT);
if(password_verify($oldPassword,$_SESSION['password'])){
  if($password == $password2){
    if(strlen($password)>=6){

        $passwordHash = password_hash($password,PASSWORD_DEFAULT);

          $query = "UPDATE customers SET password='$passwordHashed' where username='$username'";
          try{
                $connect->query($query);
          } catch(Exception $e){
            header("location: ../index.php");
          }

            $_SESSION['password'] = $passwordHashed;
            echo "<script> alert('Password changed!');
          window.location.href='../index.php';
            </script>";

    } else{
      echo "<script> alert('Password is too short!');
    window.location.href='../passwordresetform.php';
      </script>";
    }
  }else{
    echo "<script> alert('Password does not match!');
  window.location.href='../passwordresetform.php';
    </script>";
  }
}else{
  echo "<script> alert('Old password does not match!');
window.location.href='../passwordresetform.php';
  </script>";
}

 ?>
