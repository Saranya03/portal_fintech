

<?php


if(empty($_SESSION)) // if the session not yet started
  session_start();
//unset($_SESSION['username']);
//session_destroy();
//echo "something";




$username ='';
 if(!isset($_SESSION['username'])) { // if already login
   header('Location: ./');
 }
 else {
   $username =$_SESSION['username'];
 }




?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VP-Fintech API Portal</title>

    <!-- Site Favicon -->
    <!--<link rel="icon" type="image/ico" href="favicon.ico">-->

    <!-- IE -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- other browsers -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <link href="assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Retina Images Plugin -->
    <!--    <script src="assets/js/plugins/retina/retina.min.js"></script>-->

    <!-- Plugin CSS -->
    <link href="assets/css/plugins/hover/hover.min.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/css/plugins/owl.carousel/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.css" rel="stylesheet">
    <link href="assets/css/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay_progress.min.js"></script>

    <!-- Spectrum CSS -->
    <link href="assets/css/spectrum.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-85274469-2']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <style>
        .navbar-login {
            width: 250px;
            height: 100px;
            padding: 10px;
            padding-bottom: 0px;
            background-color: #2d3943;
            color: white;
            text-transform: lowercase;
        }

        .navbar-login-session {
            padding: 10px;
            padding-bottom: 0px;
            padding-top: 0px;
        }

        .icon-size {
            font-size: 200px;
        }
    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div id="wrapper">

        <!--  Loading View      -->
        <div class="se-pre-con"></div>

        <!--  Ajax View      -->
        <div id="overlay-load"></div>

        <div id="wait" style="display : none; width : 69px; height : 89px; position : fixed; top : 50%; left : 50%; padding-bottom : 10px;">
            <img src='./assets/images/loader-64x/Preloader_2.gif' width="64" height="64" />
            <br>
        </div>

        <div class="overlayLoading"></div>

        <nav class="navbar navbar-dark navbar-fixed-top" role="navigation" style="background-color:#2d3943;">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top" style="padding-top:5px;">
                        <span class="logo">
                            <img src="assets/img/logo.png">
                        </span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->

                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a target="_blank" href="#work">Discover APIs</a>
                        </li>
                        <li class="page-scroll">
                            <a target="_blank" href="https://api.vp-fintech.com/store/">API Store</a>
                        </li>
                        <li class="page-scroll">
                            <a target="_blank" href="http://portal.vp-fintech.com/dokuwiki/doku.php?id=toc">Wiki</a>
                        </li>
                        <li class="page-scroll">
                            <a target="_blank" href="http://sandbox.vp-fintech.com/">API Sandbox</a>
                        </li>
                        <!--
                        <li class="page-scroll">
                            <a target="_blank" href="http://dashboard.vp-fintech.com/">API Dashboard</a>
                        </li>
