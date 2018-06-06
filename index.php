<!DOCTYPE html>
<html lang="en">

<head>
  <title>CDStacks - Online CD Store</title>

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

    <!-- Hero Slider -->
    <section class="section-wrap nopadding">
      <div class="container">
        <div class="entry-slider">
          <div class="flexslider" id="flexslider-hero">
            <ul class="slides clearfix">

            <?php
				include 'connection.php';

				$sql = 'SELECT * FROM PRODUCTS ORDER BY RAND() LIMIT 5';
				$results = mysqli_query($conn, $sql);
				$productsArray = mysqli_fetch_all($results, MYSQLI_ASSOC);

				if(count($productsArray) > 0){
					foreach($productsArray as $product){
						$sql = 'SELECT * FROM PICTURES WHERE PRODUCT_ID = '.$product['ID'];
						$results = mysqli_query($conn, $sql);
						$picture = mysqli_fetch_assoc($results);
						echo '<li>';
						echo '  <img src="'.$picture["PATH"].'" alt="">';
						echo '  <div class="hero-holder text-center right-align">';
						echo '    <div class="hero-lines">';
						echo '      <h3 class="hero-heading white">'.$product["NAME"].'</h3>';
						echo '      <h4 class="hero-subheading white uppercase">'.$product["DESCRIPTION"].'</h4>';
						echo '    </div>';
						echo '    <a href="shop-single-product.php?productId='.$product["ID"].'" class="btn btn-lg btn-white">';
						echo '      <span>More info</span>';
						echo '    </a>';
						echo '  </div>';
						echo '</li>';
					}
				}
            ?>

            </ul>
          </div>
        </div>
        <!-- end slider -->
      </div>
    </section>
    <!-- end hero slider -->

    <!-- New Arrivals -->
    <section class="section-wrap new-arrivals pb-40">
      <div class="container">

        <div class="row heading-row">
          <div class="col-md-12 text-center">
            <h2 class="heading uppercase">
              <small>Fresh Beats</small>
            </h2>
          </div>
        </div>

        <div class="row row-10">
			<?php
				$sql = "SELECT PRODUCTS.*, ARTISTS.NAME as ARTIST FROM PRODUCTS ";
				$sql .= "INNER JOIN ARTISTS ON PRODUCTS.ARTIST_ID = ARTISTS.ID ";
				$sql .= "ORDER BY ID DESC LIMIT 4";
				$results = mysqli_query($conn, $sql);
				$productsArray = mysqli_fetch_all($results, MYSQLI_ASSOC);

				if(count($productsArray) > 0){
					foreach($productsArray as $product){
						$sql = 'SELECT * FROM PICTURES WHERE PRODUCT_ID = '.$product['ID'];
						$results = mysqli_query($conn, $sql);
						$picture = mysqli_fetch_assoc($results);
						echo '<div class="col-md-3 col-xs-6">';
						echo '  <div class="product-item">';
						echo '    <div class="product-img">';
						echo '      <a href="shop-single-product.php?productId='.$product["ID"].'">';
						echo '        <img src="'.$picture["PATH"].'" alt="">';
						echo '      </a>';
						echo '      <a href="#" class="product-quickview">Read Review</a>';
						echo '    </div>';
						echo '    <div class="product-details">';
						echo '      <h3>';
						echo '        <a class="product-title" href="#">'.$product["NAME"].'</a>';
						echo '        <p>'.$product["ARTIST"].'</p>';
						echo '      </h3>';
						echo '      <span class="price">';
						echo '        <ins>';
						echo '          <span class="ammount">$'.$product["PRICE"].'</span>';
						echo '        </ins>';
						echo '      </span>';
						echo '    </div>';
						echo '  </div>';
						echo '</div>';
					}
				}
				mysqli_close($conn);
			?>
        </div>
        <!-- end row -->
      </div>
    </section>
    <!-- end new arrivals -->

    <!-- Newsletter -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="newsletter-box">
            <h5 class="uppercase">Subscribe to Receive Our Updates</h5>
            <form id="subForm" action="#">
              <input id="subEmail" name="email" type="email" class="newsletter-input" placeholder="Your email">
              <input id="btnSubSubmit" type="submit" class="newsletter-submit btn btn-md btn-dark" value="subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </main>
  <!-- end main container -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script>
	$(document).ready(function(){
		$("#subForm").submit(function(event) {
			event.preventDefault();
			request = $.ajax({
				url: "/subscribe.php",
				type: "post",
				data: $("#subForm").serialize()
			});
			//$("#subEmail").val().serialize()
			request.done(function (response, textStatus, jqXHR){
				$("#btnSubSubmit").val("Hooray!");
				$("#subEmail").val("");
				$("#btnSubSubmit").prop("disabled", true);
				$("#subEmail").prop("disabled", true);
			});
			request.fail(function (jqXHR, textStatus, errorThrown){
				$("#btnSubSubmit").val("Try Again!");
			});
		});
	});
  </script>
</body>

</html>