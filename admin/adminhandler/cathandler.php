<?php
require ("../../partials/dbconnect.php");
$category = $_POST['name'];

$query = "INSERT INTO categories(name) VALUES('$category');";
$connect -> query($query);
 ?>