-->
                        <li class="page-scroll" style="top:15px;">
                            <div class="dropdown">
                                <a class="dropbtn page-scroll">Dashboards</a>
                                <div class="dropdown-content">
                                    <a href="http://dashboard.vp-fintech.com/">API Dashboard</a>
                                    <a href="#">Leaderboard <span style="font-size: 11px; padding-left: 15px;">Coming Soon</span></a>
                                </div>
                            </div>
                        </li>

                        <li class="page-scroll">
                            <a target="_blank" href="#contact">Contact Us</a>
                        </li>

                        <li>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="fa fa-user"></span>
                                        <strong><?php echo $username?></strong>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-login">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p class="text-center">
                                                            <span class="fa fa-user fa-5x"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <p class="text-left"><strong></strong></p>
                                                        <p class="text-left small"></p> <!-- can have mail -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="navbar-login navbar-login-session">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <p>
                                                            <a href="#"  id="logut-button" class="btn btn-danger btn-block"><b>Logout</b></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <header class="intro-img intro-dark-bg" style="background-image: url(assets/img/demo-bgs/demo-bg-1.jpg)" data-stellar-background-ratio="1">

            <div class="overlay"></div>

            <div class="intro-body" data-scrollreveal="move 0 over 1.5s">
                <div class="container">
                    <div class="intro-welcome">Calling all developers!</div>
                    <br>
                    <h5 class="brand-heading">
                       LEARN.EXPLORE.<span class="text-primary" style="color: #439ad5;">CONSUME.</span>DISCUSS.
                    </h5>
                    <hr class="light">

                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <h4>An API Social Network for all your API-related needs.</h4>
                            </div>
                            <div class="item">
                                <h4>Access to easy to use and customizable APIs.</h4>
                            </div>
                            <div class="item">
                                <h4>Includes all documentation and support.</h4>
                            </div>
                        </div>
                    </div>

                    <div>
                        <br/>
                        <a target="_blank" href="http://portal.vp-fintech.com/dokuwiki/doku.php?id=start" class="btn btn-lg btn-primary btn-square btn-raised" style="width: 200px;">
                        Get Started
                        </a>
                    </div>

                    <div class="page-scroll" data-scrollreveal="enter bottom after .6s">
                        <a href="#about" class="btn btn-scroll-light sink">
                            <i class="fa fa-angle-double-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section id="about" class="text-center ash-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Overview</h2>
                        <hr class="orange">
                        <p class="ash-bg">At Virtusa, we have leveraged our deep understanding of the banking domain, together with our core engineering capabilities to set up a Fintech Lab which can assist banks in navigating these challenging times. For SmartBank solutions it is necessary to provide APIs which can be used to expose a range of data, as real data can be a vital part of a solution when analyzing core functionalities. This developer portal provides you with an environment to register, publish, rate and discuss APIs.</p>
                        <p class="demo-text">Build it your way!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="screen-cta text-center bg-orange">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="color:white">Check out our DEMOS!!</h2>
                        <hr class="light">

                        <div data-scrollreveal="enter bottom move 800px over 1.5s">
                            <a href="#portfolio-modal-2" id="play-video" class="portfolio-link" data-toggle="modal" style="margin-top: 1000px;">
                                <img src="assets/img/call-to-action/screen.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="services-1 ash-background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2>Why APIs?</h2>
                        <hr class="orange">
                        <p class="ash-bg">While APIs are not exactly new, API Banking is taking the financial services domain by storm. API Banking will empower banks to enhance the way they provide their digital offerings by partnering with 3<sup>rd</sup> party applications and services to create new revenue streams. It also helps to achieve faster innovation which banks can’t ignore and engage a range of generations particularly targeting the millennial migration to non-bank payment methods. Take a look at how else you can benefit from leveraging APIs for your banking needs.</p>
                    </div>

                    <div class="col-lg-12 text-center" data-scrollreveal="enter bottom over 1.5s">
                        <ul id="services-1-carousel" class="icon-effect list-inline">
                            <!-- ICON USAGE: The icons in this example are generated using Font Awesome unicodes. To use different icons you will need to create a custom CSS class like the ones used below (ex. icon-code, or icon-envelope-o). -->
                            <li class="item">
                                <span class="icon icon-mobile"></span>
                                <h3>Responsive</h3>
                                <p class="ash-bg">Provide clients with a holistic view by allowing mobile apps and websites to access banking data from multiple sources</p>
                            </li>
                            <li class="item">
                                <span class="icon icon-code"></span>
                                <h3>Expand</h3>
                                <p class="ash-bg">Promote your brand with new partner ecosystems </p>
                            </li>
                            <li class="item">
                                <span class="icon icon-pencil"></span>
                                <h3>ROI</h3>
                                <p class="ash-bg">Add new revenue streams and accelerate innovation</p>
                            </li>
                            <li class="item">
                                <span class="icon icon-flag"></span>
                                <h3>Save</h3>
                                <p class="ash-bg">Reduce build cost by tapping into a wider community</p>
                            </li>
                            <li class="item">
                                <span class="icon icon-rocket"></span>
                                <h3>Scale</h3>
                                <p class="ash-bg">Reduce constraints on legacy technology issues and scale up business with agility</p>
                            </li>
                            <li class="item">
                                <span class="icon icon-envelope-o"></span>
                                <h3>Support</h3>
                                <p class="ash-bg">Provide email support for added guidance</p>
                            </li>
                            <li class="item">
                                <span class="icon icon-info-circle"></span>
                                <h3>Documented</h3>
                                <p class="ash-bg">Complete documentation and usage instructions</p>
                            </li>

                            <li class="item">
                                <span class="icon icon-wrench"></span>
                                <h3>Socialization</h3>
                                <p class="ash-bg">Create a community around API innovation to better engage your developers</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <br/>

        <section id="work" class="portfolio-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>API Catalog</h2>
                        <hr class="orange">
                        <ul class="list-inline hidden-xs" id="filters">
                            <!--                            <li>
                                <button data-filter="" type="button" class="btn btn-primary btn-square btn-raised">All</button>
                            </li>
                            <li>
                                <button data-filter=".completed" type="button" class="btn btn-primary btn-square btn-raised">Completed</button>
                            </li>
                            <li>
                                <button data-filter=".kyc" type="button" class="btn btn-primary btn-square btn-raised">KYC Providers </button>
                            </li>

                            <li>
                                <button data-filter=".lending" type="button" class="btn btn-primary btn-square btn-raised">Lending </button>
                            </li>
                            <li>
                                <button data-filter=".payments" type="button" class="btn btn-primary btn-square btn-raised">Payments </button>
                            </li>
                            <li>
                                <button data-filter=".pfm" type="button" class="btn btn-primary btn-square btn-raised">Personal Finance Management </button>
                            </li>
                            <li>
                                <button data-filter=".wealth" type="button" class="btn btn-primary btn-square btn-raised">Wealth Management</button>
                            </li>
                            <li>
                                <button data-filter=".fx" type="button" class="btn btn-primary btn-square btn-raised">FX Services </button>
                            </li>
                            <li>
                                <button data-filter=".mdp" type="button" class="btn btn-primary btn-square btn-raised">Market Data Providers </button>
                            </li>

                            <li style="padding-top:20px;">
                                <button data-filter=".exchanges" type="button" class="btn btn-primary btn-square btn-raised">Exchanges  </button>
                            </li>
                            <li>
                                <button data-filter=".millenial" type="button" class="btn btn-primary btn-square btn-raised">Millennial Banking </button>
                            </li>
                            <li>
                                <button data-filter=".sandboxes" type="button" class="btn btn-primary btn-square btn-raised">Sandboxes</button>
                            </li>
                            <li>
                                <button data-filter=".Others" type="button" class="btn btn-primary btn-square btn-raised">Others</button>
                            </li>
