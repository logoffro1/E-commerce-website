<?php
require ("../partials/dbconnect.php");
$email = $_POST['email'];
$message = $_POST['msg'];

$query = "INSERT INTO contact(email,message) VALUES('$email','$message');";
$connect -> query($query);
 ?>
