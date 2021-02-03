<!DOCTYPE html>
<html lang="en">
<?php session_start();include ("partials/head.php"); ?>
<body class="animsition">
<?php
include ("partials/header.php");
?>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
<?php
require ("partials/dbconnect.php");
$id = $_GET['details_id'];
$query = "SELECT * FROM products WHERE id = '$id'";
$results = $connect->query($query);
$final= $results -> fetch_assoc();

$imgSource = $final['picture'];
$productName = $final['name'];
$productPrice = $final['price'];
$productDescription = $final['description'];
?>


				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">

								<div class="item-slick3" data-thumb="<?php echo $imgSource ?>">
									<div class="wrap-pic-w pos-relative" style = "height:600px">
										<img src="<?php echo $imgSource ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $imgSource ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo htmlentities($productName) ?>
						</h4>

						<span class="mtext-106 cl2">
							$<?php echo $productPrice ?>.00
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php echo htmlentities($productDescription) ?>
						</p>

						<!--  -->
						<div class="p-t-33">


							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
							
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" name ="addtocart"
									onclick="location.href='handler/carthandler.php?cart_id=<?php echo $final['id']; ?>&cart_name=<?php echo htmlentities($final['name']); ?>&cart_price=<?php echo $final['price']; ?>'">
										Add to cart
									</button>
								</div>
							</div>
						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="https://www.linkedin.com/in/cosminilie2704/" target="_blank"class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100" data-tooltip="LinkedIn">
									<i class="fa fa-linkedin"></i>
								</a>
							</div>


							<a href="https://github.com/logoffro1" target="_blank"class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Github">
								<i class="fa fa-github"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
								<?php echo htmlentities($productDescription); ?>
								</p>
							</div>
						</div>


				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Categories: Jacket, Men
			</span>
		</div>
	</section>

	<!-- Footer -->
<<?php include ("partials/footer.php"); ?>

</body>
</html>
