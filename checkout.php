<!DOCTYPE html>
<html lang="en">

        <head>
                <title>Check Out</title>
              
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
                    Checkout
                </li>
            </ol>
            <!-- end breadcrumbs -->
        </div>

<div id="content">
		<h1>Checkout</h1>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <form action="order.html" method="post" id="checkout-order-form">
		 	<h2>Your Details</h2>
		 	
		 	<fieldset id="fieldset-billing">
		 		<legend>Billing</legend>
		 		<div>
		 			<label for="name">Name</label>
		 			<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="email">Email</label>
		 			<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
		 		</div>
		 		<div>
		 			<label for="city">City</label>
		 			<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="address">Address</label>
		 			<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="zip">ZIP Code</label>
		 			<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="country">Country</label>
		 			<select name="country" id="country" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select</option>
		 				<option value="AU">Australia</option>
		 				<option value="NZ">New Zealand</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	<div id="shipping-same">Same as Billing <input type="checkbox" id="same-as-billing" value=""/></div>
		 	
		 	<fieldset id="fieldset-shipping">
		 		
		 		<legend>Shipping</legend>
		 		
		 		<div>
		 			<label for="sname">Name</label>
		 			<input type="text" name="sname" id="sname" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="semail">Email</label>
		 			<input type="text" name="semail" id="semail" data-type="expression" data-message="Not a valid email address" />
		 		</div>
		 		<div>
		 			<label for="scity">City</label>
		 			<input type="text" name="scity" id="scity" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="saddress">Address</label>
		 			<input type="text" name="saddress" id="saddress" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="szip">ZIP Code</label>
		 			<input type="text" name="szip" id="szip" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div>
		 			<label for="scountry">Country</label>
		 			<select name="scountry" id="scountry" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select</option>
		 				<option value="AU">Australia</option>
		 				<option value="NZ">New Zealand</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	<p><input type="submit" id="submit-order" value="Submit" class="btn" /></p>
		 
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