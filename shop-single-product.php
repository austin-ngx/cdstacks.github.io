<!DOCTYPE html>
<html lang="en">

<head>
	<title>CDStacks - CD Store</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-icons.css" />
	<link rel="stylesheet" href="css/sliders.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.min.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
</head>

<body class="relative">

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			<div></div>
			<div></div>
		</div>
	</div>
	<main class="content-wrapper oh">

		<!-- Navigation -->
		<?php include 'header.php'; ?>
		<!-- end navigation -->
		<!-- Breadcrumbs -->
		<div class="container">
			<ol class="breadcrumb">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="shop-catalog.php">All CDs</a>
				</li>
				<li class="active">
					Products
				</li>
			</ol>
			<!-- end breadcrumbs -->
		</div>


		<!-- Single Product -->

		<section class="section-wrap single-product">
			<div class="container relative">
				<div class="row">
					<?php
					$productId = $_GET["productId"];
					include 'connection.php';
					$sql = "SELECT * FROM PRODUCTS WHERE ID = ".$productId;
					$result = mysqli_query($conn, $sql);
					$productObject = null;
					$picturesList = [];
					if(mysqli_num_rows($result) > 0){
						$productObject = mysqli_fetch_assoc($result);
						$sql = "SELECT * FROM PICTURES WHERE PRODUCT_ID = ".$productId;
						$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result) > 0){
							$picturesList = mysqli_fetch_all($result, MYSQLI_ASSOC);
						}
					}
					?>
					<div class="col-sm-6 col-xs-12 mb-60">

						<div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
							<?php
								foreach($picturesList as $item){
									echo '<div class="gallery-cell">';
									echo '    <a href="'.$item["PATH"].'" class="lightbox-img">';
									echo '        <img src="'.$item["PATH"].'" alt="" />';
									echo '        <i class="icon arrow_expand"></i>';
									echo '    </a>';
									echo '</div>';
								}
							?>
						</div>
						<!-- end gallery main -->
						<div class="gallery-thumbs">
						<?php
							foreach($picturesList as $item){
								echo '<div class="gallery-cell">';
								echo '	<img src="'.$item["PATH"].'" alt="" />';
								echo '</div>';
							}
						?>
						</div>
						<!-- end gallery thumbs -->
					</div>
					<!-- end col img slider -->
					<div class="col-sm-6 col-xs-12 product-description-wrap simpleCart_selfItem">
						<h1 class="product-title product-name"><?php echo $productObject["NAME"]; ?></h1>
						
						<div class="product_meta">
							<!--<span class="sku">SKU: <a href="#">111763</a></span>-->
							<?php
								$sql = "SELECT NAME FROM GENRES WHERE ID = ".$productObject["GENRE_ID"];
								$result = mysqli_query($conn, $sql);
								$genre = mysqli_fetch_assoc($result);
								echo '<span class="posted_in">Category: <a href="#">'.$genre["NAME"].'</a></span>';
							?>
							<!--<span class="tagged_as">Tags: <a href="#">Post Malone</a>, <a href="#">Hot 100</a></span>-->
						</div>

						<span class="price">
							<del>
								<span>$<?php echo $productObject["PRICE"] * 1.3; ?></span>
							</del>
							<ins>
								<span class="amount product-price">$<?php echo $productObject["PRICE"]; ?></span>
							</ins>
						</span>

						<!--<span class="rating"></span>-->
						<p class="product-description">
							<?php echo $productObject["DESCRIPTION"]; ?>
						</p>

						<div class="select-options">
							<div class="row row-20">
								<div class="col-sm-6">
									<select class="color-select">
										<option value>Select version</option>
										<option value="white">CD</option>
										<option value="grey">Vinyl</option>
									</select>
								</div>

								<div class="col-sm-6">
									<select class="size-options">
										<option value>Disc type</option>
										<option value="N">Normal</option>
										<option value="L">Limited</option>
									</select>
								</div>
							</div>
						</div>

						<ul class="product-actions clearfix">
						<form class="add-to-cart" action="LoginCheck.php" method="post">
							<div>
								<label for="qty-2">Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="Add to Cart" class="btn" /></p>
						</form>
<!-- javaScript Cart alternative solution 
							<li>
								<a href="javascript:;" class="item_add btn btn-color btn-lg add-to-cart left"><span>Add to Cart</span></a>
							</li>
							<li>
								<div class="icon-add-to-wishlist left">
									<a href="#"><i class="icon icon_heart_alt"></i></a>
								</div>
							</li>
							<li>
								<div class="quantity buttons_added">
									<input id="btnMinus" type="button" value="-" class="minus" />
									<input id="inputQty" type="number" step="1" min="0" max="10" value="1" title="Qty" class="input-text qty text item_Quantity" />
									<input id="btnPlus" type="button" value="+" class="plus" />
								</div>
							</li> -->
						</ul>

						<!--<div class="socials-share clearfix">
							<div class="social-icons rounded">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-vimeo"></i></a>
							</div>
						</div>-->
					</div>
					<!-- end col product description -->
				</div>
				<!-- end row -->
				<!-- tabs -->
				<div class="row">
					<div class="col-md-12">
						<div class="tabs tabs-bb">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab-description" data-toggle="tab">Critics</a>
								</li>
								<li>
									<a href="#tab-info" data-toggle="tab">Track List</a>
								</li>
							</ul>
							<!-- end tabs -->
							<!-- tab content -->
							<div class="tab-content">

								<div class="tab-pane fade in active" id="tab-description">
									<p>
										<?php echo $productObject["CRITICS"]; ?>
									</p>
								</div>

								<div class="tab-pane fade" id="tab-info">
									<?php 
										$sql = "SELECT NUMBER, NAME FROM TRACKS WHERE PRODUCT_ID = ".$productId." ORDER BY NUMBER ASC";
										$result = mysqli_query($conn, $sql);
										if(mysqli_num_rows($result) > 0){
											while($track = mysqli_fetch_assoc($result)){
												echo "<p>".$track["NUMBER"]." - ".$track["NAME"]."</p>";
											}
										}
									?>
								</div>

							</div>
							<!-- end tab content -->
						</div>
					</div>
					<!-- end tabs -->
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</section>
		<!-- end single product -->

		<?php include 'footer.php'; ?>

	</main>
	<!-- end main container -->
	<!-- end main-wrapper -->
	<!-- jQuery Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
<!-- dead cart    <script type="text/javascript" src="js/simpleCart.js"></script> -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<script>
		$('#btnMinus').click(function(){
			var iNum = parseInt($('#inputQty').val());
			if(iNum > 1){
				$('#inputQty').val(iNum - 1);
			}
		});
		$('#btnPlus').click(function(){
			var iNum = parseInt($('#inputQty').val());
			if(iNum < 10){
				$('#inputQty').val(iNum + 1);
			}
		});
	</script>

</body>

</html>