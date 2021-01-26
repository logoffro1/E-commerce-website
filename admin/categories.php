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
            <h1 class="m-0 text-dark">Dashboard</h1>
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
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">


      <!-- form start -->
      <form role="form" action="adminhandler/cathandler.php" method="post">
        <div class="card-body">
          <div class="form-group">
            <h1> Categories </h1>
            <label for="category">Categories</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category" name = "name">
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    </div>
    <div class = "col-sm-3">
    </div>
    </section>
    <!-- /.content -->
  </div>
  <?php include ("adminpartials/footer.php");  ?>
</body>
</html>
