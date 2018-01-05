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

    <script src="assets/js/jquery/jquery-1.8.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/dd.css" />
    <script src="assets/js/jquery.dd.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/flags.css" />
    


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script> -->
    
    <script src='https://www.google.com/recaptcha/api.js'></script>

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


       $(document).ready(function() {
        $("#countries").msDropdown();
        })

         $(document).ready(function(){
                $("#btn-lgin").on("click", function Example1(event){
                   /***** Element 1 *****/
                        // Initialize Progress and show LoadingOverlay
                        
                        $("#page-top").LoadingOverlay("show", {
                            
                        });
                        // Simulate some action:
                        var count1  = 0;
                        var iid1	= setInterval(function(){
                            if (count1 >= 50) {
                                clearInterval(iid1);
                                
                                $("#page-top").LoadingOverlay("hide");
                                return;
                            }
                            count1++;
                            
                        }, 50);
                   
                    
                    
                   
                });
            });


    </script>

    <style>
        /*######################## LOGIN/SIGNUP PAGE START ##################################*/

        .at-login-form .btn-lgin {
            display: inline-block;
            padding: 18px 20px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: none;
            background-color: #134f8a;
            width: 100%;
            margin-top: 10px;
            color: #fff;
        }

        .at-login-form .signup-or-separator {
            background: none;
            height: 34px;
            position: relative;
            text-align: center;
        }

        .at-login-form .signup-or-separator--text {
            background-color: #fff;
            display: inline-block;
            padding: 8px;
        }

        .at-login-form .h6 {
            font-size: 14px;
            font-weight: bold;
            color: #757575;
            line-height: 1.1;
            text-rendering: optimizelegibility;
        }

        .at-login-form .signup-or-separator hr {
            margin: -25px auto 10px;
            width: 100%;
        }

        .at-login-form .form-control-form {
            display: block;
            width: 100%;
            height: 54px;
            padding: 15px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 0px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            margin-top: 3px;
        }

        .at-login-form .frgt-pswd {
            margin: 5px 0 10px;
            color: red;
        }

        .at-login-form .btn-gst {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            color: #ffffff;
            border: none;
            background-color: #1DB9EC;
        }

        .at-login-form .ta-l {
            text-align: left;
            margin-top: 5px;
        }

        .at-login-form .modal-dialog {
            width: 500px;
            margin: 30px auto;
            overflow-y: visible;
        }

        .at-login-form .modal-content {
            padding: 0px 10px;
            overflow-y: visible !important;
        }

        .at-login-form .modal-body {

            padding: 10px 10px;
            border-bottom: 0px solid #e5e5e5;

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

                <!-- Collect the nav links, forms, and other content for toggling
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">-->

                <div id="navbar" class="navbar-collapse collapse">
                    <form class="form-inline">

                        <ul class="nav navbar-nav navbar-right bdr">
                            <li><a href="#" data-toggle="modal" data-target="#at-login">Login</a></li>
                            <li><a href="register.php" onclick="window.open('register.php'),'_blank'" data-toggle="modal" >Register</a></li>
                        </ul>
                    </form>

                </div>

            </div>

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

    </div>
    <!--/.nav-collapse -->
    </div>
    </nav>
    </header>
    <section class="at-login-form">

        <div class="modal fade" id="at-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="login-modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="signup-or-separator">
                            <span class="h6 signup-or-separator--text">Login</span>

                            <hr>
                        </div>
                        <br>

                        <form id="login-form" name="login-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="userName" id="userName" placeholder="Username" required oninvalid="this.setCustomValidity('This field should not be left blank')">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required oninvalid="this.setCustomValidity('This field should not be left blank')">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-md-offset-2">
                                    <p class="frgt-pswd" data-toggle="modal" data-dismiss="modal" data-target="#at-reset-pswd"><a href="#">Forgot Password?</a></p>
                                </div>
                            </div>
                            <button type="submit" class="btn-lgin" id="btn-lgin" onclick="checkValidity()" data-backdrop="static">Login</button>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ta-l">Don't have an account ? </p>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" id="register-button" >Register</a> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL SIGNUP-->
        <!-- <div class="modal fade" id="at-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">

                                    <button type="submit" class="btn-lgin" data-toggle="modal"  data-dismiss="modal" data-target="#at-signup-filling">Register with Email</button> <hr>
												<p><By signing up,> I agree to Virtusa <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a>, <a href="#">Guest Refund Policy</a>, and <a href="#">Host Guarantee Terms</a>. </p>
											</div>
											<div class="modal-footer">
												<div class="row">
													<div class="col-md-6">
														<p class="ta-l">Already a Member? </p>
													</div>
													<div class="col-md-4 col-md-offset-2">
														<button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-login">Login</button>
													</div>
												</div>
											</div>
										</div>
									</div>
                                </div> -->
        <!-- MODAL SIGNUP FORM FILLING-->
        <!-- <div class="modal fade" id="at-signup-filling" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="signup-or-separator">
                            <span class="h6 signup-or-separator--text">Register</span>


                            <hr>
                        </div>
                        <br/>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control " id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control " id="reenterpassword" placeholder="Re-type Password">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control " id="emailid" placeholder="Email Address">
                            </div>
                            <div class="form-group" >
                                <select class="form-control" id="title">
                                    <label>Title</label><br>
                                    <option value="Mr">Mr</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                    <option value="Rev">Rev</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="firstname" placeholder="Fore Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " id="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="middlename" placeholder="Middle Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="prefferedname" placeholder="Preferred Name">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="sex">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label><br>
                                <input type="date" class="form-control " id="dateofbirth" placeholder="Date of birth">
                            </div>
                            <div class="form-group">
                                <a>Select Country</a><br>
                                    <select name="countries" class="form-control" id="countries" style="width:300px;">
                                        <option value=selectcountry data-title="Select Country" selected>-- Select Your Country --</option>
                                        <option value='ad' data-image="assets/images/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="assets/images/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="assets/images/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="assets/images/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="assets/images/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="assets/images/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="assets/images/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="assets/images/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value='ao' data-image="assets/images/icons/blank.gif" data-imagecss="flag ao" data-title="Angola">Angola</option>
                                        <option value='aq' data-image="assets/images/icons/blank.gif" data-imagecss="flag aq" data-title="Antarctica">Antarctica</option>
                                        <option value='ar' data-image="assets/images/icons/blank.gif" data-imagecss="flag ar" data-title="Argentina">Argentina</option>
                                        <option value='as' data-image="assets/images/icons/blank.gif" data-imagecss="flag as" data-title="American Samoa">American Samoa</option>
                                        <option value='at' data-image="assets/images/icons/blank.gif" data-imagecss="flag at" data-title="Austria">Austria</option>
                                        <option value='au' data-image="assets/images/icons/blank.gif" data-imagecss="flag au" data-title="Australia">Australia</option>
                                        <option value='aw' data-image="assets/images/icons/blank.gif" data-imagecss="flag aw" data-title="Aruba">Aruba</option>
                                        <option value='ax' data-image="assets/images/icons/blank.gif" data-imagecss="flag ax" data-title="Aland Islands">Aland Islands</option>
                                        <option value='az' data-image="assets/images/icons/blank.gif" data-imagecss="flag az" data-title="Azerbaijan">Azerbaijan</option>
                                        <option value='ba' data-image="assets/images/icons/blank.gif" data-imagecss="flag ba" data-title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value='bb' data-image="assets/images/icons/blank.gif" data-imagecss="flag bb" data-title="Barbados">Barbados</option>
                                        <option value='bd' data-image="assets/images/icons/blank.gif" data-imagecss="flag bd" data-title="Bangladesh">Bangladesh</option>
                                        <option value='be' data-image="assets/images/icons/blank.gif" data-imagecss="flag be" data-title="Belgium">Belgium</option>
                                        <option value='bf' data-image="assets/images/icons/blank.gif" data-imagecss="flag bf" data-title="Burkina Faso">Burkina Faso</option>
                                        <option value='bg' data-image="assets/images/icons/blank.gif" data-imagecss="flag bg" data-title="Bulgaria">Bulgaria</option>
                                        <option value='bh' data-image="assets/images/icons/blank.gif" data-imagecss="flag bh" data-title="Bahrain">Bahrain</option>
                                        <option value='bi' data-image="assets/images/icons/blank.gif" data-imagecss="flag bi" data-title="Burundi">Burundi</option>
                                        <option value='bj' data-image="assets/images/icons/blank.gif" data-imagecss="flag bj" data-title="Benin">Benin</option>
                                        <option value='bm' data-image="assets/images/icons/blank.gif" data-imagecss="flag bm" data-title="Bermuda">Bermuda</option>
                                        <option value='bn' data-image="assets/images/icons/blank.gif" data-imagecss="flag bn" data-title="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value='bo' data-image="assets/images/icons/blank.gif" data-imagecss="flag bo" data-title="Bolivia">Bolivia</option>
                                        <option value='br' data-image="assets/images/icons/blank.gif" data-imagecss="flag br" data-title="Brazil">Brazil</option>
                                        <option value='bs' data-image="assets/images/icons/blank.gif" data-imagecss="flag bs" data-title="Bahamas">Bahamas</option>
                                        <option value='bt' data-image="assets/images/icons/blank.gif" data-imagecss="flag bt" data-title="Bhutan">Bhutan</option>
                                        <option value='bv' data-image="assets/images/icons/blank.gif" data-imagecss="flag bv" data-title="Bouvet Island">Bouvet Island</option>
                                        <option value='bw' data-image="assets/images/icons/blank.gif" data-imagecss="flag bw" data-title="Botswana">Botswana</option>
                                        <option value='by' data-image="assets/images/icons/blank.gif" data-imagecss="flag by" data-title="Belarus">Belarus</option>
                                        <option value='bz' data-image="assets/images/icons/blank.gif" data-imagecss="flag bz" data-title="Belize">Belize</option>
                                        <option value='ca' data-image="assets/images/icons/blank.gif" data-imagecss="flag ca" data-title="Canada">Canada</option>
                                        <option value='cc' data-image="assets/images/icons/blank.gif" data-imagecss="flag cc" data-title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value='cd' data-image="assets/images/icons/blank.gif" data-imagecss="flag cd" data-title="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                        <option value='cf' data-image="assets/images/icons/blank.gif" data-imagecss="flag cf" data-title="Central African Republic">Central African Republic</option>
                                        <option value='cg' data-image="assets/images/icons/blank.gif" data-imagecss="flag cg" data-title="Congo">Congo</option>
                                        <option value='ch' data-image="assets/images/icons/blank.gif" data-imagecss="flag ch" data-title="Switzerland">Switzerland</option>
                                        <option value='ci' data-image="assets/images/icons/blank.gif" data-imagecss="flag ci" data-title="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
                                        <option value='ck' data-image="assets/images/icons/blank.gif" data-imagecss="flag ck" data-title="Cook Islands">Cook Islands</option>
                                        <option value='cl' data-image="assets/images/icons/blank.gif" data-imagecss="flag cl" data-title="Chile">Chile</option>
                                        <option value='cm' data-image="assets/images/icons/blank.gif" data-imagecss="flag cm" data-title="Cameroon">Cameroon</option>
                                        <option value='cn' data-image="assets/images/icons/blank.gif" data-imagecss="flag cn" data-title="China">China</option>
                                        <option value='co' data-image="assets/images/icons/blank.gif" data-imagecss="flag co" data-title="Colombia">Colombia</option>
                                        <option value='cr' data-image="assets/images/icons/blank.gif" data-imagecss="flag cr" data-title="Costa Rica">Costa Rica</option>
                                        <option value='cs' data-image="assets/images/icons/blank.gif" data-imagecss="flag cs" data-title="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value='cu' data-image="assets/images/icons/blank.gif" data-imagecss="flag cu" data-title="Cuba">Cuba</option>
                                        <option value='cv' data-image="assets/images/icons/blank.gif" data-imagecss="flag cv" data-title="Cape Verde">Cape Verde</option>
                                        <option value='cx' data-image="assets/images/icons/blank.gif" data-imagecss="flag cx" data-title="Christmas Island">Christmas Island</option>
                                        <option value='cy' data-image="assets/images/icons/blank.gif" data-imagecss="flag cy" data-title="Cyprus">Cyprus</option>
                                        <option value='cz' data-image="assets/images/icons/blank.gif" data-imagecss="flag cz" data-title="Czech Republic">Czech Republic</option>
                                        <option value='de' data-image="assets/images/icons/blank.gif" data-imagecss="flag de" data-title="Germany">Germany</option>
                                        <option value='dj' data-image="assets/images/icons/blank.gif" data-imagecss="flag dj" data-title="Djibouti">Djibouti</option>
                                        <option value='dk' data-image="assets/images/icons/blank.gif" data-imagecss="flag dk" data-title="Denmark">Denmark</option>
                                        <option value='dm' data-image="assets/images/icons/blank.gif" data-imagecss="flag dm" data-title="Dominica">Dominica</option>
                                        <option value='do' data-image="assets/images/icons/blank.gif" data-imagecss="flag do" data-title="Dominican Republic">Dominican Republic</option>
                                        <option value='dz' data-image="assets/images/icons/blank.gif" data-imagecss="flag dz" data-title="Algeria">Algeria</option>
                                        <option value='ec' data-image="assets/images/icons/blank.gif" data-imagecss="flag ec" data-title="Ecuador">Ecuador</option>
                                        <option value='ee' data-image="assets/images/icons/blank.gif" data-imagecss="flag ee" data-title="Estonia">Estonia</option>
                                        <option value='eg' data-image="assets/images/icons/blank.gif" data-imagecss="flag eg" data-title="Egypt">Egypt</option>
                                        <option value='eh' data-image="assets/images/icons/blank.gif" data-imagecss="flag eh" data-title="Western Sahara">Western Sahara</option>
                                        <option value='er' data-image="assets/images/icons/blank.gif" data-imagecss="flag er" data-title="Eritrea">Eritrea</option>
                                        <option value='es' data-image="assets/images/icons/blank.gif" data-imagecss="flag es" data-title="Spain">Spain</option>
                                        <option value='et' data-image="assets/images/icons/blank.gif" data-imagecss="flag et" data-title="Ethiopia">Ethiopia</option>
                                        <option value='fi' data-image="assets/images/icons/blank.gif" data-imagecss="flag fi" data-title="Finland">Finland</option>
                                        <option value='fj' data-image="assets/images/icons/blank.gif" data-imagecss="flag fj" data-title="Fiji">Fiji</option>
                                        <option value='fk' data-image="assets/images/icons/blank.gif" data-imagecss="flag fk" data-title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value='fm' data-image="assets/images/icons/blank.gif" data-imagecss="flag fm" data-title="Federated States of Micronesia">Federated States of Micronesia</option>
                                        <option value='fo' data-image="assets/images/icons/blank.gif" data-imagecss="flag fo" data-title="Faroe Islands">Faroe Islands</option>
                                        <option value='fr' data-image="assets/images/icons/blank.gif" data-imagecss="flag fr" data-title="France">France</option>
                                        <option value='fx' data-image="assets/images/icons/blank.gif" data-imagecss="flag fx" data-title="France, Metropolitan">France, Metropolitan</option>
                                        <option value='ga' data-image="assets/images/icons/blank.gif" data-imagecss="flag ga" data-title="Gabon">Gabon</option>
                                        <option value='gb' data-image="assets/images/icons/blank.gif" data-imagecss="flag gb" data-title="Great Britain (UK)">Great Britain (UK)</option>
                                        <option value='gd' data-image="assets/images/icons/blank.gif" data-imagecss="flag gd" data-title="Grenada">Grenada</option>
                                        <option value='ge' data-image="assets/images/icons/blank.gif" data-imagecss="flag ge" data-title="Georgia">Georgia</option>
                                        <option value='gf' data-image="assets/images/icons/blank.gif" data-imagecss="flag gf" data-title="French Guiana">French Guiana</option>
                                        <option value='gh' data-image="assets/images/icons/blank.gif" data-imagecss="flag gh" data-title="Ghana">Ghana</option>
                                        <option value='gi' data-image="assets/images/icons/blank.gif" data-imagecss="flag gi" data-title="Gibraltar">Gibraltar</option>
                                        <option value='gl' data-image="assets/images/icons/blank.gif" data-imagecss="flag gl" data-title="Greenland">Greenland</option>
                                        <option value='gm' data-image="assets/images/icons/blank.gif" data-imagecss="flag gm" data-title="Gambia">Gambia</option>
                                        <option value='gn' data-image="assets/images/icons/blank.gif" data-imagecss="flag gn" data-title="Guinea">Guinea</option>
                                        <option value='gp' data-image="assets/images/icons/blank.gif" data-imagecss="flag gp" data-title="Guadeloupe">Guadeloupe</option>
                                        <option value='gq' data-image="assets/images/icons/blank.gif" data-imagecss="flag gq" data-title="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value='gr' data-image="assets/images/icons/blank.gif" data-imagecss="flag gr" data-title="Greece">Greece</option>
                                        <option value='gs' data-image="assets/images/icons/blank.gif" data-imagecss="flag gs" data-title="S. Georgia and S. Sandwich Islands">S. Georgia and S. Sandwich Islands</option>
                                        <option value='gt' data-image="assets/images/icons/blank.gif" data-imagecss="flag gt" data-title="Guatemala">Guatemala</option>
                                        <option value='gu' data-image="assets/images/icons/blank.gif" data-imagecss="flag gu" data-title="Guam">Guam</option>
                                        <option value='gw' data-image="assets/images/icons/blank.gif" data-imagecss="flag gw" data-title="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value='gy' data-image="assets/images/icons/blank.gif" data-imagecss="flag gy" data-title="Guyana">Guyana</option>
                                        <option value='hk' data-image="assets/images/icons/blank.gif" data-imagecss="flag hk" data-title="Hong Kong">Hong Kong</option>
                                        <option value='hm' data-image="assets/images/icons/blank.gif" data-imagecss="flag hm" data-title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                        <option value='hn' data-image="assets/images/icons/blank.gif" data-imagecss="flag hn" data-title="Honduras">Honduras</option>
                                        <option value='hr' data-image="assets/images/icons/blank.gif" data-imagecss="flag hr" data-title="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                        <option value='ht' data-image="assets/images/icons/blank.gif" data-imagecss="flag ht" data-title="Haiti">Haiti</option>
                                        <option value='hu' data-image="assets/images/icons/blank.gif" data-imagecss="flag hu" data-title="Hungary">Hungary</option>
                                        <option value='id' data-image="assets/images/icons/blank.gif" data-imagecss="flag id" data-title="Indonesia">Indonesia</option>
                                        <option value='ie' data-image="assets/images/icons/blank.gif" data-imagecss="flag ie" data-title="Ireland">Ireland</option>
                                        <option value='il' data-image="assets/images/icons/blank.gif" data-imagecss="flag il" data-title="Israel">Israel</option>
                                        <option value='in' data-image="assets/images/icons/blank.gif" data-imagecss="flag in" data-title="India">India</option>
                                        <option value='io' data-image="assets/images/icons/blank.gif" data-imagecss="flag io" data-title="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value='iq' data-image="assets/images/icons/blank.gif" data-imagecss="flag iq" data-title="Iraq">Iraq</option>
                                        <option value='ir' data-image="assets/images/icons/blank.gif" data-imagecss="flag ir" data-title="Iran">Iran</option>
                                        <option value='is' data-image="assets/images/icons/blank.gif" data-imagecss="flag is" data-title="Iceland">Iceland</option>
                                        <option value='it' data-image="assets/images/icons/blank.gif" data-imagecss="flag it" data-title="Italy">Italy</option>
                                        <option value='jm' data-image="assets/images/icons/blank.gif" data-imagecss="flag jm" data-title="Jamaica">Jamaica</option>
                                        <option value='jo' data-image="assets/images/icons/blank.gif" data-imagecss="flag jo" data-title="Jordan">Jordan</option>
                                        <option value='jp' data-image="assets/images/icons/blank.gif" data-imagecss="flag jp" data-title="Japan">Japan</option>
                                        <option value='ke' data-image="assets/images/icons/blank.gif" data-imagecss="flag ke" data-title="Kenya">Kenya</option>
                                        <option value='kg' data-image="assets/images/icons/blank.gif" data-imagecss="flag kg" data-title="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value='kh' data-image="assets/images/icons/blank.gif" data-imagecss="flag kh" data-title="Cambodia">Cambodia</option>
                                        <option value='ki' data-image="assets/images/icons/blank.gif" data-imagecss="flag ki" data-title="Kiribati">Kiribati</option>
                                        <option value='km' data-image="assets/images/icons/blank.gif" data-imagecss="flag km" data-title="Comoros">Comoros</option>
                                        <option value='kn' data-image="assets/images/icons/blank.gif" data-imagecss="flag kn" data-title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value='kp' data-image="assets/images/icons/blank.gif" data-imagecss="flag kp" data-title="Korea (North)">Korea (North)</option>
                                        <option value='kr' data-image="assets/images/icons/blank.gif" data-imagecss="flag kr" data-title="Korea (South)">Korea (South)</option>
                                        <option value='kw' data-image="assets/images/icons/blank.gif" data-imagecss="flag kw" data-title="Kuwait">Kuwait</option>
                                        <option value='ky' data-image="assets/images/icons/blank.gif" data-imagecss="flag ky" data-title="Cayman Islands">Cayman Islands</option>
                                        <option value='kz' data-image="assets/images/icons/blank.gif" data-imagecss="flag kz" data-title="Kazakhstan">Kazakhstan</option>
                                        <option value='la' data-image="assets/images/icons/blank.gif" data-imagecss="flag la" data-title="Laos">Laos</option>
                                        <option value='lb' data-image="assets/images/icons/blank.gif" data-imagecss="flag lb" data-title="Lebanon">Lebanon</option>
                                        <option value='lc' data-image="assets/images/icons/blank.gif" data-imagecss="flag lc" data-title="Saint Lucia">Saint Lucia</option>
                                        <option value='li' data-image="assets/images/icons/blank.gif" data-imagecss="flag li" data-title="Liechtenstein">Liechtenstein</option>
                                        <option value='lk' data-image="assets/images/icons/blank.gif" data-imagecss="flag lk" data-title="Sri Lanka">Sri Lanka</option>
                                        <option value='lr' data-image="assets/images/icons/blank.gif" data-imagecss="flag lr" data-title="Liberia">Liberia</option>
                                        <option value='ls' data-image="assets/images/icons/blank.gif" data-imagecss="flag ls" data-title="Lesotho">Lesotho</option>
                                        <option value='lt' data-image="assets/images/icons/blank.gif" data-imagecss="flag lt" data-title="Lithuania">Lithuania</option>
                                        <option value='lu' data-image="assets/images/icons/blank.gif" data-imagecss="flag lu" data-title="Luxembourg">Luxembourg</option>
                                        <option value='lv' data-image="assets/images/icons/blank.gif" data-imagecss="flag lv" data-title="Latvia">Latvia</option>
                                        <option value='ly' data-image="assets/images/icons/blank.gif" data-imagecss="flag ly" data-title="Libya">Libya</option>
                                        <option value='ma' data-image="assets/images/icons/blank.gif" data-imagecss="flag ma" data-title="Morocco">Morocco</option>
                                        <option value='mc' data-image="assets/images/icons/blank.gif" data-imagecss="flag mc" data-title="Monaco">Monaco</option>
                                        <option value='md' data-image="assets/images/icons/blank.gif" data-imagecss="flag md" data-title="Moldova">Moldova</option>
                                        <option value='mg' data-image="assets/images/icons/blank.gif" data-imagecss="flag mg" data-title="Madagascar">Madagascar</option>
                                        <option value='mh' data-image="assets/images/icons/blank.gif" data-imagecss="flag mh" data-title="Marshall Islands">Marshall Islands</option>
                                        <option value='mk' data-image="assets/images/icons/blank.gif" data-imagecss="flag mk" data-title="Macedonia">Macedonia</option>
                                        <option value='ml' data-image="assets/images/icons/blank.gif" data-imagecss="flag ml" data-title="Mali">Mali</option>
                                        <option value='mm' data-image="assets/images/icons/blank.gif" data-imagecss="flag mm" data-title="Myanmar">Myanmar</option>
                                        <option value='mn' data-image="assets/images/icons/blank.gif" data-imagecss="flag mn" data-title="Mongolia">Mongolia</option>
                                        <option value='mo' data-image="assets/images/icons/blank.gif" data-imagecss="flag mo" data-title="Macao">Macao</option>
                                        <option value='mp' data-image="assets/images/icons/blank.gif" data-imagecss="flag mp" data-title="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value='mq' data-image="assets/images/icons/blank.gif" data-imagecss="flag mq" data-title="Martinique">Martinique</option>
                                        <option value='mr' data-image="assets/images/icons/blank.gif" data-imagecss="flag mr" data-title="Mauritania">Mauritania</option>
                                        <option value='ms' data-image="assets/images/icons/blank.gif" data-imagecss="flag ms" data-title="Montserrat">Montserrat</option>
                                        <option value='mt' data-image="assets/images/icons/blank.gif" data-imagecss="flag mt" data-title="Malta">Malta</option>
                                        <option value='mu' data-image="assets/images/icons/blank.gif" data-imagecss="flag mu" data-title="Mauritius">Mauritius</option>
                                        <option value='mv' data-image="assets/images/icons/blank.gif" data-imagecss="flag mv" data-title="Maldives">Maldives</option>
                                        <option value='mw' data-image="assets/images/icons/blank.gif" data-imagecss="flag mw" data-title="Malawi">Malawi</option>
                                        <option value='mx' data-image="assets/images/icons/blank.gif" data-imagecss="flag mx" data-title="Mexico">Mexico</option>
                                        <option value='my' data-image="assets/images/icons/blank.gif" data-imagecss="flag my" data-title="Malaysia">Malaysia</option>
                                        <option value='mz' data-image="assets/images/icons/blank.gif" data-imagecss="flag mz" data-title="Mozambique">Mozambique</option>
                                        <option value='na' data-image="assets/images/icons/blank.gif" data-imagecss="flag na" data-title="Namibia">Namibia</option>
                                        <option value='nc' data-image="assets/images/icons/blank.gif" data-imagecss="flag nc" data-title="New Caledonia">New Caledonia</option>
                                        <option value='ne' data-image="assets/images/icons/blank.gif" data-imagecss="flag ne" data-title="Niger">Niger</option>
                                        <option value='nf' data-image="assets/images/icons/blank.gif" data-imagecss="flag nf" data-title="Norfolk Island">Norfolk Island</option>
                                        <option value='ng' data-image="assets/images/icons/blank.gif" data-imagecss="flag ng" data-title="Nigeria">Nigeria</option>
                                        <option value='ni' data-image="assets/images/icons/blank.gif" data-imagecss="flag ni" data-title="Nicaragua">Nicaragua</option>
                                        <option value='nl' data-image="assets/images/icons/blank.gif" data-imagecss="flag nl" data-title="Netherlands">Netherlands</option>
                                        <option value='no' data-image="assets/images/icons/blank.gif" data-imagecss="flag no" data-title="Norway">Norway</option>
                                        <option value='np' data-image="assets/images/icons/blank.gif" data-imagecss="flag np" data-title="Nepal">Nepal</option>
                                        <option value='nr' data-image="assets/images/icons/blank.gif" data-imagecss="flag nr" data-title="Nauru">Nauru</option>
                                        <option value='nu' data-image="assets/images/icons/blank.gif" data-imagecss="flag nu" data-title="Niue">Niue</option>
                                        <option value='nz' data-image="assets/images/icons/blank.gif" data-imagecss="flag nz" data-title="New Zealand (Aotearoa)">New Zealand (Aotearoa)</option>
                                        <option value='om' data-image="assets/images/icons/blank.gif" data-imagecss="flag om" data-title="Oman">Oman</option>
                                        <option value='pa' data-image="assets/images/icons/blank.gif" data-imagecss="flag pa" data-title="Panama">Panama</option>
                                        <option value='pe' data-image="assets/images/icons/blank.gif" data-imagecss="flag pe" data-title="Peru">Peru</option>
                                        <option value='pf' data-image="assets/images/icons/blank.gif" data-imagecss="flag pf" data-title="French Polynesia">French Polynesia</option>
                                        <option value='pg' data-image="assets/images/icons/blank.gif" data-imagecss="flag pg" data-title="Papua New Guinea">Papua New Guinea</option>
                                        <option value='ph' data-image="assets/images/icons/blank.gif" data-imagecss="flag ph" data-title="Philippines">Philippines</option>
                                        <option value='pk' data-image="assets/images/icons/blank.gif" data-imagecss="flag pk" data-title="Pakistan">Pakistan</option>
                                        <option value='pl' data-image="assets/images/icons/blank.gif" data-imagecss="flag pl" data-title="Poland">Poland</option>
                                        <option value='pm' data-image="assets/images/icons/blank.gif" data-imagecss="flag pm" data-title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value='pn' data-image="assets/images/icons/blank.gif" data-imagecss="flag pn" data-title="Pitcairn">Pitcairn</option>
                                        <option value='pr' data-image="assets/images/icons/blank.gif" data-imagecss="flag pr" data-title="Puerto Rico">Puerto Rico</option>
                                        <option value='ps' data-image="assets/images/icons/blank.gif" data-imagecss="flag ps" data-title="Palestinian Territory">Palestinian Territory</option>
                                        <option value='pt' data-image="assets/images/icons/blank.gif" data-imagecss="flag pt" data-title="Portugal">Portugal</option>
                                        <option value='pw' data-image="assets/images/icons/blank.gif" data-imagecss="flag pw" data-title="Palau">Palau</option>
                                        <option value='py' data-image="assets/images/icons/blank.gif" data-imagecss="flag py" data-title="Paraguay">Paraguay</option>
                                        <option value='qa' data-image="assets/images/icons/blank.gif" data-imagecss="flag qa" data-title="Qatar">Qatar</option>
                                        <option value='re' data-image="assets/images/icons/blank.gif" data-imagecss="flag re" data-title="Reunion">Reunion</option>
                                        <option value='ro' data-image="assets/images/icons/blank.gif" data-imagecss="flag ro" data-title="Romania">Romania</option>
                                        <option value='ru' data-image="assets/images/icons/blank.gif" data-imagecss="flag ru" data-title="Russian Federation">Russian Federation</option>
                                        <option value='rw' data-image="assets/images/icons/blank.gif" data-imagecss="flag rw" data-title="Rwanda">Rwanda</option>
                                        <option value='sa' data-image="assets/images/icons/blank.gif" data-imagecss="flag sa" data-title="Saudi Arabia">Saudi Arabia</option>
                                        <option value='sb' data-image="assets/images/icons/blank.gif" data-imagecss="flag sb" data-title="Solomon Islands">Solomon Islands</option>
                                        <option value='sc' data-image="assets/images/icons/blank.gif" data-imagecss="flag sc" data-title="Seychelles">Seychelles</option>
                                        <option value='sd' data-image="assets/images/icons/blank.gif" data-imagecss="flag sd" data-title="Sudan">Sudan</option>
                                        <option value='se' data-image="assets/images/icons/blank.gif" data-imagecss="flag se" data-title="Sweden">Sweden</option>
                                        <option value='sg' data-image="assets/images/icons/blank.gif" data-imagecss="flag sg" data-title="Singapore">Singapore</option>
                                        <option value='sh' data-image="assets/images/icons/blank.gif" data-imagecss="flag sh" data-title="Saint Helena">Saint Helena</option>
                                        <option value='si' data-image="assets/images/icons/blank.gif" data-imagecss="flag si" data-title="Slovenia">Slovenia</option>
                                        <option value='sj' data-image="assets/images/icons/blank.gif" data-imagecss="flag sj" data-title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value='sk' data-image="assets/images/icons/blank.gif" data-imagecss="flag sk" data-title="Slovakia">Slovakia</option>
                                        <option value='sl' data-image="assets/images/icons/blank.gif" data-imagecss="flag sl" data-title="Sierra Leone">Sierra Leone</option>
                                        <option value='sm' data-image="assets/images/icons/blank.gif" data-imagecss="flag sm" data-title="San Marino">San Marino</option>
                                        <option value='sn' data-image="assets/images/icons/blank.gif" data-imagecss="flag sn" data-title="Senegal">Senegal</option>
                                        <option value='so' data-image="assets/images/icons/blank.gif" data-imagecss="flag so" data-title="Somalia">Somalia</option>
                                        <option value='sr' data-image="assets/images/icons/blank.gif" data-imagecss="flag sr" data-title="Suriname">Suriname</option>
                                        <option value='st' data-image="assets/images/icons/blank.gif" data-imagecss="flag st" data-title="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value='su' data-image="assets/images/icons/blank.gif" data-imagecss="flag su" data-title="USSR (former)">USSR (former)</option>
                                        <option value='sv' data-image="assets/images/icons/blank.gif" data-imagecss="flag sv" data-title="El Salvador">El Salvador</option>
                                        <option value='sy' data-image="assets/images/icons/blank.gif" data-imagecss="flag sy" data-title="Syria">Syria</option>
                                        <option value='sz' data-image="assets/images/icons/blank.gif" data-imagecss="flag sz" data-title="Swaziland">Swaziland</option>
                                        <option value='tc' data-image="assets/images/icons/blank.gif" data-imagecss="flag tc" data-title="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value='td' data-image="assets/images/icons/blank.gif" data-imagecss="flag td" data-title="Chad">Chad</option>
                                        <option value='tf' data-image="assets/images/icons/blank.gif" data-imagecss="flag tf" data-title="French Southern Territories">French Southern Territories</option>
                                        <option value='tg' data-image="assets/images/icons/blank.gif" data-imagecss="flag tg" data-title="Togo">Togo</option>
                                        <option value='th' data-image="assets/images/icons/blank.gif" data-imagecss="flag th" data-title="Thailand">Thailand</option>
                                        <option value='tj' data-image="assets/images/icons/blank.gif" data-imagecss="flag tj" data-title="Tajikistan">Tajikistan</option>
                                        <option value='tk' data-image="assets/images/icons/blank.gif" data-imagecss="flag tk" data-title="Tokelau">Tokelau</option>
                                        <option value='tl' data-image="assets/images/icons/blank.gif" data-imagecss="flag tl" data-title="Timor-Leste">Timor-Leste</option>
                                        <option value='tm' data-image="assets/images/icons/blank.gif" data-imagecss="flag tm" data-title="Turkmenistan">Turkmenistan</option>
                                        <option value='tn' data-image="assets/images/icons/blank.gif" data-imagecss="flag tn" data-title="Tunisia">Tunisia</option>
                                        <option value='to' data-image="assets/images/icons/blank.gif" data-imagecss="flag to" data-title="Tonga">Tonga</option>
                                        <option value='tp' data-image="assets/images/icons/blank.gif" data-imagecss="flag tp" data-title="East Timor">East Timor</option>
                                        <option value='tr' data-image="assets/images/icons/blank.gif" data-imagecss="flag tr" data-title="Turkey">Turkey</option>
                                        <option value='tt' data-image="assets/images/icons/blank.gif" data-imagecss="flag tt" data-title="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value='tv' data-image="assets/images/icons/blank.gif" data-imagecss="flag tv" data-title="Tuvalu">Tuvalu</option>
                                        <option value='tw' data-image="assets/images/icons/blank.gif" data-imagecss="flag tw" data-title="Taiwan">Taiwan</option>
                                        <option value='tz' data-image="assets/images/icons/blank.gif" data-imagecss="flag tz" data-title="Tanzania">Tanzania</option>
                                        <option value='ua' data-image="assets/images/icons/blank.gif" data-imagecss="flag ua" data-title="Ukraine">Ukraine</option>
                                        <option value='ug' data-image="assets/images/icons/blank.gif" data-imagecss="flag ug" data-title="Uganda">Uganda</option>
                                        <option value='uk' data-image="assets/images/icons/blank.gif" data-imagecss="flag uk" data-title="United Kingdom">United Kingdom</option>
                                        <option value='um' data-image="assets/images/icons/blank.gif" data-imagecss="flag um" data-title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value='us' data-image="assets/images/icons/blank.gif" data-imagecss="flag us" data-title="United States">United States</option>
                                        <option value='uy' data-image="assets/images/icons/blank.gif" data-imagecss="flag uy" data-title="Uruguay">Uruguay</option>
                                        <option value='uz' data-image="assets/images/icons/blank.gif" data-imagecss="flag uz" data-title="Uzbekistan">Uzbekistan</option>
                                        <option value='va' data-image="assets/images/icons/blank.gif" data-imagecss="flag va" data-title="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                        <option value='vc' data-image="assets/images/icons/blank.gif" data-imagecss="flag vc" data-title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value='ve' data-image="assets/images/icons/blank.gif" data-imagecss="flag ve" data-title="Venezuela">Venezuela</option>
                                        <option value='vg' data-image="assets/images/icons/blank.gif" data-imagecss="flag vg" data-title="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value='vi' data-image="assets/images/icons/blank.gif" data-imagecss="flag vi" data-title="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value='vn' data-image="assets/images/icons/blank.gif" data-imagecss="flag vn" data-title="Viet Nam">Viet Nam</option>
                                        <option value='vu' data-image="assets/images/icons/blank.gif" data-imagecss="flag vu" data-title="Vanuatu">Vanuatu</option>
                                        <option value='wf' data-image="assets/images/icons/blank.gif" data-imagecss="flag wf" data-title="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value='ws' data-image="assets/images/icons/blank.gif" data-imagecss="flag ws" data-title="Samoa">Samoa</option>
                                        <option value='ye' data-image="assets/images/icons/blank.gif" data-imagecss="flag ye" data-title="Yemen">Yemen</option>
                                        <option value='yt' data-image="assets/images/icons/blank.gif" data-imagecss="flag yt" data-title="Mayotte">Mayotte</option>
                                        <option value='yu' data-image="assets/images/icons/blank.gif" data-imagecss="flag yu" data-title="Yugoslavia (former)">Yugoslavia (former)</option>
                                        <option value='za' data-image="assets/images/icons/blank.gif" data-imagecss="flag za" data-title="South Africa">South Africa</option>
                                        <option value='zm' data-image="assets/images/icons/blank.gif" data-imagecss="flag zm" data-title="Zambia">Zambia</option>
                                        <option value='zr' data-image="assets/images/icons/blank.gif" data-imagecss="flag zr" data-title="Zaire (former)">Zaire (former)</option>
                                        <option value='zw' data-image="assets/images/icons/blank.gif" data-imagecss="flag zw" data-title="Zimbabwe">Zimbabwe</option>
                                    </select>

                            </div>
                            <div class="form-group">
                                <textarea type="text" class="input-large form-control" id="welcomeDiv" style="height:400px; resize: none;  margin-top: 30px; text-align: justify;" readonly>


                        Virtusa Commercial Tool License (V-TL)


BY INSTALLING, SHARING OR USING THE PROGRAM, LICENSEE AGREES TO THE TERMS OF THIS AGREEMENT. ONLY PARTIES (INCLUDING THEIR EMPLOYEES AND AUTHORIZED CONTRACTORS) WHO HAVE A MASTER SERVICES AGREEMENT AND/OR WORK ORDER (A “VIRTUSA CONTRACT”) EXECUTED WITH VIRTUSA CORPORATION (OR AN AFFILIATE THEREOF) ARE PERMITTED TO USE THIS PROGRAM. IF LICENSEE DOES NOT HAVE A VIRTUSA CONTRACT, LICENSEE IS NOT PERMITTED TO USE THIS PROGRAM.  IF LICENSEE IS ACCEPTING THESE TERMS ON BEHALF OF ANOTHER PERSON OR A COMPANY OR OTHER LEGAL ENTITY, LICENSEE REPRESENTS AND WARRANTS THAT LICENSEE HAS FULL AUTHORITY TO BIND THAT PERSON, COMPANY, OR LEGAL ENTITY TO THESE TERMS.

IF LICENSEE DOES NOT AGREE TO THESE TERMS, DO NOT INSTALL, COPY, SHARE, OR USE THE PROGRAM

1. 	Definitions

	a.	"Virtusa" means Virtusa Corporation or one of its subsidiaries.

	b.	"Program" means the Virtusa API Exchange Platform, including license use documents or keys, and application documentation provided with the product.

	c.	“Licensee” refers to an individual person or to a single legal entity (including employees or authorized contractor who is authorized to use the Program under the terms herein) who has accepted the terms of this Agreement and who has entered into a Virtusa Contract.

	d.	“End Users” shall mean those individuals who are employees or contractors of Licensee  authorized by Licensee to have access to the Products, subject to the term of this Agreement.


2. 	Grant of License; Ownership

	2.1	License Grant.  Subject to the terms and conditions of this Agreement, Virtusa hereby:

		a.	Grants to the Licensee a non-exclusive, non-transferable, license, without the right to sublicense, to use one copy of the server component of the Program in a designated server and solely for its internal business purposes.
		b.	To the extent that there is any third party software (i.e Open Source, Proprietary and otherwise) the Licensee agrees to abide by the terms stipulated in the licenses of such third party components and products.
Licensee acknowledges that it receives no right to license, distribute or sublicense the Product to customers or any third parties, except as expressly authorized in writing by Virtusa.  Licensee may transfer the Product to another computer owned by Licensee, provided, however, that Licensee removes all copies of the Product from the computer from which it is transferred.

	2.2 	 Ownership.  The Program is under the ownership of Virtusa Corporation. Virtusa retains all right, title and interest in the Program, including but not limited to any and all intellectual property rights in the Program and associated materials now owned or that may be owned in the future by Virtusa.

	2.3 	Restrictions.  All right, title and interest in the Product and all copies thereof shall at all times remain the property of Virtusa.  Licensee shall not and shall not permit others to: (i)&nbsp;reproduce or copy any Product except as expressly provided in this Agreement; (ii)&nbsp;remove any copyright, trademark or proprietary notice included in the Product; iii) make modifications to the application in any form to change the behavior of the product (iv)&nbsp; decompile, disassemble or reverse engineer the Product; (v) sublicense or host the Product in a commercial capacity; or (vi) transfer or license the Product to any customer, end-user or third party without the prior written consent of Virtusa.  Licensee shall not incorporate the Product in any product designed, developed, marketed, sold or licensed by Licensee without Virtusa’s consent.

	2.4.     Records.  Licensee will maintain a record of all copies of the Program and ensure that anyone who uses the Program (accessed either locally or remotely) does so only for Licensee’s authorized use and complies with the terms of the Virtusa Contract


