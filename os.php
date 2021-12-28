<?php include 'filesLogicos.php';?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>PopZone</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Customer Login</h4>
				</div>
				<div class="modal-body customer-box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
						<li><a href="#Registration" data-toggle="tab">Registration</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Login">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email1" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="exampleInputPassword1" placeholder="Email"
											type="email">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
											Submit
										</button>
										<a class="for-pwd" href="javascript:;">Forgot your password?</a>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="Registration">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email" placeholder="Email" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="mobile" placeholder="Mobile" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="password" placeholder="Password"
											type="password">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Save &amp; Continue
										</button>
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img style="width: 50px; height: 50px;" src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="course.html">Courses</a></li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">Blog </a>
							
							</div>
						</li>
					</ul>

				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div class="all-title-box">
		<div class="container text-center">
			
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<p class="lead"><h1 style="color: rgb(255, 166, 0); letter-spacing: 1PX;">Operating System</h1> </p>
				</div>
			</div><!-- end title -->


			<hr class="invis">
			<ul>
				<hr>
				<li><button style="width: 100%;" type="button" class="btn btn-outline-primary"><a
							href="os/downloadsos.php" target="_blank"
							style="color:rgb(0, 0, 0)">Click to Download courses</a></button><br><br>
					<hr>
				
			</ul>
           
			<hr class="hr3">
			<div class="body">
				<div class="container3">
					
				
				<div class="card">
					<div class="imgbx">
					 <img src="images/blog_4.jpg" alt="">    
					</div>
					<div class="content">
						<p style="font-family: 'Andada Pro', serif;">
							The abstract science of number, quantity, and space, either as abstract concepts ( pure mathematics ), 
							or as applied to other disciplines such as physics and engineering ( applied mathematics ).
							 
						 </p>
						<div  style="margin: 9px; " class="product-name">
							<a href="course-grid-5.html"><button style="border-radius: 18px; font-family: 'Lilita One', cursive; color: rgb(20, 8, 85);" type="button" class="btn btn-outline-warning">Mathematics</button></a>
						</div>
						<div style="float: right;" class="price-rating">
						   
							<div class="rating">
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star-o"></i>
							   <i class="fa fa-star-o"></i>  
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="imgbx">
					 <img src="images/blog_5.jpg" alt="">
					</div>
					<div class="content">
						<p style="font-family: 'Andada Pro', serif;">
							Software engineering is a detailed study of engineering to the design, development and maintenance of software.
							Software engineering was introduced to address the issues of low-quality software projects.
							 
						 </p>
						<div  style="margin: 9px; " class="product-name">
							<a href="course-grid-3.html"><button style="border-radius: 18px; font-family: 'Lilita One', cursive; color: rgb(20, 8, 85);" type="button" class="btn btn-outline-warning">Software Engineering</button></a>
						</div>
						<div style="float: right;" class="price-rating">
							<div class="rating">
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star-o"></i>  
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="imgbx">
					 <img src="images/blog_6.jpg" alt="">  
					</div>
					<div class="content">
						<p class="lead"><h1 style="color: rgb(255, 166, 0); letter-spacing: 1PX;">BIG DATA</h1> </p>
						<div  style="margin: 9px; " class="product-name">
							<a href="course-grid-6.html"><button style="border-radius: 18px; font-family: 'Lilita One', cursive; color: rgb(20, 8, 85);" type="button" class="btn btn-outline-warning">Psychology</button></a>
						</div>
						<div style="float: right;" class="price-rating">
							
							<div class="rating">
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star-o"></i>  
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		
		</div><!-- end container -->
	</div><!-- end section -->

	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Courses</h3>
						</div>
						<ul class="footer-links">
							    <li><a href="course-grid-2.html">Computer Science </a></li>
								<li><a href="course-grid-3.html">Software Engineering </a></li>
								<li><a href="course-grid-4.html">Biotechnology </a></li>
								<li>><a href="course-grid-5.html">Mathematics </a></li>
								<li><a  href="course-grid-6.html">Psychology </a></li>
								<li><a  href="course-grid-7.html">Chemistry </a></li>

						</ul><!-- end links -->
						<div class="footer-right">
							<ul class="footer-links-soi">
								<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--!>
								
							</ul><!-- end links -->
						</div>
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Information</h3>
						</div>
						<ul class="footer-links">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="course.html">Courses</a></li>
							<li><a href="teachershtml">Our team</a></li>

						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->



				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Contact Details</h3>
						</div>

						<ul class="footer-links">
							<li><a href="mailto:abdulwaaheed.17@gmail.com">popzone-info@gmail.com</a></li>
							<li><a href="index.html">www.popzone.com</a></li>
							<li>Sector c, DHA Phase 6, Lahore Garrison University, Lahore, Pakistan</li>
							<li>+92 312 5871179</li>
						</ul><!-- end links -->
						<div class="footer-left">
                            <ul class="footer-links-soi">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul><!-- end links -->
                        </div>
					</div><!-- end clearfix -->
				</div><!-- end col -->

			</div><!-- end row -->
		</div><!-- end container -->
	</footer><!-- end footer -->

	<div class="copyrights">
		<div class="container">
			<div class="footer-distributed">
				<div class="footer-center">
					<p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="index.html">SmartEDU</a>
					</p>
				</div>
			</div>
		</div><!-- end container -->
	</div><!-- end copyrights -->

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/custom.js"></script>

</body>

</html>