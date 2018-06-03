

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/home_page_bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/login_style.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/home_page_style.css">


    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->


    <style>

        .carousel-inner > .item > img, .carousel-inner > .item > a > img{
            display: block;
            max-width: 100%;
            height: max-content;
        }

    </style>

    <style>

        .md-checkbox {
            position: relative;
            margin: 16px 0;
            text-align: left;
        }
        .md-checkbox.md-checkbox-inline {
            display: inline-block;
        }
        .md-checkbox label {
            cursor: pointer;
        }
        .md-checkbox label:before, .md-checkbox label:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
        }
        .md-checkbox label:before {
            width: 20px;
            height: 20px;
            background: #fff;
            border: 2px solid rgba(0, 0, 0, 0.54);
            border-radius: 2px;
            cursor: pointer;
            transition: background .3s;
        }
        .md-checkbox input[type="checkbox"] {
            outline: 0;
            margin-right: 10px;
            visibility: hidden;
        }
        .md-checkbox input[type="checkbox"]:checked + label:before {
            background: #337ab7;
            border: none;
        }
        .md-checkbox input[type="checkbox"]:checked + label:after {
            transform: rotate(-45deg);
            top: 5px;
            left: 4px;
            width: 12px;
            height: 6px;
            border: 2px solid #fff;
            border-top-style: none;
            border-right-style: none;
        }
        .md-checkbox input[type="checkbox"]:disabled + label:before {
            border-color: rgba(0, 0, 0, 0.26);
        }
        .md-checkbox input[type="checkbox"]:disabled:checked + label:before {
            background: rgba(0, 0, 0, 0.26);
        }







    </style>

    <style>


        .drop {
            display: block;
            position: absolute;
            background: #CCC;
            border-radius: 100%;
            -webkit-transform: scale(0);
            transform: scale(0);
            pointer-events: none;
            width: 100%;
            height: 100%;
        }
        .drop.animate {
            -webkit-animation: drop 1s ease-out;
            animation: drop 1s ease-out;
        }

        @-webkit-keyframes drop {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                transform: scale(2.5);
            }
        }

        @keyframes drop {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                transform: scale(2.5);
            }
        }
        .materialSelect {
            height: 70px;
            position: relative;
            text-align: center;
            margin-bottom: 10px;
        }
        .materialSelect.error .select:not(.isOpen) {
            border: 1px solid #DD2C00 !important;
        }
        .materialSelect.error .message {
            display: block;
        }
        .materialSelect.inline {
            float: none !important;
            display: inline-block;
            z-index: 0;
            min-width: 100px;
        }
        .materialSelect.inline .select {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
            top: 0;
            left: 0;
            margin: 0;
            transition: all 0.2s !important;
            width: 100%;
        }
        .materialSelect.inline .select.isOpen {
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
            top: 50%;
        }
        .materialSelect:not(.inline) {
            width: 100%;
        }
        .materialSelect:not(.inline) .select {
            width: 100%;
            margin-left: 50%;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
        .materialSelect .select {
            position: absolute;
            margin: 0;
            padding: 0;
            top: -1px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 250px;
            text-align: center;
            margin: 0px auto;
            z-index: 9999;
            height: 48px;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            background-color: #fff;
            margin-left: 0;
            -webkit-transform: none;
            transform: none;
        }
        .materialSelect .select:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #bbbbbb;
            content: '';
            display: block;
            height: 0px;
            position: absolute;
            pointer-events: none;
            top: 19px;
            right: 10px;
            width: 0px;
        }
        .materialSelect .select li {
            cursor: pointer;
            font-size: 15px;
            list-style: none;
            line-height: 48px;
            padding: 0 48px 0 24px;
            position: relative;
            overflow: hidden;
        }
        .materialSelect .select li[data-selected] {
            height: 48px;
        }
        .materialSelect .select li:not([data-selected]) {
            height: 0px;
            opacity: 0;
        }
        .materialSelect .select.isOpen {
            background-color: #fafafa;
            border-radius: 2px;
            box-shadow: 1px 2px 3px 1px rgba(0, 0, 0, 0.3);
            padding-bottom: 16px;
            top: -96px;
            height: 250px;
            z-index: 99999;
        }
        .materialSelect .select.isOpen:after {
            display: none;
        }
        .materialSelect .select.isOpen:before {
            border-color: transparent !important;
        }
        .materialSelect .select.isOpen li {
            height: 48px;
            opacity: 1;
        }
        .materialSelect .select.isOpen li[data-selected] {
            color: #337ab7;
        }
        .materialSelect .select.isOpen li:hover {
            background-color: #eeeeee;
        }
        .materialSelect .select.isOpen li:active {
            background-color: #dbdbdb;
        }
        .materialSelect .select:not(.isOpen):hover {
            background-color: #f7f7f7;
            border-top: 1px solid #CDCDCD;
            border-bottom: 1px solid #CDCDCD;
        }
        .materialSelect .select:not(.isOpen):active {
            box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.3);
        }
        .materialSelect .select + .select:before {
            border-left: thin solid #c8c8c8;
            content: '';
            height: 32px;
            left: 0;
            position: absolute;
            top: 8px;
        }
        .materialSelect .message {
            position: absolute;
            top: 50px;
            width: 100%;
            color: #DD2C00;
            display: none;
        }

        @media only screen and (min-width: 1008px) {
            .materialSelect .select {
                transition: background 0.2s ease, border 0.2s ease, top 0.2s ease, height 0.2s ease, box-shadow 0.2s ease;
            }
            .materialSelect .select li {
                transition: height 0.2s linear, opacity 0.2s ease, margin 0.2s linear;
            }
        }

    </style>

    <style>

        .file {
            position: relative;
        }
        .file label {
            padding: 5px 20px;
            color: gray;
            font-weight: bold;
            font-size: .9em;
            transition: all .4s;
            border: 2px solid rgb(246, 246, 246);
            background-color: rgb(246, 246, 246);
            border-radius: 5px;
        }
        .file input {
            position: absolute;
            display: inline-block;
            left: 0;
            top: 0;
            opacity: 0.01;
            cursor: pointer;
        }
        .file input:hover + label,
        .file input:focus + label {
            background-color: rgb(246, 246, 246);
            color: gray;
        }





    </style>

    <style>
        .modal-header-primary {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #428bca;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .gtco-nav{
            background-color: #428bca;
        }
        .cover-carisol{
            background-color: #428bcaa6;
            padding: 3px;
            margin-bottom: 15px;
            border-radius: 8px;


        }
    </style>


