<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
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

    <!-- Spectrum CSS -->
    <link href="assets/css/spectrum2.css" rel="stylesheet">
    <link href="assets/css/register.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="wrapper">

        <!--  Loading View      -->
        <div class="se-pre-con"></div>

        <!--  Ajax View      -->
        <div id="overlay-load"></div>

        <div id="wait" style="display : none; width : 69px; height : 89px; position : fixed; top : 50%; left : 50%; padding-bottom : 10px;">
            <img src='./assets/images/loader-64x/Preloader_2.gif' width="64" height="64" /><br>Loading..
        </div>

        <div class="overlayLoading"></div>

        <nav id="CICD" class="navbar-dark navbar-fixed-top top-nav-collapse" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll nav-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <span class="logo" >
                            <img class="logo-img" src="assets/img/logo.png">
                        </span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <section class="section" id="section">
                <div class="row">

                    <div class="thelogo col-md-5 col-sm-5 col-lg-5">
                        <img class="img" src="assets/img/demo-portraits/portrait-1.png" alt=""/>
                        <br/>
                        <h2>REGISTER NOW</h2>
                    </div>

                    <div class="verticalLine col-md-6 col-sm-6 col-lg-6" style="display: block;">
                        <form action="#" name="sentMessage" id="contactForm" style="padding-right: 15px;" method="post">
                            <legend>Registration Details</legend>
                            <input id='username' name='username' placeholder='Username' type='text' required  oninput="this.setCustomValidity('')" onkeyup="checkname()">

                            <input id='password' name='password' placeholder='Password' type='password' required oninput="this.setCustomValidity('')" onkeyup="checkPassword()">

                            <input id='confirm_password' name='confirm_password' placeholder='Re-type Password' type='password' required 
                                    oninput="this.setCustomValidity('')" onkeyup="checkConfirmPassword()">

                            <input id='email' name='email' placeholder='Email Address' type='email' required  oninput="this.setCustomValidity('')" onkeyup="checkemail()">

                            <input id='firstName' name='firstName' placeholder='First Name' type='text' required  oninvalid="this.setCustomValidity('Enter First Name Here')" oninput="this.setCustomValidity('')">

                            <input id='lastName' name='lastName' placeholder='Last Name' type='text' required  oninvalid="this.setCustomValidity('Enter Last Name Here')" oninput="this.setCustomValidity('')">

                            <input id="middlename" name='middlename' placeholder="Middle Name" type="text">

                            <input id="preferredname" name='preferredname' placeholder="Preferred Name" type="text"> <br><br>
                            <a>Select Gender</a>
                            <select class="form-control"  id="gender" required required oninvalid="this.setCustomValidity('Select Gender')" oninput="this.setCustomValidity('')">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                            </select>
                            <br>
                            <a>Date of birth</a>
                            <input type="date" placeholder="Date of Birth" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="Date of birth" required oninput="this.setCustomValidity('')" onchange="checkdate()">
                            <br>
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
                                    <br>
                            <legend>License</legend>

                            <div id="terms_con" style="clear: both; margin-top:10px;">
                                <input id='agree' name='agree' type='checkbox' style="float: left; margin-right: 10px" required oninvalid="this.setCustomValidity('Accept Terms and Conditions')" onclick="this.setCustomValidity('')">

                                <div class="termsAndConditions">I accept the terms and conditions of the <a href=terms_and_agreement.html target="_blank">Virtusa Commercial Tool License (V-TL)</a></div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Lcv7ygUAAAAADNGbsu0bfVCA83VxXteuXUOODsh" data-callback="recaptchaCallback" ></div>
                            <div id="success" style="margin-top: 10px"></div>
                            <input type="submit" class="btn btn-lg btn-primary btn-square btn-raised" id="contactSubmit" value='Register'>
                            <!-- <a class='forgot' href='#'>Already have an account?</a> --></form>
                    </div>

                </div>
        </section>

    </div>

    <footer class="footer-1" id="footer-1">
        <div class="ftr-top-bar"></div>
        <div class="lower">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="small" style="color: #6c7d88;">&copy;2017 Virtusa All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <br/>

    <!--Google captcha JavaScript File-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Core JavaScript Files -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <!-- Plugin JavaScript Files -->
    <script src="assets/js/plugins/jquery.easing/jquery.easing.1.3.js"></script>
    <script src="assets/js/plugins/jquery.fitvids/jquery.fitvids.js"></script>
    <script src="assets/js/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/scrollReveal/scrollReveal.js"></script>
    <script src="assets/js/plugins/stellar/stellar.js"></script>
    <script src="assets/js/plugins/SmoothScroll/SmoothScroll.js"></script>
    <script src="assets/js/plugins/jqBootstrapValidation/jqBootstrapValidation.js"></script>
    <script src="assets/js/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/js/sha256.js"></script>
    <script src="assets/js/register_user.js"></script>
    <script src="assets/js/register.nav.js"></script>
</body>

</html>
