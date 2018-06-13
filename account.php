<!DOCTYPE html>
<html lang="en">

        <head>
                <title>My Cart</title>
              
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
              

<body>

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

<!-- Navigation -->
<?php include 'header.php'; ?>
        <!-- Breadcrumbs -->
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">
                    My Account
                </li>
            </ol>
            <!-- end breadcrumbs -->
        </div>

        

        <!-- My Cart -->
        <section class="section-wrap contact">
            <div class="container">
                <div class="row">

<div id="content">
		<h1>Your Shopping Cart</h1>
		<form id="shopping-cart" action="cart.html" method="post">
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col" colspan="2">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total</strong>: <span id="stotal"></span>
			</p>
			<ul id="shopping-cart-actions">
				<li>
					<input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
				</li>
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
				</li>
				<li>
					<a href="index.html" class="btn">Continue Shopping</a>
				</li>
				<li>
					<a href="checkout.html" class="btn">Go To Checkout</a>
				</li>
			</ul>
		</form>
	</div>
	
            </div>
            </section>
            <?php include 'footer.php'; ?>

    </main>
    <!-- end main container -->
    <!-- jQuery Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/simpleCart.js"></script>       
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.shop.js"></script>

    

</body>

</html>