</head>
<body>

<div class="gtco-loader"></div>
<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">

        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div id="gtco-logo"><a href="index.php">SmartProNetwork <em>.</em></a>
                </div>

            </div>
            <div class="col-xs-8 text-right menu-1">

                <ul>
                    <li><a href="#">National</a></li>
                    <li><a href="#">Enterprise</a></li>
                    <li class="has-dropdown">
                        <a href="#">Personnel</a>
                        <ul class="dropdown">
                            <li><a href="#">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                            <li><a href="#">Item 3</a></li>
                            <li><a href="#">Item 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About US</a></li>
                    <li class="btn-cta"><a href="#" data-toggle="modal" data-target="#signup-Modal"><span>Register</span></a></li>
                    <li class="btn-cta"><a href="#" data-toggle="modal" data-target="#login-Modal"><span>Login</span></a></li>

                </ul>


            </div>
        </div>

    </div>
</nav>
<div id="page">



    <div class="container-fliud">


        <!-- Header Carousel -->
        <header id="myCarousel" style="    margin-top: 53px;" class=" carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../images/Entreprise%20ICT%20services%201.jpeg"  style="    width: 1400px;  height: 398px" alt="..." class="grayscale">
                    <div class="carousel-caption">
                        <div class="cover-carisol">

                            <h4  style="color: #FFFFFF"> Our solutions will fit all IT &amp; Telecom your business may need</h4>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/Training%20center%202.jpg"   style="    width: 1400px; height: 398px" alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4 >
                                <span class="text-center"> Need training?</span><br>
                                We offer professional training and talent solutions that meet the digital age requirements.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/Freelancer%203.jpg"    style="     width: 1400px;height: 398px " alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                Have you a personal business idea or country scale business idea?<br>
                                We can assist to evaluate and partner with you to make it reality.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/national%20ongoing%20projects%204.jpeg"    style="      width: 1400px;height: 398px ;"alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                Be and stay aware of what are the major ICT and Telecom ongoing projects in the country.
                                Sector/Development/major actors/Jobs opportunity etc.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/jobs%205.jpg"    style="        width: 1400px;height: 398px"  alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                Get access to the first ICT &amp; Telecom recruiting Platform in Mauritania.
                                Apply to job or find an internship opportunity

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/Sector%20technical%20papers%206.jpg"    style="        width: 1400px;height: 398px;"alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h5>
                                Need a strong and trustful ICT &amp; Telecom market analysis? Or planning to invest in the ICT
                                &amp; Telecom sector? Need a survey regarding the major players’ performance? Or need to evaluate
                                the performance of your business? Or majors market offer &amp; demand analysis?<br>
                                Access to our technical papers and surveys or request a customised one.
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/professional%20forum%207.jpg"    style="    width: 1400px;height:398px;"alt="..." class="grayscale">

                    <div class="carousel-caption">
                        <div class="cover-carisol">
                            <h4>
                                First technical support network in Mauritania that gathers Professors, Engineers and
                                Technicians with one goal: helping each other with the daily technical challenge.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>

        <div class="gtco-section border-bottom">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>our services</h2>
                        <p>We have much more than these  services listed below .</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="../images/02.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="../images/02.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Title of  service number 1</h2>
                                <p>Description and details </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="../images/03.png" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="../images/03.png" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Title of  service number 2</h2>
                                <p>Description and details </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="../images/01.png" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="../images/01.png"  class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Title  of service number 3</h2>
                                <p>Description and details </p>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>



        <div id="gtco-counter" class="gtco-section">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                        <h2>Fun Facts</h2>
                        <p> Below you can realize how  are we serious about  growing  our business and also about our client satisfaction .</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Creativity Fuel</span>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Projects Done</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-time"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Hours Spent</span>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="gtco-products">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>More Products</h2>
                        <p> if you are curious about getting more information about our products here they are below just enjoy</p>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-carousel-carousel">
                        <div class="item">
                            <a href="#"><img src="../images/01.png" ></a>
                        </div>
                        <div class="item ">
                            <a href="#"><img src="../images/03.png" ></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="../images/02.jpg" ></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="../images/00.png" ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <footer id="gtco-footer" role="contentinfo">
            <div class="gtco-container">
                <div class="row row-p	b-md">

                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="gtco-widget">
                            <h3>Get In Touch</h3>
                            <ul class="gtco-quick-contact">
                                <li><a href="#"><i class="icon-phone"></i> +222 00 00 00 00</a></li>
                                <li><a href="#"><i class="icon-mail2"></i> Admin@SPN</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; 2018. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="#" target="_blank">SmartProNetwork</a></small>
                        </p>
                        <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </footer>
    </div>

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="../js/home_page_jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>
<!-- Bootstrap -->
<script src="../js/home_page_bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="../js/main.js"></script>