3. Term and Termination.

Unless terminated earlier as set forth in this Agreement, the term of this Agreement is from the effective date through the termination of the Virtusa Contract to which this license relates or as explicitly stated when the license is granted.  This Agreement may be extended only with the written consent of Virtusa.  Each party may terminate this Agreement at any time upon three (3) days written notice to the other.  This Agreement shall terminate immediately if Licensee breaches any of the terms of this Agreement. Such license shall terminate immediately upon the termination or expiration of this License or the Virtusa Contract for any reason. In the event of termination due to whatever reasons, Licensee agrees to uninstall all copies of the program in use at the time of the termination.


4. 	Conditions and Limitations

	4.1	 No Other License- This license does not grant Licensee rights to use any Virtusa’s name, logo, or trademarks or any other intellectual property right of Virtusa unless expressly authorized by Virtusa.

	4.2 The program may regularly and securely send aggregate usage and license related information to Virtusa systems. No personally identifiable information will be transferred in this manner.

	4.3 Where the program is used to measure the quality of the Virtusa engagement with the licensee, the program will send aggregate quality metrics to Virtusa systems for the purpose of internal reporting and quality management.


5.	 No Warranty/Limitation of Liability

Disclaimer of Warranties and Risk of Use. THE PROGRAM IS PROVIDED “AS IS” AND LICENSEE BEARS ALL RISK IN USING SUCH PROGRAM. VIRTUSA MAKES NO EXPRESS OR IMPLIED REPRESENTATIONS OR WARRANTIES WHATSOEVER REGARDING THE PRODUCT.  BY WAY OF EXAMPLE, BUT NOT OF LIMITATION, VIRTUSA DISCLAIMS ALL CONDITIONS OF QUALITY AND ALL WARRANTIES, INCLUDING TITLE, NONINFRINGEMENT, MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.

