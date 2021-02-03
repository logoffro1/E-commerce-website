<?php


function checkIfUserExists($username){
  //I don't know why this needs to be here, but if I move it everything breaks
  include ("../partials/dbconnect.php");
$username = mysqli_real_escape_string($connect,$username);
    $queryCustomers = "SELECT * FROM customers WHERE username ='$username'";
    $queryAdmins = "SELECT * FROM admins WHERE username ='$username'";

    $resultsCustomers = $connect -> query($queryCustomers);
    $finalCustomers = $resultsCustomers -> fetch_assoc();

    $resultsAdmins = $connect -> query($queryAdmins);
    $finalAdmins = $resultsAdmins -> fetch_assoc();

  return !is_null($finalCustomers) || !is_null($finalAdmins);
}
 ?>