<!-- login -->
<script src="../js/login.js"></script>
<!-- become user -->
<script src="../js/become_user.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
</script>

<!--  model -->
<div id="login-Modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->


        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <div class="row">
                    <div class="col-xs-11"> <h2 class="active" id="h2_signin"> Sign In
                            <button type="button"  class="close " style="     margin-right: -90px; margin-top: -36px;" data-dismiss="modal">&times;</button>
                        </h2></div>

                </div>
                <!-- Icon -->
                <div class="fadeIn first">

                    <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form id="login-form" onsubmit="return false" method="post" action="">
                    <input type="text" id="Nom d'utilisateur" class="fadeIn second" name="user" placeholder="login">
                    <input type="text" id="mot de passe" class="fadeIn third" name="pass" placeholder="password">
                    <input type="submit" id="input-submit-form"  class="fadeIn fourth" value="Log In">
                </form>
                <div class="alert alert-danger" role="alert" style="display:none;" id="alert"></div>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#"   onclick="switch_model()" id="forget-form">create an account</a>

                </div>

            </div>
        </div>


    </div>
</div>
<!--end model-->


<!--  model -->
<div id="signup-Modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->

        <div id="gtco-header" class="" role="banner" >
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">


                        <div class="row ">

                            <div class="col-md-10 col-md-push-1 animate-box" data-animate-effect="fadeInDown">
                                <div class="form-wrap">
                                    <div class="tab">
                                        <ul class="tab-menu">
                                            <li class="active gtco-first"><a href="#" data-tab="signup">USER


                                                    <button type="button"  class="close" data-dismiss="modal">&times;</button>

                                                </a></li>
                                            <li class="gtco-second"><a href="#" data-tab="login">PARTENER
                                                    <button type="button"  class="close" data-dismiss="modal">&times;</button>
                                                </a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-content-inner active" data-content="signup">
                                                <form   id="form_become_user" onsubmit="return false" method="post" action="">
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="username">Full Name </label><br>

                                                            <input type="text"  class=" second" name="full_name" id="full_name" placeholder="type your name ">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="password">Email   </label><br>
                                                            <input type="text" class=" second" name="U_email" id="U_email" placeholder="type your email">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="hjhj">Tel   </label><br>
                                                            <input type="text" id="U_tel" class=" second" name="U_tel" placeholder="type your phone number">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">

                                                            <div class=" col-md-10  materialSelect inline empty">

                                                                <ul class="select" style="    overflow: hidden;
    width: 102%;
    border: 2px solid rgb(246, 246, 246);
    background-color: rgb(246, 246, 246);
    border-radius: 5px;" id="äccount_type_ul" >
                                                                    <li data-selected="true"  data-value="nothing" >Choose account type</li>
                                                                    <li data-value="Expert" >Expert</li>
                                                                    <li data-value="Student">Student</li>
                                                                    <li data-value="Jobless" >Jobless</li>
                                                                    <li data-value="Technician" >Technician</li>
                                                                </ul>
                                                                <div class="message">Please select your account type</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="hjhj">CV</label>
                                                            <p class="file">
                                                                <input type="file" name="file" id="file" />
                                                                <label for="file" id="lable_file">choose file </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="hjhj">Term and Condition </label>
                                                            <div   style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                                                                <p>Let's switch over to NodeJS vs Java Tomcat7 (A far less common, but far less flawed comparison)

                                                                    Server
                                                                    Node provides it's own server runtime
                                                                    Tomcat provides it's own server runtime
                                                                    Request model
                                                                    Node is event loop
                                                                    Tomcat is thread per request
                                                                    Execution model
                                                                    Node is three steps removed from "bare metal"
                                                                    Java is three steps removed from "bare metal"</p>
                                                            </div>
                                                            <div >
                                                                <div class="md-checkbox md-checkbox-inline">
                                                                    <input id="i10" type="checkbox" name="term_condition">
                                                                    <label for="i10">Agree with the terms and conditions</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <input type="submit" id="submit_become_user" class="" value="Submit">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="alert_signup"></div>
                                            </div>

                                            <div class="tab-content-inner" data-content="login">
                                                <form action="#">
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="d">compay name</label>
                                                            <input type="text" id="d" class=" second" name="user" placeholder="login">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="k">phone number</label>
                                                            <input type="text" id="k" class=" second" name="user" placeholder="login">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <input type="submit" class="" value="submit">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--end model-->