-->
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <!-- data-scrollreveal="enter bottom over 0.0s"> -->
                    <div id="cardsection" class="isotope"></div>
                </div>
            </div>
        </section>

        <section class="screen-cta text-center bg-orange">
            <div class="container">
                <div class="row" style="margin-top: -80px">
                    <div class="col-lg-12">
                        <h2 style="color:white">REGISTER your APIs in our store !!! </h2>
                        <hr class="light">

                        <div data-scrollreveal="enter bottom move 800px over 1.5s">
                            <a href="http://vp-fintech.com/dokuwiki/doku.php?id=howtoregisteranapi" class="portfolio-link" style="margin-top: 800px;">
                                <img src="assets/img/call-to-action/API2.png" alt="" style="height: 80vh; padding-bottom:20px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-3 bg-lighter text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h2>About Us</h2>
                        <hr class="orange">
                        <p class="ash-bg">
                            At Virtusa, we have leveraged our deep understanding of the banking domain and the core engineering capabilities to set up a Fintech Lab which can assist banks in navigating these challenging times. Smart bank solutions are backed by a comprehensive data model that enables serious experimentation which includes 10M Retail Customers, 40M Transactions (Payments, Cards), 300K Wealth Management Clients, 100K Corporate Clients and is compatible with IoT and Cryptography scenarios. For SmartBank solutions it is necessary to provide APIs which can be used to expose various data, as real data can be a vital part of a solution where the functionalities can be analyzed using this real data. It will mimic a real environment of a bank so that the solution can be tested in a client-like environment. This developer portal provides you with an environment to register, publish, rate and discuss APIs.
                        </p>
                    </div>

                    <div class="col-lg-3 col-lg-offset-1 col-md-6">
                        <h2>Our Team</h2>
                        <hr class="orange">
                        <img src="assets/img/demo-portraits/portrait-1.png" style="padding-top:30px">
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-1 ash-background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-scrollreveal="enter left over 1.5s">
                        <h2>vInnovate</h2>
                        <p class="ash-bg">Let's contribute to the Developer Portal!</p>
                        <p class="ash-bg">vInnovate provides a way for the clients of Virtusa to create challenges or simply specify their problems, employees of Virtusa will be responding with ideas to solve the problem, and then the idea will be put into a collaborative environment where others can vote on the idea using likes and others can comment and develop the idea.</p>
                        <!--<p style="color:#7b7b7b">Try it out <a target="_blank" href="register_cicd.html" style="color: #f58025;">here</a>.</p>-->
                        <p>Come join us at <a href="http://vinnovate/Home.aspx">vInnovate</a></p>
                    </div>

                    <div class="col-xs-10 col-lg-5 col-xs-offset-1 col-lg-offset-1" data-scrollreveal="enter right over 1.5s">
                        <br/>
                        <h2>Contact Us</h2>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br/>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-square btn-raised" id="contactSubmit">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-1">
            <div class="upper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-10 col-sm-4 col-xs-offset-1">
                            <img id="foorterLogo" src="assets/img/V-logo.png">
                            <address style="margin-bottom: 0px;" id="foorterAddress">
                                <br>Dr. Danister De Silva Mw,
                                <br>Colombo 09.
                                <br>
                                <abbr title="Phone">P :</abbr> (011) 4605500
                            </address>
                        </div>
                        <div class="col-xs-10 col-sm-4 col-xs-offset-1 col-sm-offset-3">
                            <h4 style="padding-bottom: 0px; padding-top: 0px; margin-top: 10px; margin-bottom: 0px;" id="foorterSocialHead">Social</h4>
                            <ul style="margin-bottom: 0px;" id="foorterSociallogo" class="list-inline">
                                <li>
                                    <a href="http://www.facebook.com/VirtusaCorp" class="btn btn-social-light btn-facebook"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/VirtusaCorp" class="btn btn-social-light btn-twitter"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/+virtusa" class="btn btn-social-light btn-google-plus"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="small">Copyright &copy; 2017 - Virtusa Corporation. All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button">
            <!--            <i class="fa fa-chevron-up" aria-hidden="true"></i>-->
        </a>

    </div>

    <!-- Standard Portfolio Modal - Images and Text -->
    <div id="portfolio-modal-2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe id="video" width="560" height="315" data-play="0" src="https://www.youtube.com/embed/ccC1p5KvFOc?autoplay=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JavaScript Files -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>

    <!-- Plugin JavaScript Files -->
    <script src="assets/js/plugins/jquery.easing/jquery.easing.1.3.js"></script>
    <script src="assets/js/plugins/jquery.fitvids/jquery.fitvids.js"></script>
    <script src="assets/js/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.tubular/jquery.tubular.1.0.js"></script>
    <script src="assets/js/plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/scrollReveal/scrollReveal.js"></script>
    <script src="assets/js/plugins/stellar/stellar.js"></script>
    <script src="assets/js/plugins/SmoothScroll/SmoothScroll.js"></script>
    <script src="assets/js/plugins/jqBootstrapValidation/jqBootstrapValidation.js"></script>
    <script src="assets/js/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- Spectrum JavaScript Files -->
    <script src="assets/js/spectrum.nav.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/js/contact_me.js"></script>
    <script src="assets/js/spectrum.js"></script>
    <script src="assets/js/logout.js"></script>

</body>

</html>
