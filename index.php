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
    <header class="nav-type-1">

      <div class="top-bar hidden-sm hidden-xs">
        <div class="container">
          <div class="top-bar-line">
            <div class="row">
              <div class="top-bar-links">
                <ul class="col-sm-6 top-bar-acc">
                  <li class="top-bar-link">
                    <a href="#">My Account</a>
                  </li>
                  <li class="top-bar-link">
                    <a href="#">My Wishlist</a>
                  </li>
                  <li class="top-bar-link">
                    <a href="#">Newsletter</a>
                  </li>
                  <li class="top-bar-link">
                    <a href="#">Login</a>
                  </li>
                  <li class="top-bar-link">
                    <a href="contact.html">Contact</a>
                  </li>
                </ul>

                <ul class="col-sm-6 text-right top-bar-currency-language">
                  <li>
                    Currency:
                    <a href="#">AUD
                      <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="currency-dropdown">
                      <ul>
                        <li>
                          <a href="#">USD</a>
                        </li>
                        <li>
                          <a href="#">CAD</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="language">
                    Language:
                    <a href="#">ENG
                      <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="language-dropdown">
                      <ul>
                        <li>
                          <a href="#">English</a>
                        </li>
                        <li>
                          <a href="#">Vietnamese</a>
                        </li>
                        <li>
                          <a href="#">Portugese</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <!--<li>
                    <div class="social-icons">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-google-plus"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-linkedin"></i>
                      </a>
                      <a href="#">
                        <i class="fa fa-vimeo"></i>
                      </a>
                    </div>
                  </li>-->
                </ul>

              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- end top bar -->

      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Mobile cart -->
                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">2</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end navbar-header -->

              <div class="header-wrap">
                <div class="header-wrap-holder">

                  <!-- Logo -->
                  <div class="logo-container">
                    <div class="logo-wrap text-center">
                      <a href="index.php">
                        <img class="logo" src="img/logo_dark.png" alt="logo">
                      </a>
                    </div>
                  </div>
                  <!-- Search -->
                  <div class="nav-search hidden-sm hidden-xs">
                    <form method="get" action="search.php">
                      <input type="search" class="form-control" placeholder="Search">
                      <button type="submit" class="search-button">
                        <i class="icon icon_search"></i>
                      </button>
                    </form>
                  </div>


                </div>
              </div>
              <!-- end header wrap -->

              <div class="nav-wrap">
                <div class="collapse navbar-collapse" id="navbar-collapse">

                  <ul class="nav navbar-nav">

                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search relative">
                        <input type="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="search-button">
                          <i class="icon icon_search"></i>
                        </button>
                      </form>
                    </li>
                    <li class="dropdown">
                      <a href="#">Account</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="about-us.html">Login</a>
                        </li>
                        <li>
                          <a href="contact.html">Register</a>
                        </li>
                        <li>
                          <a href="login.html">Admin Portal</a>
                        </li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                      <ul class="dropdown-menu megamenu">
                        <li>
                          <div class="megamenu-wrap">
                            <div class="row">

                              <div class="col-md-3 megamenu-item">
                                <h6>Featured</h6>
                                <ul class="menu-list">
                                  <li>
                                    <a href="#">Billboard 100</a>
                                  </li>
                                  <li>
                                    <a href="#">Album of the year</a>
                                  </li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <h6>New Release</h6>
                                <ul class="menu-list">
                                  <li>
                                    <a href="#">Pop</a>
                                  </li>
                                  <li>
                                    <a href="#">RnB</a>
                                  </li>
                                  <li>
                                    <a href="#">Alternative</a>
                                  </li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <h6>Featured Male Artist</h6>
                                <ul class="menu-list">
                                  <li>
                                    <a href="#">Coldplay</a>
                                  </li>
                                  <li>
                                    <a href="#">Imagine Dragons</a>
                                  </li>
                                  <li>
                                    <a href="#">Kendrick Lamar</a>
                                  </li>
                                  <li>
                                    <a href="#">The Weeknd</a>
                                  </li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <h6>Featured Female Artist</h6>
                                <ul class="menu-list">
                                  <li>
                                    <a href="#">Beyoncé</a>
                                  </li>
                                  <li>
                                    <a href="#">Nicki Minaj</a>
                                  </li>
                                  <li>
                                    <a href="#">Dua Lipa</a>
                                  </li>
                                </ul>
                              </div>

                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <!-- end categories -->

                    <li class="dropdown">
                      <a href="#">About</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="blog-standard.html">About us</a>
                        </li>
                        <li>
                          <a href="blog-single.html">Support</a>
                        </li>
                      </ul>
                    </li>


                    <li class="mobile-links">
                      <ul>
                        <li>
                          <a href="#">Login</a>
                        </li>
                        <li>
                          <a href="#">My Account</a>
                        </li>
                      </ul>
                    </li>

                  </ul>
                  <!-- end menu -->
                </div>
                <!-- end collapse -->
              </div>
              <!-- end col -->

            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
        </div>
        <!-- end navigation -->
      </nav>
      <!-- end navbar -->
    </header>
    <!-- end navigation -->

    <!-- Hero Slider -->
    <section class="section-wrap nopadding">
      <div class="container">
        <div class="entry-slider">
          <div class="flexslider" id="flexslider-hero">
            <ul class="slides clearfix">
            <?php
			include 'connection.php';

			$sql = "SELECT PRODUCTS.*, PICTURES.PATH FROM PRODUCTS INNER JOIN PICTURES ON PRODUCTS.ID = PICTURES.PRODUCT_ID";
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
            $sql = "SELECT PRODUCTS.NAME, PRODUCTS.DESCRIPTION, PICTURES.PATH FROM PRODUCTS ORDER BY ID DESC LIMIT 4";
            $results = mysqli_query($conn, $sql);
            if(mysqli_num_rows($results) > 0){
                while($row = mysqli_fetch_assoc($results)){
                    echo '<div class="col-md-3 col-xs-6">';
                    echo '  <div class="product-item">';
                    echo '    <div class="product-img">';
                    echo '      <a href="#">';
                    echo '        <img src="'.$row["PATH"].'" alt="">';
                    echo '          <img src="'.$row["PATH"].'" alt="" class="back-img">';
                    echo '      </a>';
                    echo '      <a href="#" class="product-quickview">Read Review</a>';
                    echo '    </div>';
                    echo '    <div class="product-details">';
                    echo '      <h3>';
                    echo '        <a class="product-title" href="shop-single-product.php?productId='.$row["NAME"].'">'.$row["NAME"].'</a>';
                    echo '        <p>'.$row["Author"].'</p>';
                    echo '      </h3>';
                    echo '      <span class="price">';
                    echo '        <ins>';
                    echo '          <span class="ammount">$17.99</span>';
                    echo '        </ins>';
                    echo '      </span>';
                    echo '    </div>';
                    echo '  </div>';
                    echo '</div>';
                }
            }
			mysqli_close($conn);
        ?>

            <div class="col-md-3 col-xs-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/shop/shop_item_2.jpg" alt="">
                            <img src="img/shop/shop_item_2_back.jpg" alt="" class="back-img">
                        </a>
                        <a href="#" class="product-quickview">Read Review</a>
                    </div>
                    <div class="product-details">
                        <h3>
                            <a class="product-title" href="shop-single-product.html">Evolve</a>
                            <p>Imagine Dragons</p>
                        </h3>
                        <span class="price">
                            <ins>
                                <span class="ammount">$21.59</span>
                            </ins>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/shop/shop_item_3.jpg" alt="">
                            <img src="img/shop/shop_item_3_back.jpg" alt="" class="back-img">
                        </a>
                        <div class="product-label">
                            <span class="sale">clearance</span>
                        </div>
                        <span class="sold-out valign">out of stock</span>
                        <a href="#" class="product-quickview">Read Review</a>
                    </div>
                    <div class="product-details">
                        <h3>
                            <a class="product-title" href="shop-single-product.html">reputation</a>
                            <p>Taylor Swift</p>
                        </h3>
                        <span class="price">
                            <ins>
                                <span class="ammount">$9.99</span>
                            </ins>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="#">
                            <img src="img/shop/shop_item_4.jpg" alt="">
                            <img src="img/shop/shop_item_4_back.jpg" alt="" class="back-img">
                        </a>
                        <div class="product-label">
                            <span class="best">best</span>
                        </div>
                        <a href="#" class="product-quickview">Read Review</a>
                    </div>
                    <div class="product-details">
                        <h3>
                            <a class="product-title" href="shop-single-product.html">Melodrama</a>
                            <p>Lorde</p>
                        </h3>
                        <span class="price">
                            <ins>
                                <span class="ammount">$29.99</span>
                            </ins>
                        </span>
                    </div>
                </div>
            </div>

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
            <form>
              <input type="email" class="newsletter-input" placeholder="Your email">
              <input type="submit" class="newsletter-submit btn btn-md btn-dark" value="subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Footer Type-1 -->
    <footer class="footer footer-type-1 bg-white">
      <div class="container">
        <div class="footer-widgets top-bottom-dividers pb-mdm-20">
          <div class="row">

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Information</h5>
                <ul class="list-no-dividers">
                  <li>
                    <a href="#">Our stores</a>
                  </li>
                  <li>
                    <a href="#">About us</a>
                  </li>
                  <li>
                    <a href="#">Business with us</a>
                  </li>
                  <li>
                    <a href="#">Delivery information</a>
                  </li>
                  <li>
                    <a href="#">Terms &amp; Conditions</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Help</h5>
                <ul class="list-no-dividers">
                  <li>
                    <a href="#">Contact us</a>
                  </li>
                  <li>
                    <a href="#">Track order</a>
                  </li>
                  <li>
                    <a href="#">F.A.Q</a>
                  </li>
                  <li>
                    <a href="#">Privacy policy</a>
                  </li>
                  <li>
                    <a href="#">Returns</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
              <div class="widget footer-links">
                <h5 class="widget-title uppercase">Account</h5>
                <ul class="list-no-dividers">
                  <li>
                    <a href="#">My account</a>
                  </li>
                  <li>
                    <a href="#">Wishlist</a>
                  </li>
                  <li>
                    <a href="#">Order history</a>
                  </li>
                  <li>
                    <a href="#">Special gifts</a>
                  </li>
                  <li>
                    <a href="#">Track order</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h5 class="widget-title uppercase">about us</h5>
                <p class="mb-0">rwighgwhgoihgo.</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget footer-get-in-touch">
                <h5 class="widget-title uppercase">Contact</h5>
                <address class="footer-address">
                  <span>Address:</span> .</address>
                <p>Phone:
                  <a href="tel:+643">+212345678</a>
                </p>
                <p>Email:
                  <a href="mailto:@gmail.com">@gmail.com</a>
                </p>
                <div class="social-icons rounded mt-20">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus"></i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                  <a href="#">
                    <i class="fa fa-vimeo"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- end stay in touch -->

          </div>
        </div>
      </div>
      <!-- end container -->

      <div class="bottom-footer bg-white">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 copyright sm-text-center">
              <span>
                &copy; CDs</a>
              </span>
            </div>

            <div class="col-sm-4 text-center">
              <div id="back-to-top">
                <a href="#top">
                  <i class="fa fa-angle-up"></i>
                </a>
              </div>
            </div>

            <div class="col-sm-4 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
              <i class="fa fa-cc-paypal"></i>
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-discover"></i>
              <i class="fa fa-cc-amex"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- end bottom footer -->
    </footer>
    <!-- end footer -->

  </main>
  <!-- end main container -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

</body>

</html>