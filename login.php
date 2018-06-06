<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | CDStacks - CD Store</title>

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

    <!-- CAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        function enableBtn() {
            document.getElementById("registerBtn").disabled = false;
        }
    </script>
</head>

<body>

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


        <!-- Page Title -->
        <section class="page-title text-center">
            <div class="container relative clearfix">
                <div class="title-holder">
                    <div class="title-text">
                        <h1 class="uppercase">My Account</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- login -->
        <section class="section-wrap login-register pt-0 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1 mb-40">
                        <div class="login">
                            <h4 class="uppercase">login</h4>
                            <form action="processLogin.php" method="POST">
                                <p class="form-row form-row-wide">
                                    <label>username
                  <abbr class="required" title="required">*</abbr>
                </label>
                                    <input type="text" class="input-text" placeholder="" value="" name="loginUserName">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>password
                  <abbr class="required" title="required">*</abbr>
                </label>
                                    <input type="password" class="input-text" placeholder="" value="" name="loginUserPassword">
                                </p>
                                <input type="submit" value="Login" class="btn">
                            </form>

                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="register">
                            <h4 class="uppercase">Register</h4>
                            <form action="register.php" method="POST">
                                <p class="form-row form-row-wide">
                                    <label>username
                  <abbr class="required" title="required">*</abbr>
                </label>
                                    <input type="text" class="input-text" placeholder="" value="" name="regID">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>password
                  <abbr class="required" title="required">*</abbr>
                </label>
                                    <input type="password" class="input-text" placeholder="" value="" name="regPassword">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>email address
                    <abbr class="required" title="required">*</abbr>
                  </label>
                                    <input type="text" class="input-text" placeholder="" value="" name="regEmail">
                                </p>
                                <input type="submit" value="Register" class="btn" id="registerBtn" name="registerBtn">
                                <script>
                                    document.getElementById("registerBtn").disabled = true;
                                </script>

                                <p>Hold on, just a quick check to make sure you are not robot 🤖</p>
                                <div class="g-recaptcha" class="" data-sitekey="6Lcun1gUAAAAAI0lSdDn0cawbVZXrPizPTuc-TxX" data-callback="enableBtn"></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end login -->
        <!-- Footer Type-1 -->
		<?php include 'footer.php'; ?>
        <!-- end footer -->

        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>

    </main>
    <!-- end main container -->


    <!-- jQuery Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

</body>

</html>