Limitation of Liability.  LICENSEE AGREES THAT IN NO EVENT SHALL VIRTUSA BE LIABLE UNDER ANY THEORY OF LIABILITY (INCLUDING, BUT NOT LIMITED TO, BREACH OF CONTRACT, BREACH OF WARRANTY, TORT, NEGLIGENCE, STRICT LIABILITY, OR ANY OTHER THEORY OF LIABILITY) FOR&nbsp;DIRECT DAMAGES OR INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES SUCH AS, BUT NOT LIMITED TO, EQUIPMENT DOWN-TIME, LOSS OF DATA, EXEMPLARY OR PUNITIVE DAMAGES, OR ANY OTHER SIMILAR DAMAGES.


6) 	Confidentiality

	6.1 General.  Licensee acknowledges that in the course of the Virtusa Contract Licensee has been and shall be entrusted with certain Confidential Information (as defined in the Virtusa Contract) of the other and agrees that it shall use reasonable care to protect the confidentiality thereof, using at least the same measures it would use to protect its own similar, highly confidential information and shall not, except for the sole purposes to perform the Virtusa Contract, (a) use such Confidential Information for any purpose or (b) disclose any such Confidential Information to any person (except employees or agents on a need-to-know basis where such persons have agreed to be bound in writing to obligations of confidentiality), unless such disclosure is authorized by the other party in writing.   he obligations of Licensee under this Agreement shall not apply to information which (i) was generally known in the trade or business in which it is practiced by the receiving party at the time of disclosure, or becomes so generally known after such disclosure, through no act of the receiving party and otherwise than as a result of a breach of this Section; (ii) has come into the possession of the receiving party rightfully from a third party without obligation of confidentiality; (iii) was developed by the receiving party independently of and without reference to Confidential Information;  or (iv) is disclosed pursuant to any legal, judicial or arbitration or similar legal proceeding or as required by law; provided that the receiving party disclosing such information uses all reasonable efforts to protect the information as being confidential.


