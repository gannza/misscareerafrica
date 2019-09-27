<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Become a sponsor :: Miss Career</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Miss Career" />
<meta name="keywords" content="Miss Career, yegobox, flipper" />
<meta name="author" content="Yegobox Team" />

<!-- 
//////////////////////////////////////////////////////

Website: 		http://yegobox.com/
Email: 			info@yegobox.com
Twitter: 		http://twitter.com/yegobox
Facebook: 		https://www.facebook.com/yegobox

//////////////////////////////////////////////////////
-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content="" />
<meta property="og:image" content="" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />


<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">
<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

<!-- Stylesheets -->
<!-- Dropdown Menu -->
<link rel="stylesheet" href="css/superfish.css">
<!-- Owl Slider -->
<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
<!-- Date Picker -->
<!-- Style -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<!-- CS Select -->
<link rel="stylesheet" href="css/cs-select.css">
<link rel="stylesheet" href="css/cs-skin-border.css">

<!-- Themify Icons -->
<link rel="stylesheet" href="css/themify-icons.css">
<!-- Flat Icon -->
<link rel="stylesheet" href="css/flaticon.css">
<!-- Icomoon -->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Flexslider  -->
<link rel="stylesheet" href="css/flexslider.css">

<!-- Style -->
<link rel="stylesheet" href="css/style.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<div id="fh5co-wrapper">
<div id="fh5co-page">


<div id="fh5co-header">


<header id="fh5co-header-section">
					<div class="container">
						<div class="nav-header">
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
							 <span id="fh5co-logo"><a href="/"><img src="images/logo.png" class="img-rounded"
										style="width: 200px;height:80px;position: relative;bottom:10px"></a></span> 
							<nav id="fh5co-menu-wrap" role="navigation">
								<ul class="sf-menu" id="fh5co-primary-menu">
									<li><a href="/" style="color: white;">HOME</a></li>
									<li><a  class="active" style="color: white;" href="#">MISS CAREER</a>
										<ul class="fh5co-sub-menu">
											<li><a href="#">Book Miss Career</a></li>
											<!-- <li><a href="#">Former Candidates</a></li> -->
											<li><a href="candidate-application">Become a Candidate</a></li>
										</ul>
									</li>
									<li><a style="color: white;" href="eligibility">ELIGIBILITY</a></li>

									<li><a   style="color: white;" href="#">ORGANIZATION</a>
										<ul class="fh5co-sub-menu">
											<li><a href="blog">Our Blog</a></li>
											<li><a href="scope">Our scope</a></li>
											<li><a href="contact">Contact Us</a></li>
										</ul>
									</li>
									<li><a  style="color: white;" href="#">SUPPORT</a>
										<ul class="fh5co-sub-menu">
											<li><a href="volunteer">Become a volunteer</a></li>
											<li><a href="sponsor">Become a sponsor</a></li>
										</ul>
									</li>
									<li><a style="color: white;" href="scholarship">SCHOLARSHIP</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/sponsor.jpg);"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div
				class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
				<div class="fh5co-intro fh5co-table-cell">
					<br /><br /><br /><br />
					
					
				</div>
			</div>
		</div>
	</div>
</div>


	<div id="fh5co-blog-section">
		<div class="container" id="contact">
			<div class="row">
					<div class="col-md-7">
							<h1 class="h1">HOW TO BECOME A SPONSOR?</h1>
							<p style="color: #252525!important;">
									Partnering with The Miss Career Africa brings a value to your brand. Partners may request Miss Career Africa   to provide speakers, brand ambassadors, or to, present or perform at corporate events and media appearances, and for sure, Miss Career Africa’s social media presence brings continental exposure and grassroots relevance to your brand or cause.
							</p>

							<p style="color: #252525!important;">
									The Miss Career Africa   is inspired to partnering with like-minded organizations that exist to place power in the hands of young women. 
									For more information, please call 0784872667 or email info@missacareerafrica.com
							</p>

							
							
						</div>
					<div class="col-md-5">
							<div class="col-md-12">
							@include('flash::message')
							<h1 class="h1">SPONSORSHIP FORM</h1>
							</div>
							<div class="content">
							@include('adminlte-templates::common.errors')
							<div  class="col-md-12">

								<div class="box-body">
									<div class="row">
										{!! Form::open(['route' => 'sponsors.store']) !!}

											@include('sponsors.fields')

										{!! Form::close() !!}
									</div>
								</div>
							</div>
						</div>
							
						</div>
					</div>
				</div>
		
					
		</div>
	</div>

	
<footer id="footer" class="fh5co-bg-color">
<div class="container">

	<div class="row">
		<div class="float-left col-sm-6">
			<img src="images/logo.png" class="img-rounded" style="width: 200px">
		</div>

		<div class="col-sm-6 float-right">
			<ul class="social-icons float-right">
				<li>
					<a href="https://twitter.com/Misscareerafric"><i class="icon-twitter-with-circle"></i></a>
					<!-- <a href="#"><i class="icon-facebook-with-circle"></i></a> -->
					<a href="https://www.instagram.com/miss_career_africa19/"><i class="icon-instagram-with-circle"></i></a>
					<!-- <a href="#"><i class="icon-linkedin-with-circle"></i></a> -->
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="row mt-5">
				<div class="col-md-3">
					<h3><b>ABOUT US</b></h3>
					<ul class="link">
							<li><a style="color: white;" href="competition">The Competition</a></li>
							 <li><a style="color: white;" href="job">The Job</a></li>
							<li><a style="color: white;" href="mission">Our Mission</a></li>
							
						</ul>
				</div>
				<div class="col-md-3">
						<h3><b>MISS CARRER CANDIDATE</b></h3>
						<ul class="link">
							<li><a style="color: white;" href="#">Book Miss Career Africa</a></li>
							<li><a style="color: white;" href="candidate-application">Become a Candidate</a></li>
						</ul>
					</div>
				<div class="col-md-3">
					<h3><b>ORGANIZATION</b></h3>
					<ul class="link">
						<li><a style="color: white;" href="blog">Our Blog</a></li>
						<li><a style="color: white;" href="scope">Our Scope</a></li>
						<li><a style="color: white;" href="contact">Contact Us</a></li>
						
					</ul>
				</div>

				<div class="col-md-3">
						<h3><b>SUPPORT</b></h3>
						<ul class="link">
								<li><a style="color: white;" href="volunteer">Become a volunteer</a></li>
								<li><a style="color: white;" href="sponsor">Become a sponsor</a></li>
						</ul>
					</div>

			</div>
			<div class="row mt-5">
				<div class="mx-auto col-6 text-center">
					<p> Copyright &copy; 2019 Miss Career Africa.</p>

				</div>
			</div>

		</div>

	</div>
</div>
</footer>

</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- Javascripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- Dropdown Menu -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Owl Slider -->
<!-- // <script src="js/owl.carousel.min.js"></script> -->
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>

<script src="js/custom.js"></script>
<script src="js/mca.js"></script>

</body>


</html>