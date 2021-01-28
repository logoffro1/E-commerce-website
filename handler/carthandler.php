
<?php
session_start();

  $cartArray = array('item_id' => $_GET['cart_id'],'item_name' => $_GET['cart_name'],'item_price' => $_GET['cart_price'], 'quantity'=>1);
if (isset($_SESSION['cart'])) {
  $checker = array_column($_SESSION['cart'],'item_name');
  if(in_array($_GET['cart_name'],$checker)){
    echo "<script> alert('Product already in cart!');
    window.location.href='../product.php';
    </script>";
  } else{
    $count = count($_SESSION['cart']);
  $_SESSION['cart'][$count] = $cartArray;
  echo "<script> alert('Product added to cart');
  window.location.href='../product.php';
  </script>";
  }

}else{
$_SESSION['cart'][0] = $cartArray;
}


 ?>
