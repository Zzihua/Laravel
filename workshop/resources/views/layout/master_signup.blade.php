<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- Font Icons -->
	<!-- <link rel="stylesheet" href="css/font-icons.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">

	<!-- Niche Demos -->
	<!-- <link rel="stylesheet" href="demos/forum/forum.css"> -->
    <link rel="stylesheet" href="{{asset('assets/demos/forum/forum.css')}}">

	<!-- Custom CSS -->
	<!-- <link rel="stylesheet" href="css/custom.css"> -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">




	<!-- Document Title
	============================================= -->
	<title>Sign In - Forums / Community | Canvas</title>

</head>

<body class="stretched search-overlay">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header header-size-md" data-mobile-sticky="true">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="demo-forum.html">
								<img class="logo-default" href="asset{{'assets/demos/forum/images/canvasforum.png, assets/demos/forum/images/canvasforum@2x.png 2x'}}" href="asset{{'assets/demos/forum/images/canvasforum@2x.png'}}" alt="Canvas Logo">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc ms-0 ms-md-2">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div class="header-misc">
							<a href="demo-forum.html" class="button button-border border-default px-4 rounded-1 fw-medium text-transform-none ls-0 m-0 px-3 h-op-09">Sign In</a>
						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container pe-0 pe-md-3">
								<li class="menu-item"><a class="menu-link" href="demo-forum.html"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-forum-single.html"><div>Topic Page</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-forum-profile.html"><div>Profile</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-forum-search-result.html"><div>Search Page</div></a></li>
								<li class="menu-item current"><a class="menu-link" href="demo-forum-signin.html"><div>Sign In Page</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form bg-alt dark" action="search.html" method="get">
							<div class="container row justify-content-center">
								<div class="col-sm-8">
									<input type="text" name="q" class="form-control form-control-lg mb-5 border-color" value="" placeholder="Type Your Query &amp; Hit Enter.." autocomplete="off">
									<div class="row col-mb-30">
										<div class="col-md-6">
											<div class="widget widget_links">
												<h4 class="">Recent Topics</h4>
												<ul>
													<li><a href="demo-forum-single.html">Package Generator – Approx time for a file</a></li>
													<li><a href="demo-forum-single.html">Open sub-menu touching menu-item name</a></li>
													<li><a href="demo-forum-single.html">Portfolio Overlay Slide fadein fadeout</a></li>
													<li><a href="demo-forum-single.html">Show menu .dropdown-menu down only</a></li>
													<li><a href="demo-forum-single.html">Couldnt Generate Package Snippet</a></li>
												</ul>
											</div>
										</div>

										<div class="col-md-6">
											<div class="widget widget_links">
												<h4 class="">Helpful Documentation</h4>
												<ul>
													<li><a href="demo-forum-single.html">How to Install</a></li>
													<li><a href="demo-forum-single.html">How to setup Niche Demos</a></li>
													<li><a href="demo-forum-single.html">Header Layouts and Styles</a></li>
													<li><a href="demo-forum-single.html">Setup Forms</a></li>
													<li><a href="demo-forum-single.html">Setup RTL</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<!-- #content end -->

		@yield('content') 
		
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #101010;">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row justify-content-center">
						<div class="col-lg-9">
							<div class="widget">

								<div class="row col-mb-30">
									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">FAQs</a></li>
											<li><a href="#">Support</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Shop</a></li>
											<li><a href="#">Portfolio</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Forums</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Corporate</a></li>
											<li><a href="#">Agency</a></li>
											<li><a href="#">eCommerce</a></li>
											<li><a href="#">Personal</a></li>
											<li><a href="#">One Page</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Corporate</a></li>
											<li><a href="#">Agency</a></li>
											<li><a href="#">eCommerce</a></li>
											<li><a href="#">Personal</a></li>
											<li><a href="#">One Page</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<div class="col-lg-3 mt-5 mt-lg-0 text-center text-lg-end">
							<div class="widget">

								<div class="row">
									<div class="col-12 mb-3">
										<small>Call Us:</small>
										<h4 class="h4">+(1) 22 55412474</h4>
									</div>

									<div class="col-12 d-flex justify-content-center justify-content-lg-end">
										<a href="#" class="social-icon si-small bg-contrast-100 h-bg-facebook">
											<i class="fa-brands fa-facebook-f"></i>
											<i class="fa-brands fa-facebook-f"></i>
										</a>
										<a href="#" class="social-icon si-small bg-contrast-100 h-bg-delicious">
											<i class="fa-brands fa-delicious"></i>
											<i class="fa-brands fa-delicious"></i>
										</a>
										<a href="#" class="social-icon si-small bg-contrast-100 h-bg-paypal">
											<i class="fa-brands fa-paypal"></i>
											<i class="fa-brands fa-paypal"></i>
										</a>
										<a href="#" class="social-icon si-small bg-contrast-100 h-bg-waze">
											<i class="fa-brands fa-waze"></i>
											<i class="fa-brands fa-waze"></i>
										</a>
									</div>

									<div class="col-12 mt-5 text-white-50 text-smaller">
										All Rights Reserved <br>&copy; 2023 by SemiColonWeb<br>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/functions.js')}}"></script>

	<script>
		function myFunction() {
		  var x = document.getElementById("login-form-password");
		  if (x.type === "password") {
		    x.type = "text";
		    jQuery("#login-form-password + button").addClass('passowd-shown');
		  } else {
		    x.type = "password";
		    jQuery("#login-form-password + button").removeClass('passowd-shown');
		  }
		}
	</script>

</body>
</html>