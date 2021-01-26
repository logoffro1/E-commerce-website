<?php
require ("../../partials/dbconnect.php");
$product = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];

$target = "../../uploads/";
$file_name = $_FILES['picture']['name'];
$file_path = $target.basename($file_name);
$file_temp = $_FILES['picture']['tmp_name'];
$file_store = $target.$file_name;

move_uploaded_file($file_temp,$file_store);
$query = "INSERT INTO products(name,price,picture,description,category_id) VALUES('$product','$price','$file_path','$description','$category')";
$connect -> query($query);
 ?>
