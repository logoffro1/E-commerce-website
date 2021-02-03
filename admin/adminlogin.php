<?php
session_start();

include ("adminpartials/head.php");
if(isset($_POST['login'])){
  require("../partials/dbconnect.php");
$username = mysqli_real_escape_string($connect,$_POST['username']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$query = "SELECT * FROM admins WHERE username='$username' AND password ='$password'";
try{
  $results = $connect -> query($query);
  $final = $results -> fetch_assoc();
} catch(Exception $e){
  echo "<script> alert('Wrong username or password');
window.location.href='adminlogin.php';
</script>";
}


$_SESSION['username'] = $final['username'];
$_SESSION['password'] = $final['password'];

if($username == $final['username'] && $password == $final['password']){
  header('location: adminindex.php');
} else{
  header('location: adminlogin.php');
}
}
 ?>
<div class = "row">
  <div class = "col-sm-4">
  </div>

  <div class = "col-sm-4">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Admin Login</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" action = "adminlogin.php" method="post">
        <div class="card-body">
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="username" placeholder="Username" name = "username">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name = "password">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info" name ="login">Sign in</button>
          <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div>
        <!-- /.card-footer -->
      </form>
  </div>

  <div class = "col-sm-4">
  </div>




</div>