7.        Publicity Rights

	7.1 Licensee grants Virtusa the right to include licensee name and/or logo in a list of customers, which may be publicly displayed on Virtusa’s website and in promotional materials for Virtusa’s products together with other customers of Virtusa.

	7.2 Licensee may terminate the publicity right granted in section 7.1 above or request to be excluded from appearing in Virtusa’s public list of customers, website or promotional materials at any time by submitting a written request via email to: apibanking.virtusapolaris@gmail.com Virtusa shall comply with that termination or request within ten (10) business days from receipt of such notice.


8. 	General

	8.1 Equitable Relief.  Licensee hereby acknowledges that unauthorized disclosure or use of the Product would cause irreparable harm and significant injury to Virtusa that may be difficult to ascertain.  Licensee agrees that Virtusa will have the right to seek injunctive relief to enforce Licensee’s obligations under this Agreement in addition to any other rights and remedies Virtusa may have.

	8.2 	Export Restrictions.  Licensee agrees that Licensee will not, directly or indirectly, export, re-export, or transship the Product or any technical data received under this Agreement in any form without the appropriate United States and foreign government licenses.

	8.3 Miscellaneous. This Agreement may not be modified except by a writing executed by the duly authorized representatives of Virtusa and Licensee.  This Agreement and the licenses granted hereunder may not be assigned by Licensee without the prior express written consent of Virtusa.  This Agreement and the exhibit attached hereto contain the entire understanding of the parties with respect to the matters contained herein, and there are no promises, covenants or undertakings other than those expressly set forth herein.  This Agreement will be governed by Massachusetts law.




                        </textarea>
                            </div>



                            <div class="row">
                                <div class="col-md-12">

                                    <input type="checkbox"> I have read and agreed to the Terms and Conditions of Virtusa FinTech.
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Lc_iy4UAAAAALwLYGjGRxlj9ZYLTlaeF--eL6eJ"></div>
                            <button type="submit" class="btn-lgin">Signup</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="ta-l">Already a Member? </p>
                            </div>
                            <div class="col-md-4 col-md-offset-2">
                                <button class="btn-gst" data-toggle="modal" data-dismiss="modal" data-target="#at-login">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- MODAL SIGNUP FORM FILLING -->
        <!-- MODAL FORGOT PASSWORD -->
        <!-- <div class="modal fade" id="at-reset-pswd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <p> Enter the email address associated with your account, and we’ll email you a link to reset your password. </p>
                            <div class="form-group">

                                <input type="email" class="form-control" id="exampleInputEmaillog" placeholder="Email">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    </div>
    </div>
    </div> -->

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
    <script src="assets/js/loadingoverlay.min.js"></script>

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
    <script src="assets/js/sha256.js"></script>



    <!-- Spectrum JavaScript Files -->

    <script src="assets/js/spectrum.nav.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/js/login.js"></script>
    <script src="assets/js/spectrum_index.js"></script>


</body>

</html>