<!--  success Modal -->
<div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h1 style="color: #FFFFFF;"><i class="fa icon-ok fa-1x"></i>Thank you for join us </h1>
            </div>
            <div class="modal-body">
                Please to comfirm your registration visit us in a person .
            </div>
            <div class="modal-footer">
                <input type="submit" class=" pull-left"  style ="    padding: 11px 80px; margin:0px" value="Close" data-dismiss="modal"></input>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->


<script>
    $(function(){
        var closeSelectTimeout;

        function hideMaterialList(parent){
            parent.css({
                'overflow': 'hidden'
            }).removeClass('isOpen');
            clearTimeout(closeSelectTimeout);
            closeSelectTimeout = setTimeout(function(){
                parent.parent().css({
                    'z-index': 0
                });
            }, 200);
        }
        $(document.body).on('mousedown', '.materialBtn, .select li', function(event){
            if(parseFloat($(this).css('opacity')) > 0 && $(document).width() >= 1008){
                var maxWidthHeight = Math.max($(this).width(), $(this).height());
                if($(this).find("b.drop").length == 0 || $(this).find("b.drop").css('opacity') != 1) {
                    // .drop opacity is 1 when it's hidden...css animations
                    drop = $('<b class="drop" style="width:'+ maxWidthHeight +'px;height:'+ maxWidthHeight +'px;"></b>').prependTo(this);
                }
                else{
                    $(this).find("b.drop").each(function(){
                        if($(this).css('opacity') == 1){
                            drop = $(this).removeClass("animate");
                            return;
                        }
                    })
                }
                x = event.pageX - drop.width()/2 - $(this).offset().left;
                y = event.pageY - drop.height()/2 - $(this).offset().top;
                drop.css({
                    top: y,
                    left: x
                }).addClass("animate");
            }
        });
        $(document.body).on('dragstart', '.materialBtn, .select li', function(e){
            e.preventDefault();
        })

        var selectTimeout;
        $(document.body).on('click', '.select li', function() {
            var parent = $(this).parent();
            parent.children('li').removeAttr('data-selected');
            $(this).attr('data-selected', 'true');
            clearTimeout(selectTimeout);
            if(parent.hasClass('isOpen')){
                if(parent.parent().hasClass('required')){
                    if(parent.children('[data-selected]').attr('data-value')){
                        parent.parents('.materialSelect').removeClass('error empty');
                    }
                    else{
                        parent.parents('.materialSelect').addClass('error empty');
                    }
                }
                hideMaterialList($('.select'));
            }
            else{
                var pos = Math.max(($('li[data-selected]', parent).index() - 2) * 48, 0);
                parent.addClass('isOpen');
                parent.parent().css('z-index', '999');
                if($(document).width() >= 1008){
                    var i = 1;
                    selectTimeout = setInterval(function(){
                        i++;
                        parent.scrollTo(pos, 50);
                        if(i == 2){
                            parent.css('overflow', 'auto');
                        }
                        if(i >= 4){
                            clearTimeout(selectTimeout);
                        }
                    }, 100);
                }
                else{
                    parent.css('overflow', 'auto').scrollTo(pos, 0);
                }
            }
        });

        $('.materialInput input').on('change input verify', function(){
            if($(this).attr('required') == 'true'){
                if($(this).val().trim().length){
                    $(this).parent().removeClass('error empty');
                }
                else{
                    $(this).parent().addClass('error empty');
                    $(this).val('');
                }
            }
            else{
                if($(this).val().trim().length){
                    $(this).parent().removeClass('empty');
                }
                else{
                    $(this).parent().addClass('empty');
                }
            }
        });

        $(document.body).on('click', function(e) {
            var clicked;
            if($(e.target).hasClass('materialSelect')){
                clicked = $(e.target).find('.select').first();
            }
            else if($(e.target).hasClass('select')){
                clicked = $(e.target);
            }
            else if($(e.target).parent().hasClass('select')){
                clicked = $(e.target).parent();
            }

            if($(e.target).hasClass('materialSelect') || $(e.target).hasClass('select') || $(e.target).parent().hasClass('select')){
                hideMaterialList($('.select').not(clicked));
            }
            else{
                if($('.select').hasClass('isOpen')){
                    hideMaterialList($('.select'));
                }
            }
        });
        hideMaterialList($('.select'));
    })

    var showPopup2 = false;

    function switch_model(){
        $('#login-Modal').modal('hide');
        showPopup2 = true;
        $("#login-Modal").on("hidden.bs.modal",function(){
            if(showPopup2){
                $('#signup-Modal').modal('show');
                showPopup2 = false;
            }

        });

    }
</script>



</body>
</html>


