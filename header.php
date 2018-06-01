<?php
session_start();
?><!-- Navigation -->
    <header class="nav-type-1">

      <div class="top-bar hidden-sm hidden-xs">
        <div class="container">
          <div class="top-bar-line">
            <div class="row">
              <div class="top-bar-links">

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
                    
                    <?php 
                    if (isset $_SESSION['loginUserName']){
                    echo '  <li class="dropdown"> ';
                    echo '  <a href="#">My Cart</a>';
                    echo '  <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>';
                    echo '  <ul class="dropdown-menu">';
                    echo '    <li>';
                    echo '    <div class="simpleCart_items"></div>';
                    echo '    </li>';
                    echo '    <li>';
                    echo '    <a href="javascript:;" class="simpleCart_empty"></a>';
                    echo '    </li>';
                    echo '    <li>';
                    echo '    <a href="javascript:;" class="simpleCart_checkout"></a>';
                    echo '    </li>';
                    echo '  </ul>';
                    echo '</li>';
                    } else {
                    echo '  <li class="dropdown">';   
                    echo '  <a href="#">Account</a>';
                    echo '  <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>';
                    echo '  <ul class="dropdown-menu">';
                    echo '    <li>';
                    echo '      <a href="login.html">Login</a>';
                    echo '    </li>';
                    echo '    <li>';
                    echo '      <a href="contact.html">Register</a>';
                    echo '    </li>';
                    echo '  </ul>';
                    echo '</li>';
                    }
                    ?>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
						  <?php
							include 'connection.php';
							$sql = "SELECT NAME FROM GENRES";
							$results = mysqli_query($conn, $sql);

							if(mysqli_num_rows($results) > 0){
								while($row = mysqli_fetch_assoc($results)){
									echo '<li>';
									echo '  <a href="shop-catalog.php">'.$row['NAME'].'</a>';
									echo '</li>';
								}
							}
						  ?>
                      </ul>
                    </li>
                    <!-- end categories -->

                    <li class="dropdown">
                      <a href="#">About</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="about-us.html">About us</a>
                        </li>
                      </ul>
                    </li>
                  
                    <li class="dropdown showCart">
                      <a href="account.html"></a>
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
      <script type="text/javascript" src="js/simpleCart.js"></script> 
    </header>
    <!-- end navigation -->