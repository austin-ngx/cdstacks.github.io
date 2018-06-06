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
        <!-- About us -->
        <section class="section-wrap about-us pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="about-intro uppercase">about our shop</h4>
                        <p>CD Stacks is a online CD store created by Paulo and Quoc Cuong as a part of AIT - Advanced Web final assigment.</p>
                        <p>This website was created using PHP, HTML, CSS, Bootstrap, jQuery.</p>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="statistic">
                            <span>1st Semester 2018</span>
                            <h4 class="uppercase">Year</h4>
                        </div>
                        <div class="statistic">
                            <span>10 weeks</span>
                            <h4 class="uppercase">Time to build</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="container">
            <hr>
        </div>


        <!-- Our Team -->
        <section class="section-wrap our-team pb-50">
            <div class="container">

                <div class="row heading-row">
                    <div class="col-md-12 text-center">
                        <h2 class="heading uppercase">Our Team</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-xs-6 col-xxs-12 team-wrap mb-40 animated-from-left">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="img/team/team_1.jpg" alt="">
                            </div>
                            <h4 class="team-title uppercase">Paulo Marchese</h4>
                            <span>6043@ait.nsw.edu.au</span>
                            <div class="team-details">
                                <p>Databases, Product function, PHP.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end team member -->

                    <div class="col-6 col-xs-6 col-xxs-12 team-wrap mb-40 animated-from-left">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="img/team/team_2.jpg" alt="">
                            </div>
                            <h4 class="team-title uppercase">Quoc Cuong Nguyen</h4>
                            <span>6370@ait.nsw.edu.au</span>
                            <div class="team-details">
                                <p>UI, Login and Register, docs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end our team -->
        <!-- Divider -->
        <div class="container">
            <hr>
        </div>


        <!-- Divider -->
        <div class="container">
            <hr>
        </div>

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