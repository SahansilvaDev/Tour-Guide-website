<?php include './login/db_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>ExploreBooked</title>
	<link rel="icon" type="image/x-icon" href="images/logo.png">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	 <link rel="stylesheet" href="./css/blogpost.css">



	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

  <link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css"> 

 
  <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">





  <style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
  <link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">



  

	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

	
	<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">


	    <!-- Bootstrap icons-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="phone">+94 77 214949499</div>
							<div class="social">
								<ul class="social_list">
									<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="user_box ml-auto">
								<div class="user_box_login user_box_link"><a href="./login/index.php">login</a></div>
								<div class="user_box_register user_box_link"><a href="./login/reg.php">register</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->

			<nav class="main_nav ">
				<div class="container">
					<div class="row">
						<div class="col main_nav_col pt-3 pb-3 ">
							<!-- <div class="logo_container">
								<div class="logo"><a href="index.php"><img src="images/logo.png" alt=""><h4>ExploreBooked </h4></a></div>
							</div> -->
						<div class="px-4  form py-3">
							<form action="">
								<input type="text" placeholder="Search ..." aria-label="Search" name="location" />
								<input type="submit" class="btn btn-primary" value="submit">
							</form>

						


							
						
							<div class="main_nav_container ml-auto">
								<!-- <ul class="main_nav_list">
									<li class="main_nav_item"><a href="index.php">home</a></li>
									<li class="main_nav_item"><a href="contact.php">contact us</a></li>
									<li class="main_nav_item"><a href="about.php">about us</a></li>
								</ul> -->
							</div>
							<div class="content_search ml-lg-0 ml-auto">
								
							</div>
							</div>

					
							
						</div>
					</div>
				</div>
			</nav>

		</header>

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="index.php">home</a></li>
					<li class="menu_item"><a href="about.php">about us</a></li>
					<li class="menu_item"><a href="contact.php">contact us</a></li>
				</ul>
			</div>
		</div>