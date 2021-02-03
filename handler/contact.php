<?php
require ("../partials/dbconnect.php");
$email = mysqli_real_escape_string($connect,$_POST['email']);
$message = mysqli_real_escape_string($connect,$_POST['msg']);

$query = "INSERT INTO contact(email,message) VALUES('$email','$message');";
$connect -> query($query);
 ?>
