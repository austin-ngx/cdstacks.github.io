<?php
include 'connection.php';
if(isset($_GET['action'])){
	switch($_GET['action']){
		case 'filter':
			if(isset($_GET['categoryId'])){
				$sql = "SELECT P.*, G.NAME AS Genre, A.NAME as Artist FROM PRODUCTS as P ";
				$sql .= "INNER JOIN GENRES as G ON P.GENRE_ID = G.ID ";
				$sql .= "INNER JOIN ARTISTS as A ON P.ARTIST_ID = A.ID ";
				$sql .= "WHERE G.ID = ".$_GET['categoryId'];
				$result = mysqli_query($conn, $sql);
				$productList = mysqli_fetch_all($result, MYSQLI_ASSOC);
			}
			break;
		case 'search':
			if(isset($_GET['input'])){
				$sql = 'SELECT P.*, A.NAME as Artist FROM PRODUCTS AS P ';
				$sql .= 'INNER JOIN ARTISTS as A ON P.ARTIST_ID = A.ID ';
				$sql .= 'WHERE (P.NAME LIKE "%'.$_GET['input'].'%") OR ';
				$sql .= '(ARTIST_ID IN (SELECT ID FROM ARTISTS WHERE NAME LIKE "%'.$_GET['input'].'%"))';
				$result = mysqli_query($conn, $sql);
				$productList = mysqli_fetch_all($result, MYSQLI_ASSOC);

				$sql = 'SELECT P.*, A.NAME as Artist FROM TRACKS AS T ';
				$sql .= 'INNER JOIN PRODUCTS AS P ON P.ID = T.PRODUCT_ID ';
				$sql .= 'INNER JOIN ARTISTS as A ON P.ARTIST_ID = A.ID ';
				$sql .= 'WHERE T.NAME LIKE "%'.$_GET['input'].'%"';

				$result = mysqli_query($conn, $sql);
				$productList = array_merge($productList, mysqli_fetch_all($result, MYSQLI_ASSOC));
				//needed for example when there's a track with the same name of the album
				$productList = array_unique($productList);
			}
			break;
	}
}
else{
	$sql = 'SELECT P.*, A.NAME as Artist FROM PRODUCTS as P ';
	$sql .= 'INNER JOIN ARTISTS as A ON P.ARTIST_ID = A.ID ';
	$sql .= 'ORDER BY P.ID DESC LIMIT 10';
	$result = mysqli_query($conn, $sql);
	$productList = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
$minValue = 999;
$maxValue = 0;
if(count($productList) > 0){
	foreach($productList as $item){
		if($item['PRICE'] > $maxValue){
			$maxValue = $item['PRICE'];
		}
		if($item['PRICE'] < $minValue){
			$minValue = $item['PRICE'];
		}
	}
}
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>All CDs | CDStacks</title>

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
          <li class="active">
            All CDs
          </li>
        </ol>
        <!-- end breadcrumbs -->
      </div>


      <!-- Catalogue -->
      <section class="section-wrap pt-70 pb-40 catalogue">
        <div class="container relative">
          <div class="row">

            <div class="col-md-9 catalogue-col right mb-50">

              <div class="shop-filter">
                <p class="result-count">Showing: <?php echo count($productList); ?> products</p>

                <div class="shop-catalogue grid-view left">

                  <div class="row row-3 items-grid">

                    <!--<div class="col-md-4 col-xs-6">
                      <div class="product-item">
                        <div class="product-img">
                          <a href="#">
                            <img src="img/shop/shop_item_5.jpg" alt="">
                            <img src="img/shop/shop_item_5_back.jpg" alt="" class="back-img">
                          </a>
                          <div class="product-label">
                            <span class="sale">EXCLUSIVE🔥🔥</span>
                          </div>
                          <div class="product-actions">
                            <a href="#" class="product-add-to-compare" data-toggle="tooltip" data-placement="bottom" title="Add to compare">
                              <i class="fa fa-exchange"></i>
                            </a>
                            <a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">
                              <i class="fa fa-heart"></i>
                            </a>
                          </div>
                          <a href="#" class="product-quickview">Quick View</a>
                        </div>
                        <div class="product-details">
                          <h3>
                            <a class="product-title" href="shop-single-product.html">beerbongs &amp; bentleys</a>
                            <p>Post Malone</p>
                          </h3>
                          <span class="price">
                            <ins>
                              <span class="ammount">$29.99</span>
                          </ins>
                          </span>
                        </div>
                      </div>
                    </div>-->

						<?php
						foreach($productList as $item){
							$sql = 'SELECT * FROM PICTURES WHERE PRODUCT_ID = '.$item['ID'];
							$result = mysqli_query($conn, $sql);
							$picture = mysqli_fetch_assoc($result);
							echo '<div class="col-md-4 col-xs-6">';
							echo '  <div class="product-item">';
							echo '<div class="product-img">';
							echo '	<a href="shop-single-product.php?productId='.$item['ID'].'">';
							echo '		<img src="'.$picture['PATH'].'" alt="">';
							echo '	</a>';
							$sql = 'SELECT * FROM STOCKS WHERE PRODUCT_ID = '.$item['ID'];
							$result = mysqli_query($conn, $sql);
							if(mysqli_fetch_assoc($result)['QUANTITY'] < 1){
								echo '<span class="sold-out valign">out of stock</span>';
							}
							// echo '	<div class="product-actions">';
							// echo '		<a href="#" class="product-add-to-wishlist" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist">';
							// echo '			<i class="fa fa-heart"></i>';
							// echo '		</a>';
							// echo '	</div>';
							echo '	<a href="shop-single-product.php?productId='.$item['ID'].'" class="product-quickview">Know More</a>';
							echo '</div>';
							echo '<div class="product-details">';
							echo '	<h3>';
							echo '		<a class="product-title" href="shop-single-product.php?productId='.$item['ID'].'">'.$item['NAME'].'</a>';
							echo '		<p>'.$item['Artist'].'</p>';
							echo '	</h3>';
							echo '	<span class="price">';
							echo '		<ins>';
							echo '			<span class="ammount">$'.$item['PRICE'].'</span>';
							echo '		</ins>';
							echo '	</span>';
							echo '</div>';
							echo '  </div>';
							echo '</div>';
						}
						?>
                  </div>
                  <!-- end row -->
                </div>
                <!-- end grid mode -->
                
                <div class="clear"></div>
                
                <!-- Pagination -->
                <!--<div class="pagination-wrap">
                  <nav class="pagination right clear">
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                    <span class="page-numbers current">1</span>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </nav>
                </div>-->
              </div>
            </div>
            <!-- end col -->
            <!-- Sidebar -->
            <aside class="col-md-3 sidebar left-sidebar">

              <!-- Select color -->
              <div class="widget categories">
                <h3 class="widget-title uppercase">Categories</h3>
                <ul class="list-no-dividers">
					<?php
						$sql = "SELECT * FROM GENRES";
						$results = mysqli_query($conn, $sql);

						if(mysqli_num_rows($results) > 0){
							while($row = mysqli_fetch_assoc($results)){
								echo '<li>';
								echo '  <a href="shop-catalog.php?action=filter&categoryId='.$row['ID'].'">'.$row['NAME'].'</a>';
								echo '</li>';
							}
						}
					?>
                </ul>
              </div>

              <!-- Filter by Price -->
              <div class="widget filter-by-price clearfix">
                <h3 class="widget-title uppercase">Filter by Price</h3>

                <div id="slider-range"></div>
                <p>
                  <label for="amount">Price:</label>
                  <input type="text" id="amount" readonly style="border:0;">
                  <a href="#" class="btn btn-sm btn-dark">Filter</a>
                </p>
              </div>
			  
            </aside>
            <!-- end sidebar -->

          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>
      <!-- end catalogue -->
      <!-- Footer Type-1 -->
      
		<?php include 'footer.php'; ?>

    </main>
    <!-- end main container -->
    <!-- jQuery Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script>
		var minPrice = <?php echo $minValue; ?>;
		var maxPrice = <?php echo $maxValue; ?>;
        var $selectedMinValue = minPrice;
        var $selectedMaxValue = maxPrice;
	</script>
    <script type="text/javascript" src="js/scripts.js"></script>

  </body>

  </html>