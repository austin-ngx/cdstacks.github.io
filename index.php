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

				$sql = "SELECT DISTINCT PRODUCTS.*, PICTURES.PATH FROM PRODUCTS INNER JOIN PICTURES ON PRODUCTS.ID = PICTURES.PRODUCT_ID ORDER BY RAND() LIMIT 5";
				$results = mysqli_query($conn, $sql);

				if(mysqli_num_rows($results) > 0){
					while($row = mysqli_fetch_assoc($results)){
						echo '<li>';
						echo '  <img src="'.$row["PATH"].'" alt="">';
						echo '  <div class="hero-holder text-center right-align">';
						echo '    <div class="hero-lines">';
						echo '      <h3 class="hero-heading white">'.$row["NAME"].'</h3>';
						echo '      <h4 class="hero-subheading white uppercase">'.$row["DESCRIPTION"].'</h4>';
						echo '    </div>';
						echo '    <a href="shop-single-product.php?productId='.$row["ID"].'" class="btn btn-lg btn-white">';
						echo '      <span>More info</span>';
						echo '    </a>';
						echo '  </div>';
						echo '</li>';
					}
				}
            ?>
              <!--<li>
                <img src="img/slider/2.jpg" alt="">
                <div class="hero-holder text-center">
                  <div class="hero-lines">
                    <h3 class="hero-subheading white small">Pitchfork's Best New Music</h3>
                    <h6 class="hero-heading white large">Invasion of Privacy</h6>
                    <h4 class="hero-subheading white uppercase">album by Cardi B</h4>
                  </div>
                  <a href="#" class="btn btn-lg btn-white">
                    <span>More info</span>
                  </a>
                </div>
              </li>
              <li>
                <img src="img/slider/3.gif" alt="">
                <div class="hero-holder left-align">
                  <div class="hero-lines">
                    <h1 class="hero-heading white">10 best songs of 2017</h1>
                    <p class="white">A review by Pitchfork</p>
                    <p class="white"></p>
                  </div>
                  <a href="https://thescene.com/watch/pitchfork/pitchfork-docs-the-10-best-songs-of-2017" class="btn btn-lg btn-white">
                    <span>Read more</span>
                  </a>
                </div>
              </li>
              <li>
                <img src="img/slider/4.jpg" alt="">
                <div class="hero-holder text-center right-align">
                  <div class="hero-lines">
                    <h3 class="hero-heading white">Album review: DAMN.</h>
                      <p class="white">by Kendrick Lamar, 2017</p>
                      <p class="white">DAMN. is a widescreen masterpiece of rap, full of expensive beats,
                        <br> furious rhymes, and peerless storytelling about Kendrick’s destiny in America.</p>
                  </div>
                  <a href="https://pitchfork.com/reviews/albums/23147-damn/" class="btn btn-lg btn-white">
                    <span>Read</span>
                  </a>
                </div>
              </li>
			  -->
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
				$sql = "SELECT DISTINCT PRODUCTS.*, ARTISTS.NAME as ARTIST, PICTURES.PATH FROM PRODUCTS ";
				$sql .= "INNER JOIN PICTURES ON PRODUCTS.ID = PICTURES.PRODUCT_ID ";
				$sql .= "INNER JOIN ARTISTS ON PRODUCTS.ARTIST_ID = ARTISTS.ID ";
				$sql .= "ORDER BY ID DESC LIMIT 4";
				$results = mysqli_query($conn, $sql);
				if(mysqli_num_rows($results) > 0){
					while($row = mysqli_fetch_assoc($results)){
						echo '<div class="col-md-3 col-xs-6">';
						echo '  <div class="product-item">';
						echo '    <div class="product-img">';
						echo '      <a href="shop-single-product.php?productId='.$row["ID"].'">';
						echo '        <img src="'.$row["PATH"].'" alt="">';
						echo '          <img src="'.$row["PATH"].'" alt="" class="back-img">';
						echo '      </a>';
						echo '      <a href="#" class="product-quickview">Read Review</a>';
						echo '    </div>';
						echo '    <div class="product-details">';
						echo '      <h3>';
						echo '        <a class="product-title" href="#">'.$row["NAME"].'</a>';
						echo '        <p>'.$row["ARTIST"].'</p>';
						echo '      </h3>';
						echo '      <span class="price">';
						echo '        <ins>';
						echo '          <span class="ammount">$'.$row["PRICE"].'</span>';
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