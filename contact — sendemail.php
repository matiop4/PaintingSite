<?php
error_reporting(E_ALL ^ E_NOTICE);

	if(isset($_POST['submit'])){
		$msg=$_POST['msg'];
        $email = $_POST["email"];
        $name = $_POST["name"];
		$to='mateuszdworak.allegro@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Kontakt ze strony';
		$message="Kto :".$name."\n"."Wiadomość :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
    $thankYou="<p>THANK YOU! YOUR MESSAGE HAS BEEN SENT.</p>";
}
	}
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>L.M Decorainting</title>
        <meta name="description" content="Painting Decorating">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/headline.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/Pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>
		<header>
			<!-- header-top-area-start -->
			<div class="header-top-area blue-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 pb-10">	
							<div class="headers-left">
								<div class="headers-left-text">
									<div class="headers-left-icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="headers-left-text">
										<p> 077-4274-9442</p>
									</div>
								</div>
								<div class="headers-left-text">
									<div class="headers-left-icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="headers-left-text">
										<p>12/4 Nisbet Court - Edinburgh</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-start -->
			<div id="header-sticky" class="main-menu-area menu-style-1 white-header">
				<div class="container md-container">
					<div class="row">
						<div class="col-md-2 col-sm-4">
							<div class="logo">
								<a href="index.html"><img src="assets/img/logo/1a.png" alt="" /></a>
							</div>
						</div>
						<div class="col-md-7 col-sm-8">
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="index.html">home</a>
										</li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="service.html">service</a>
										</li>
										<li><a href="project.html">projects</a>
										</li>
										<li><a href="contact.php">contact</a></li>
									</ul>
								</nav>
							</div>							
						</div>
						<div class="col-md-3 hidden-xs hidden-sm">
							<div class="header-menu-icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
						<div class="col-xs-12"><div class="mobile-menu"></div></div>						
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
		</header>
		<!-- header-top-area-start -->
		<div class="loader">
	<div class="loader-inner">
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
	</div>
</div>
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-120 bg-opacity" style="background-image:url(assets/img/bg/6.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h2>contact</h2>
							<p>send the form, write an e-mail or call. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- contact-3-area-start -->
		<div class="contact-3-area contact-2 contact-3 pt-120 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="contact-wrapper-3 mb-30">
							<div class="contact-3-text">
								<h3>Leave Us a Message</h3>
							</div>
							<form action="contact.php" id="contact-form" method="post">
								<div class="col-sm-6">
									<input name="name" type="text" placeholder="name*">
								</div>
								<div class="col-sm-6">
									<input name="email" type="email" placeholder="email*">
								</div>
								    <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
								<div class="col-sm-12">
									<textarea name="msg" cols="30" rows="10" placeholder="message" id="msg"></textarea>
								</div>								
								<button type="submit" name="submit">send message</button>
							</form>
							<p class="form-message"><?=$thankYou ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-3-right-wrapper mb-30">
							<div class="contact-3-right-info">
								<h3>Contact Us</h3>
								<p> </p>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-pin"></i>
								</div>
								<div class="address-text">
									<span class="location">Location :</span>
									<span class="USA">
										12/4 Nisbet Court - Edinburgh<br>EH76UR</span>
								</div>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-phone"></i>
								</div>
								<div class="address-text">
									<span class="location">phone :</span>
									<span class="USA">077 4274 9442</span>
								</div>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-email"></i>
								</div>
								<div class="address-text">
									<span class="location">mail :</span>
									<span class="USA">l.malldecorating@gmail.com</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-3-area-end -->
	
		<footer>
			<!-- footer-bottom-area-start -->
			<div class="footer-bottom-area footer-bottom footer-bottom-1 black-bg-2 ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="copyright">
								<p>Copyright © 2020 <a href="">L&M Full Decorating </a>  All Right Reserved.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="footer-icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area-end -->
		</footer>
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/headline.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.parallax-1.1.3.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
