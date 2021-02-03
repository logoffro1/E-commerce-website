<?php
require ("../../partials/dbconnect.php");
include ("../../DAO/database.php");
$category = mysqli_real_escape_string($connect,$_POST['name']);
  $query = "INSERT INTO categories(name) VALUES('$category');";
  $connect -> query($query);
  header("location: ../productsshow.php");
 ?>
