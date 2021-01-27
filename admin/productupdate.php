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
      <form role="form" action="adminhandler/productupdatehandler.php" method="post" enctype="multipart/form-data">
        <?php
$new_id=$_GET['up_id'];
include ("../partials/dbconnect.php");
$query = "SELECT * FROM products WHERE id = '$new_id'";
$results = $connect->query($query);
$final = $results->fetch_assoc();

         ?>
        <h1> Products </h1>
        <div class="card-body">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter product name" value ="<?php echo $final['name'] ?>"name = "name">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Price" name = "price">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="picture" value ="<?php echo $final['picture'] ?>"name = "picture">
                <label class="custom-file-label" for="picture">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea id ="description" class = "form-control" rows = "6" placeholder="Enter description" name ="description"><?php echo $final['description']?> </textarea>
          </div>
          <div class ="form-group">
<label for "category">Category </label>
<select id = "category" value ="<?php echo $final['category'] ?>"name="category">
  <?php
  $cat = "SELECT * FROM categories";
  $results = mysqli_query($connect,$cat);
  while($row = mysqli_fetch_assoc($results)){
    echo "<option value =".$row['id'].">".$row['name']."</option>";
  }
   ?>
</select>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <input type="hidden" name="form_id" value="<?php echo $final['id'] ?>">
          <button type="submit" class="btn btn-primary" name ="update">Update</button>
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
