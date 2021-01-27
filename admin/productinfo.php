<!DOCTYPE html>
<html>
<?php
include ("adminpartials/session.php");
 include ("adminpartials/head.php");
  ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php
  include ("adminpartials/navbar.php");
  include ("adminpartials/aside.php");
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-9">
<?php
include ("../partials/dbconnect.php");
$id = $_GET['php_pro'];
$query = "SELECT * FROM products WHERE id ='$id'";
$results = $connect -> query($query);

$final = $results->fetch_assoc();
  ?>

   <h3> Name : <?php echo htmlentities($final['name']) ?> </h3> <hr> <br>
    <h3> Price : <?php echo htmlentities($final['price']) ?> </h3> <hr> <br>
      <h3> Description : <?php echo htmlentities($final['description']) ?> </h3> <hr> <br>
<img src ="../<?php echo $final['picture']?>" alt = "NO FILE" style = "height:300px;width:300px">
        </div>


    <div class = "col-sm-3">
    </div>
    </section>
    <!-- /.content -->
  </div>
  <?php include ("adminpartials/footer.php");  ?>
</body>
</html>
