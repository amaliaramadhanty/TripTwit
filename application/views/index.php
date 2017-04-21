<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>TripTwit</title>
    <meta name="description" content="Toure package">
    <meta name="author" content="WebThemez">
    <link rel="shortcut icon" href="../../asset/images/favicon.ico">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url('asset/')?> /css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/isotope.css')?>" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('asset/js/fancybox/jquery.fancybox.css')?>" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/da-slider.css')?>" />
    <!-- Owl Carousel Assets -->
    <link href="<?php echo base_url('asset/js/owl-carousel/owl.carousel.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/styles.css')?>" />
    <!-- Font Awesome -->
    <link href="<?php echo base_url('asset/font/css/font-awesome.min.css')?>" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#home" class="navbar-brand scroll-top logo"><b>TRIP</b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#home" class="scroll-link">Home</a></li>
                        <li><a href="#contactUs" class="scroll-link">Login</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
        <div>
         <!--   <img src="images/banner-bg.jpg" alt="banner" />-->
            <div class="container banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Amazing Tours</h2>
                        <p>Trip you remember for life long!! Photos here</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Best Travel Trip</h2>
                        <p>Get best deals at our place. Photos here</p>
                        <div class="da-img"></div>
                    </div> 
				<!--  <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav> -->
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--Package-->
	<!--Contact -->
    <section id="contactUs" class="page-section secPad">
        <div class="container">
            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <h1><b>LOGIN</b></h1>
                    <p><h3>Silakan Login Untuk Lebih Lanjutnya</h3></p>
                </div>
            </div>
                <form method="post" action="http://localhost/trip/login" id="contactfrm" role="form">
                    <div style="padding-left:400px; padding-right:400px;" align="center">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="username" id="username" placeholder="Masukkan Username" required title="Please enter your username">
                        	</div>
                       	<div class="form-group">
                     	<input type="password" class="form-control input-lg" name="password" id="password" required placeholder="Masukkan Password" required title="Please enter your password">
                        </div>
                        <div> 
                        <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
                    </div>
                </form>
                </div>
                <div align="center">
                    <!--<h3><u><b><a href="http://localhost/TM/index.php/login/daftar">Daftar Akun</a></b></u></h4>-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <footer>
        <div class="container">
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-flickr"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
    </footer>
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2014 | All Rights Reserved
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="<?php echo base_url('asset/')?>/js/modernizr-latest.js"></script>
    <script src="<?php echo base_url('asset/')?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/')?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/')?>/js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/')?>/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/')?>/js/jquery.nav.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/')?>/js/jquery.cslider.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/')?>/js/custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/')?>/js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
