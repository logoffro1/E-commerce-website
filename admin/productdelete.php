<?php
include ("../partials/dbconnect.php");
$new_id = $_GET['del_id'];
$query = "DELETE FROM products WHERE id='$new_id'";

if(mysqli_query($connect,$query)){
header ("location: productsshow.php");
}else{
  echo "An error has occured";
}
 ?>
