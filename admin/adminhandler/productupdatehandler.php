<?php
include ("../../partials/dbconnect.php");

if(isset($_POST['update']))
{
  $new_id = $_POST['form_id'];
  $new_name = $_POST['name'];
  $new_price = $_POST['price'];
  $new_description = $_POST['description'];
  $new_category = $_POST['category'];


  $target = "uploads/";
  $file_name = $_FILES['picture']['name'];
  $file_path = $target.basename($file_name);
  $file_temp = $_FILES['picture']['tmp_name'];
  $file_store = $target.$file_name;

  move_uploaded_file($file_temp,"../../".$file_store);

  $query = "UPDATE products SET name='$new_name',price='$new_price',description='$new_description',category_id='$new_category',picture='$file_path' where id='$new_id'";

  if(mysqli_query($connect,$query)){
    header('location: ../productsshow.php');
  } else{
    header('location: ../adminindex.php');
  }
}
 ?>
