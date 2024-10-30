



 
 <?php
session_start();

include './login/db_conn.php';





 if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
	 $email = $_SESSION['email'];
	 $sql = "SELECT * FROM admin WHERE email='$email' ";
	 $result = mysqli_query($conn, $sql);

	 ?>

	 <?php

$query = "SELECT * FROM admin";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Query execution failed: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">
  
  <link rel="stylesheet" href="css/m_style.css">

  <title>ExploreBooked</title>
</head>

<body data-barba="wrapper">

  <div class="preloader js-preloader">

  </div>

  <div class="header-margin"></div>
  <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
    <div data-anim="fade" class="header__container px-30 sm:px-20">
      <div class="-left-side">
        <a href="#!" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
          <img src="img/general/logo.png" alt="logo icon">
          <img src="img/general/logo.png" alt="logo icon">
        </a>
      </div>

      <div class="row justify-between items-center pl-60 lg:pl-20">
        <div class="col-auto">
          <div class="d-flex items-center">
            <button data-x-click="dashboard">
              <i class="icon-menu-2 text-20"></i>
            </button>

            <div class="single-field relative d-flex items-center md:d-none ml-30">
              <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="Search">
              <button class="absolute d-flex items-center h-full">
                <i class="icon-search text-20 px-15 text-dark-1"></i>
              </button>
            </div>
          </div>
        </div>
        					<?php while ($row = mysqli_fetch_array($result)) {

													$profile_img = $row['profile_img'];
													$name = $row['username'];


													?>	
               
        <div class="col-auto">
          <div class="d-flex items-center">
            	
            <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">
              <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-email-2 text-20"></i>
                </button>
              </div>

              <div class="col-auto">
                <button class="button -blue-1-05 size-50 rounded-22 flex-center">
                  <i class="icon-notification text-20"></i>
                </button>
              </div>
            </div>


            		
						<!-- <a href="" >
											

						</a> -->

            <div class="pl-15">
          
             
               


              <div class="dropdown">
                 <img src="img/avatars/3.png" alt="image" class="size-50 rounded-22 object-cover" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
               
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Welcome  <?php echo $name;?></a></li>
                  <li><a class="dropdown-item" href="#">Your Profile</a></li>
                  <li><a class="dropdown-item" href="./login/logout.php">Logout</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>


  <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <div class="dashboard__sidebar bg-white scroll-bar-1">
      <div class="sidebar -dashboard">
        <div class="sidebar__item">
          <div class="sidebar__button -is-active">
            <a href="./index.php" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-border-all mr-15"></i>
              Dashboard
            </a>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-building mr-15"></i>
                    Manage Hotel
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-vendor-hotels.html" class="text-15">All hotels </a>
                  </li>

                  <li>
                    <a href="./db-vendor-hotels.php" class="text-15">Add hotel</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-flag  mr-15"></i>
                    Trending destinations
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-vendor-tour.html" class="text-15">All tour</a>
                  </li>

                  <li>
                    <a href="db-vendor-add-tour.html" class="text-15">Add Trending destinations</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-bus-alt mr-15"></i>
                    Manage Users  Side
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="./db-vendor-main.php" class="text-15">Main section</a>
                  </li>

                  <li>
                    <a href="./db-vendor-all_main.php" class="text-15">All Details </a>
                  </li>

                  <li>
                    <a href="./db-vendor-place.php" class="text-15">user populer </a>
                  </li>

                  <li>
                    <a href="./db_vendor_populer_destination.php" class="text-15">populer Destination </a>
                  </li>

                  <li>
                    <a href="./db_vendor_travel_places.php" class="text-15">Travel Places</a>
                  </li>


                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-book t mr-15"></i>
                    Maneage Blog  side
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-vendor-news.html" class="text-15">All news</a>
                  </li>

                  <li>
                    <a href="./db_vendor_user_blog.php" class="text-15">Add Blog</a>
                  </li>

                   <li>
                    <a href="./db_vendor_cities.php" class="text-15">Add City</a>
                  </li>

                   <li>
                    <a href="./db_vendor_place.php" class="text-15">Add places</a>
                  </li>

                   <li>
                    <a href="./db_vendor_stay.php" class="text-15">Add Stay</a>
                  </li>

                   <li>
                    <a href="./db_vendor_things_to_do.php" class="text-15">Add Things to do</a>
                  </li>


                  <li>
                    <a href="./db_vendor_resturent.php" class="text-15">Add Resturents</a>
                  </li>

                   <li>
                    <a href="./db_vendor_eat.php" class="text-15">Add Food </a>
                  </li>


                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-map-marker-alt mr-15"></i>
                    Locations
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-all-locations.html" class="text-15">All locations</a>
                  </li>

                  <li>
                    <a href="./add_locations.php" class="text-15">Add locations</a>
                  </li>

                  <li>
                    <a href="./db_vendor_location_post.php" class="text-15">Add locations</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-calendar-check mr-15"></i>
                    Event
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-all-events.html" class="text-15">All events</a>
                  </li>

                  <li>
                    <a href="db-add-events.html" class="text-15">Add events</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-star mr-15"></i>
                    User plan
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-all-plans.html" class="text-15">All plans</a>
                  </li>

                  <li>
                    <a href="db-add-plans.html" class="text-15">Add plans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-ticket-alt mr-15"></i>
                    Coupon
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-all-coupon.html" class="text-15">All Coupon</a>
                  </li>

                  <li>
                    <a href="db-add-coupon.html" class="text-15">Add Coupon</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="db-all-review.html" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-comments mr-15"></i>
             Review
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="db-all-media.html" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-folder mr-15"></i>
              Media
            </a>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button">
            <a href="db-dashboard.html" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="far fa-paper-plane mr-15"></i>
              All social links
            </a>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-wallet mr-15"></i>
                    Payment
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">

                  <li>
                    <a href="db-dashboard.html" class="text-15">Payment information</a>
                  </li>

                  <li>
                    <a href="db-dashboard.html" class="text-15">All payment gateway</a>
                  </li>
                  <li>
                    <a href="db-dashboard.html" class="text-15">Add payment method</a>
                  </li>
                  <li>
                    <a href="db-dashboard.html" class="text-15">All currency</a>
                  </li>
                  <li>
                    <a href="db-dashboard.html" class="text-15">Add currency</a>
                  </li>
                  <li>
                    <a href="db-dashboard.html" class="text-15">All withdrawal method</a>
                  </li>
                  <li>
                    <a href="db-dashboard.html" class="text-15">Add withdrawal method</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item ">
          <div class="accordion -db-sidebar js-accordion">
            <div class="accordion__item">
              <div class="accordion__button">
                <div class="sidebar__button col-12 d-flex items-center justify-between">
                  <div class="d-flex items-center text-15 lh-1 fw-500">
                    <i class="fas fa-user-cog mr-15"></i>
                    Admin  manage
                  </div>
                  <div class="icon-chevron-sm-down text-7"></div>
                </div>
              </div>

              <div class="accordion__content">
                <ul class="list-disc pb-5 pl-40">
                  <li>
                    <a href="db-dashboard.html" class="text-15">All users</a>
                  </li>
                  <li>
                    <a href="./login/regindex.php" class="text-15">Add admin</a>
                                   </li>
                  <li>
                    <a href="db-dashboard.html" class="text-15">All role</a>
                  </li>
                  <li>
                    <a href="db-dashboard.html" class="text-15">Add role</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar__item">
          <div class="sidebar__button ">
            <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
              <i class="fas fa-sign-out-alt mr-15"></i>
              Logout
            </a>
          </div>
        </div>
      </div>
    </div>


        <?php } ?>
       
      
<?php 
}else{
     header("Location: login/index.php?");
     exit();
}
 ?>    




