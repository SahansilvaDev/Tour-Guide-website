


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="./css/loc.css">
  <!-- <link rel="stylesheet" href="./css/blogpost.css"> -->
  <title></title>

</head>

<body>

<!-- php all -->

<?php include '../login/db_conn.php';

if (isset($_GET['location'])) {
    
    $selectedTable = $_GET['location'];

   
    $allowedTables = array('colombo', 'gampha', 'kaluthara'); 

    if (in_array($selectedTable, $allowedTables)) {
        
        $sql = "SELECT * FROM $selectedTable";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error: " . mysqli_error($conn)); 
        }

       
        while ($row = mysqli_fetch_assoc($result)) {
            
      $name = $row['name'];
        }
    } else {
        
        echo "Invalid table name: $selectedTable";
    }
} else {

    echo 'No location parameter found in the URL.';
}

?>

<?php echo $name; ?>


<!-- end php -->
  <!-- mobile nav part start -->




  <nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light d-block d-sm-block d-md-none d-lg-none">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h1 class="loc-hed"><span>Explore </span> Colombo</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Hotel</a>
          <a class="nav-link" href="#">Things To Do</a>
          <a class="nav-link" href="#">Resturent</a>
          <a class="nav-link" href="#">Vacationel Rentails</a>

        </div>
      </div>
    </div>
  </nav>



  <!-- mobile nav part end -->

  <div class="loc-header ">
    <div class="container">
      <div class="loc-hed pt-4  pb-2">
        <h1><span>Explore </span> Colombo</h1>
      </div>
    </div>

    <!-- cards -->
    <div class="container">
      <div class="row">
        <div class="col-sm-3 loc_crd">
          <a href=" ">
            <div class="card main-crd">
              <div class="crd_body ">
                okkke
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-3 loc_crd">
          <a href=" ">
            <div class="card main-crd">
              <div class="crd_body">
                okkke
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href=" ">
            <div class="card main-crd">
              <div class="crd_body">
                okkke
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-3">
          <a href=" ">
            <div class="card main-crd">
              <div class="crd_body">
                okkke
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>




  </div>




  <!-- card end -->
  <!--navbar-->




  <nav class=" navbar-expand-sm sticky-top   " id="navbar"  id="list-example">


    <ul class="nav ">
      <li class="nav-item justify-content-left mx-3">
        <a class="nav-link active  loc-hed ps-2 pe-5  " aria-current="page" class="list-group-item list-group-item-action" href="#list-item-1">
          <h2><span>Explore </span><br> Colombo</h2>
        </a>
      </li>

      <ul class="justify-content-center mx-5">

        <li class="nav-item crd_nav_list float-start px-4  mx-2">
          <a class="nav-link p-1"class="list-group-item list-group-item-action" href="#list-item-2">
            <div class="row">
              <div class="col-sm-8 float-start  py-3 pt-2">Places</div>
              <div class="col-sm-4 float-end py-3 pt-2"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ffffff
                    }
                  </style>
                  <path
                    d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                </svg>
              </div>

            </div>
          </a>
        </li>

        <li class="nav-item crd_nav_list float-start px-4 mx-2">
          <a class="nav-link p-1" class="list-group-item list-group-item-action" href="#list-item-3">
            <div class="row">
              <div class="col-sm-8 float-start ">Things To Do</div>
              <div class="col-sm-2 float-end">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ffffff
                    }
                  </style>
                  <path
                    d="M302.8 312C334.9 271.9 408 174.6 408 120C408 53.7 354.3 0 288 0S168 53.7 168 120c0 54.6 73.1 151.9 105.2 192c7.7 9.6 22 9.6 29.6 0zM416 503l144.9-58c9.1-3.6 15.1-12.5 15.1-22.3V152c0-17-17.1-28.6-32.9-22.3l-116 46.4c-.5 1.2-1 2.5-1.5 3.7c-2.9 6.8-6.1 13.7-9.6 20.6V503zM15.1 187.3C6 191 0 199.8 0 209.6V480.4c0 17 17.1 28.6 32.9 22.3L160 451.8V200.4c-3.5-6.9-6.7-13.8-9.6-20.6c-5.6-13.2-10.4-27.4-12.8-41.5l-122.6 49zM384 255c-20.5 31.3-42.3 59.6-56.2 77c-20.5 25.6-59.1 25.6-79.6 0c-13.9-17.4-35.7-45.7-56.2-77V449.4l192 54.9V255z" />
                </svg>
              </div>
            </div>
          </a>
        </li>

        <li class="nav-item crd_nav_list float-start px-4 mx-2">
          <a class="nav-link p-1" class="list-group-item list-group-item-action" href="#list-item-4">
            <div class="row">
              <div class="col-sm-8 float-start ">Vacation Rentails</div>
              <div class="col-sm-4 float-end">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ffffff
                    }
                  </style>
                  <path
                    d="M63.8 409.3l60.5-59c32.1 42.8 71.1 66 126.6 67.4 30.5.7 60.3-7 86.4-22.4 5.1 5.3 18.5 19.5 20.9 22-32.2 20.7-69.6 31.1-108.1 30.2-43.3-1.1-84.6-16.7-117.7-44.4.3-.6-38.2 37.5-38.6 37.9 9.5 29.8-13.1 62.4-46.3 62.4C20.7 503.3 0 481.7 0 454.9c0-34.3 33.1-56.6 63.8-45.6zm354.9-252.4c19.1 31.3 29.6 67.4 28.7 104-1.1 44.8-19 87.5-48.6 121 .3.3 23.8 25.2 24.1 25.5 9.6-1.3 19.2 2 25.9 9.1 11.3 12 10.9 30.9-1.1 42.4-12 11.3-30.9 10.9-42.4-1.1-6.7-7-9.4-16.8-7.6-26.3-24.9-26.6-44.4-47.2-44.4-47.2 42.7-34.1 63.3-79.6 64.4-124.2.7-28.9-7.2-57.2-21.1-82.2l22.1-21zM104 53.1c6.7 7 9.4 16.8 7.6 26.3l45.9 48.1c-4.7 3.8-13.3 10.4-22.8 21.3-25.4 28.5-39.6 64.8-40.7 102.9-.7 28.9 6.1 57.2 20 82.4l-22 21.5C72.7 324 63.1 287.9 64.2 250.9c1-44.6 18.3-87.6 47.5-121.1l-25.3-26.4c-9.6 1.3-19.2-2-25.9-9.1-11.3-12-10.9-30.9 1.1-42.4C73.5 40.7 92.2 41 104 53.1zM464.9 8c26 0 47.1 22.4 47.1 48.3S490.9 104 464.9 104c-6.3.1-14-1.1-15.9-1.8l-62.9 59.7c-32.7-43.6-76.7-65.9-126.9-67.2-30.5-.7-60.3 6.8-86.2 22.4l-21.1-22C184.1 74.3 221.5 64 260 64.9c43.3 1.1 84.6 16.7 117.7 44.6l41.1-38.6c-1.5-4.7-2.2-9.6-2.2-14.5C416.5 29.7 438.9 8 464.9 8zM256.7 113.4c5.5 0 10.9.4 16.4 1.1 78.1 9.8 133.4 81.1 123.8 159.1-9.8 78.1-81.1 133.4-159.1 123.8-78.1-9.8-133.4-81.1-123.8-159.2 9.3-72.4 70.1-124.6 142.7-124.8zm-59 119.4c.6 22.7 12.2 41.8 32.4 52.2l-11 51.7h73.7l-11-51.7c20.1-10.9 32.1-29 32.4-52.2-.4-32.8-25.8-57.5-58.3-58.3-32.1.8-57.3 24.8-58.2 58.3zM256 160" />
                </svg>
              </div>
            </div>
          </a>
        </li>


        <li class="nav-item crd_nav_list float-start px-4 mx-2">
          <a class="nav-link p-1" class="list-group-item list-group-item-action" href="#list-item-5">
            <div class="row">
              <div class="col-sm-8 float-start py-3 pt-2">Resturent <br></div>
              <div class="col-sm-4 float-end py-3 pt-2"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ffffff
                    }
                  </style>
                  <path
                    d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" />
                </svg>
              </div>
            </div>
          </a>
        </li>

        <li class="nav-item crd_nav_list float-start px-4  mx-2">
          <a class="nav-link p-1" href="../index.php">
            
            <div class="row">
              <div class="col-sm-8 float-start py-3  pt-2">More </div>
              <div class="col-sm-4 float-end py-3 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                  viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <style>
                    svg {
                      fill: #ffffff
                    }
                  </style>
                  <path
                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                </svg>
              </div>
            </div>
          </a>
        </li>
      </ul>

    </ul>



  </nav>








  <!-- hero part start -->

  <div class="container">


    <div class="row g-0  img-slide-show">
      <div class="col-sm-7">

        <!-- Determine the height of other images (e.g., 300px) and set the carousel images' height accordingly -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../images/colombo.jpg" class="d-block w-100  col_img_carousel loc_img " alt="...">

              <div class="carousel-caption  d-sm-block position-absolute bottom-0 start-0">


                <!--image gallery model start -->


                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <div class="col-alert float-start  position-absolute bottom-0 start-0 d-block "
                  class="btn   float-lg-start float-start" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  See All Images
                </div>

                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-primary">
                        kkldkkldlld
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>




                <!-- model end -->




              </div>

            </div>
            <div class="carousel-item">
              <img src="../images/colombo.jpg" class="d-block w-100 col_img_carousel  loc_img" alt="...">

              <div class="carousel-caption  d-sm-block position-absolute bottom-0 start-0">


                <!--image gallery model start -->


                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <div class="col-alert float-start  position-absolute bottom-0 start-0"
                  class="btn   float-lg-start float-start" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  See All Images
                </div>

                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-primary">
                        kkldkkldlld
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>




                <!-- model end -->




              </div>

            </div>
            <div class="carousel-item">
              <img src="../images/colombo.jpg" class="d-block w-100  col_img_carousel loc_img " alt="...">

              <div class="carousel-caption  d-sm-block position-absolute bottom-0 start-0">


                <!--image gallery model start -->


                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <div class="col-alert float-start position-absolute bottom-0 start-0">
                  <!-- Adjust button classes and styles as needed for responsiveness -->
                  <button class="btn  float-lg-start float-start" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    See All Images
                  </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <!-- Adjust modal size class for responsiveness (e.g., modal-sm, modal-lg) -->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- Replace with your actual content -->
                        Your content here...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>





                <!-- model end -->




              </div>


            </div>
          </div>
        </div>

      </div>
      <div class="col-sm-5 p-0  mobile-side-crousel">
        <div class="col p-0">
          <div class="row-sm-6 p-0">
            <img src="../images/colombo.jpg" class="d-block w-100  col_img_carousel_2  loc_img " alt="...">
          </div>
          <div class="row-sm-6 p-0">
            <img src="../images/colombo.jpg" class="d-block w-100  col_img_carousel_2 loc_img " alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- hero part end -->

  <!-- start about -->

  <div class="container">
    <div class="loc_about">
      <h1 class="fs-1 py-3">About <span> Colombo</span></h1>
    </div>

    <div class="loc_about_para ">
      <p class="pb-3 fw-normal">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quo fugiat asperiores adipisci labore nesciunt
        illo doloremque minus in possimus! Ea sit saepe amet similique
        voluptatibus quas, velit tenetur ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi qui
        magnam illum aperiam eveniet, saepe
        necessitatibus dicta dolorum blanditiis tempora animi, itaque vitae distinctio natus odit,
        officiis excepturi aut mollitia?Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Dignissimos dolorum architecto ad nisi iure exercitationem maxime obcaecati neque. Error
        enim pariatur, neque ea perspiciatis deserunt dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Dicta vel reprehenderit cum explicabo laboriosam porro illum repellat asperiores omnis.
        Doloribus eaque necessitatibus minus aliquid! Nisi rem magnam quaerat nemo impedit! Lorem ipsum dolor sit amet
        consectetur
        adipisicing elit. Voluptas tempore eius quod ut dignissimos quidem doloremque reiciendis, illum nulla et dolores
        aperiam eveniet provident suscipit
        fuga magni laudantium, aspernatur maxime!


      </p>

    </div>
.
    <div class="plan_your_trip">
      <div class="loc_trip_plan">
        <h3 class="py-5 px-5 loc_trip_para">Get a personalized itinerary, guided <br>by traveler tips and reviews.</h3>
        <br>
        <form class="px-5">

          <input type="text" name="" placeholder=" Search by city or town ...">

        </form>
      </div>
    </div>




  </div>


  <!-- end about -->


  <!-- start Essential -->

   <div class="container" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    
    <div class="loc_about">
      <h1 class="fs-1 py-3">Essential <span> Colombo</span></h1>
    </div>

    <div class="loc_essential">
    <!-- Your content goes here -->
    <div class="container" id="list-item-2">
      <div class="row">
    
        <div class="col-sm-3 pt-4">
          <h2 class="loc_hed_2">Places</h2>
          <p>Places to see, ways to wander, and signature experiences. <a href="" class="see_all"> See all</a></p>
        </div>
    
        <div class="col-sm-9">
    
    
          <div class="loc_essential scroll-bar my-5">
            <div class="row flex-nowrap">
              <!-- Your cards go here -->
              <div class="col">
    
                <div class="card rounded border-0">
                  <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="card-text p-0">
                      <h5 class="loc-text">Buddhist Temple</h5>
                      <div class="main-box">
                        <div class="box item1"></div>
                        <div class="box item2"></div>
                        <div class="box item3"></div>
                        <div class="box item4"></div>
                        <div class="box item5"></div>
                      </div>
                      <p>From $105 / night</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
    
              <div class="col">
    
                <div class="card rounded border-0">
                  <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="card-text p-0">
                      <h5 class="loc-text">Buddhist Temple</h5>
                      <div class="main-box">
                        <div class="box item1"></div>
                        <div class="box item2"></div>
                        <div class="box item3"></div>
                        <div class="box item4"></div>
                        <div class="box item5"></div>
                      </div>
                      <p>From $105 / night</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
    
              <div class="col">
    
                <div class="card rounded border-0">
                  <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="card-text p-0">
                      <h5 class="loc-text">Buddhist Temple</h5>
                      <div class="main-box">
                        <div class="box item1"></div>
                        <div class="box item2"></div>
                        <div class="box item3"></div>
                        <div class="box item4"></div>
                        <div class="box item5"></div>
                      </div>
                      <p>From $105 / night</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
    
              <div class="col">
    
                <div class="card rounded border-0">
                  <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="card-text p-0">
                      <h5 class="loc-text">Buddhist Temple</h5>
                      <div class="main-box">
                        <div class="box item1"></div>
                        <div class="box item2"></div>
                        <div class="box item3"></div>
                        <div class="box item4"></div>
                        <div class="box item5"></div>
                      </div>
                      <p>From $105 / night</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
              <div class="col">
    
                <div class="card rounded border-0">
                  <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="card-text p-0">
                      <h5 class="loc-text">Buddhist Temple</h5>
                      <div class="main-box">
                        <div class="box item1"></div>
                        <div class="box item2"></div>
                        <div class="box item3"></div>
                        <div class="box item4"></div>
                        <div class="box item5"></div>
                      </div>
                      <p>From $105 / night</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
    
    
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- thingto do start -->

<!-- Your content goes here -->
<div class="container" id="list-item-3">
  <div class="row">

    <div class="col-sm-3 pt-4">
      <h2 class="loc_hed_2">Things To Do</h2>
      <p>Places to see, ways to wander, and signature experiences. <a href="" class="see_all"> See all</a></p>
    </div>

    <div class="col-sm-9">


      <div class="loc_essential scroll-bar my-5">
        <div class="row flex-nowrap">
          <!-- Your cards go here -->
          <div class="col">

            <div class="card rounded border-0">
              <img src="../images/colombo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="card-text p-0">
                  <h5 class="loc-text">Buddhist Temple</h5>
                  <div class="main-box">
                    <div class="box item1"></div>
                    <div class="box item2"></div>
                    <div class="box item3"></div>
                    <div class="box item4"></div>
                    <div class="box item5"></div>
                  </div>
                  <p>From $105 / night</p>
                </div>
              </div>
            </div>

          </div>


          <div class="col">

            <div class="card rounded border-0">
              <img src="../images/colombo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="card-text p-0">
                  <h5 class="loc-text">Buddhist Temple</h5>
                  <div class="main-box">
                    <div class="box item1"></div>
                    <div class="box item2"></div>
                    <div class="box item3"></div>
                    <div class="box item4"></div>
                    <div class="box item5"></div>
                  </div>
                  <p>From $105 / night</p>
                </div>
              </div>
            </div>

          </div>


          <div class="col">

            <div class="card rounded border-0">
              <img src="../images/colombo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="card-text p-0">
                  <h5 class="loc-text">Buddhist Temple</h5>
                  <div class="main-box">
                    <div class="box item1"></div>
                    <div class="box item2"></div>
                    <div class="box item3"></div>
                    <div class="box item4"></div>
                    <div class="box item5"></div>
                  </div>
                  <p>From $105 / night</p>
                </div>
              </div>
            </div>

          </div>


          <div class="col">

            <div class="card rounded border-0">
              <img src="../images/colombo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="card-text p-0">
                  <h5 class="loc-text">Buddhist Temple</h5>
                  <div class="main-box">
                    <div class="box item1"></div>
                    <div class="box item2"></div>
                    <div class="box item3"></div>
                    <div class="box item4"></div>
                    <div class="box item5"></div>
                  </div>
                  <p>From $105 / night</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col">

            <div class="card rounded border-0">
              <img src="../images/colombo.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="card-text p-0">
                  <h5 class="loc-text">Buddhist Temple</h5>
                  <div class="main-box">
                    <div class="box item1"></div>
                    <div class="box item2"></div>
                    <div class="box item3"></div>
                    <div class="box item4"></div>
                    <div class="box item5"></div>
                  </div>
                  <p>From $105 / night</p>
                </div>
              </div>
            </div>

          </div>



        </div>
      </div>
    </div>
  </div>
</div>




    <!--end thingds to do -->




  <!-- eat start -->

  <!-- Your content goes here -->
  <div class="container" id="list-item-4">
    <div class="row">
  
      <div class="col-sm-3 pt-4">
        <h2 class="loc_hed_2">Eat</h2>
        <p>Places to see, ways to wander, and signature experiences. <a href="" class="see_all"> See all</a></p>
      </div>
  
      <div class="col-sm-9">
  
  
        <div class="loc_essential scroll-bar my-5">
          <div class="row flex-nowrap">
            <!-- Your cards go here -->
            <div class="col">
  
              <div class="card rounded border-0">
                <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="card-text p-0">
                    <h5 class="loc-text">Buddhist Temple</h5>
                    <div class="main-box">
                      <div class="box item1"></div>
                      <div class="box item2"></div>
                      <div class="box item3"></div>
                      <div class="box item4"></div>
                      <div class="box item5"></div>
                    </div>
                    <p>From $105 / night</p>
                  </div>
                </div>
              </div>
  
            </div>
  
  
            <div class="col">
  
              <div class="card rounded border-0">
                <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="card-text p-0">
                    <h5 class="loc-text">Buddhist Temple</h5>
                    <div class="main-box">
                      <div class="box item1"></div>
                      <div class="box item2"></div>
                      <div class="box item3"></div>
                      <div class="box item4"></div>
                      <div class="box item5"></div>
                    </div>
                    <p>From $105 / night</p>
                  </div>
                </div>
              </div>
  
            </div>
  
  
            <div class="col">
  
              <div class="card rounded border-0">
                <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="card-text p-0">
                    <h5 class="loc-text">Buddhist Temple</h5>
                    <div class="main-box">
                      <div class="box item1"></div>
                      <div class="box item2"></div>
                      <div class="box item3"></div>
                      <div class="box item4"></div>
                      <div class="box item5"></div>
                    </div>
                    <p>From $105 / night</p>
                  </div>
                </div>
              </div>
  
            </div>
  
  
            <div class="col">
  
              <div class="card rounded border-0">
                <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="card-text p-0">
                    <h5 class="loc-text">Buddhist Temple</h5>
                    <div class="main-box">
                      <div class="box item1"></div>
                      <div class="box item2"></div>
                      <div class="box item3"></div>
                      <div class="box item4"></div>
                      <div class="box item5"></div>
                    </div>
                    <p>From $105 / night</p>
                  </div>
                </div>
              </div>
  
            </div>
  
            <div class="col">
  
              <div class="card rounded border-0">
                <img src="../images/colombo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="card-text p-0">
                    <h5 class="loc-text">Buddhist Temple</h5>
                    <div class="main-box">
                      <div class="box item1"></div>
                      <div class="box item2"></div>
                      <div class="box item3"></div>
                      <div class="box item4"></div>
                      <div class="box item5"></div>
                    </div>
                    <p>From $105 / night</p>
                  </div>
                </div>
              </div>
  
            </div>
  
  
  
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- eat end -->

  <!-- start stay -->



<!-- Your content goes here -->
<div class="container" id="list-item-5">
  <div class="row">

    <div class="col-sm-3 pt-4">
      <h2 class="loc_hed_2">Stay</h2>
      <p>Places to see, ways to wander, and signature experiences. <a href="" class="see_all"> See all</a></p>
    </div>

    <div class="col-sm-9">

   
  <div class="loc_essential scroll-bar my-5">
    <div class="row flex-nowrap">
      <!-- Your cards go here -->
      <div class="col">

        <div class="card rounded border-0">
          <img src="../images/colombo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text p-0">
              <h5 class="loc-text">Buddhist Temple</h5>
              <div class="main-box">
                <div class="box item1"></div>
                <div class="box item2"></div>
                <div class="box item3"></div>
                <div class="box item4"></div>
                <div class="box item5"></div>
              </div>
              <p>From $105 / night</p>
            </div>
          </div>
        </div>

      </div>


      <div class="col">
      
        <div class="card rounded border-0">
          <img src="../images/colombo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text p-0">
              <h5 class="loc-text">Buddhist Temple</h5>
              <div class="main-box">
                <div class="box item1"></div>
                <div class="box item2"></div>
                <div class="box item3"></div>
                <div class="box item4"></div>
                <div class="box item5"></div>
              </div>
              <p>From $105 / night</p>
            </div>
          </div>
        </div>
      
      </div>


      <div class="col">
      
        <div class="card rounded border-0">
          <img src="../images/colombo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text p-0">
              <h5 class="loc-text">Buddhist Temple</h5>
              <div class="main-box">
                <div class="box item1"></div>
                <div class="box item2"></div>
                <div class="box item3"></div>
                <div class="box item4"></div>
                <div class="box item5"></div>
              </div>
              <p>From $105 / night</p>
            </div>
          </div>
        </div>
      
      </div>


      <div class="col">
      
        <div class="card rounded border-0">
          <img src="../images/colombo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text p-0">
              <h5 class="loc-text">Buddhist Temple</h5>
              <div class="main-box">
                <div class="box item1"></div>
                <div class="box item2"></div>
                <div class="box item3"></div>
                <div class="box item4"></div>
                <div class="box item5"></div>
              </div>
              <p>From $105 / night</p>
            </div>
          </div>
        </div>
      
      </div>

      <div class="col">
      
        <div class="card rounded border-0">
          <img src="../images/colombo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="card-text p-0">
              <h5 class="loc-text">Buddhist Temple</h5>
              <div class="main-box">
                <div class="box item1"></div>
                <div class="box item2"></div>
                <div class="box item3"></div>
                <div class="box item4"></div>
                <div class="box item5"></div>
              </div>
              <p>From $105 / night</p>
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

<!-- Add Bootstrap 5 JavaScript via CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>












  <!-- scripts -->

  <script>



    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    // Function to toggle the navbar visibility
    function toggleNavbarVisibility() {
      const navbar = document.getElementById("navbar");
      if (window.scrollY > 0) {
        navbar.classList.add("visible");
      } else {
        navbar.classList.remove("visible");
      }
    }

    // Add a scroll event listener
    window.addEventListener("scroll", toggleNavbarVisibility);

    // Initially, call the function to set the initial state of the navbar
    toggleNavbarVisibility();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      -->

      <iframe src="../location_footer.php" scrolling="no" width="100%"  frameborder="0" id="myiframe" class="iframe_iframe"></iframe>
 
<style>





@media (min-width: 200px) and (max-width: 690px) {
  .iframe_iframe {
    height: 100%;
  }

  iframe {
    height: 100%;
  }
}


     @media(min-width:600px){
      .iframe_iframe{
    height: 1600px;
  }

  iframe{
    height: 1600px;
  }
  } 



      @media(max-width:700px){
      .iframe_iframe{
    height: 900px;
  }

  iframe{
    height: 900px;
  }
  } 


  
  


      @media(max-width:900px) and (min-width:1000px){
      .iframe_iframe{
    height: 930px;
  }

  iframe{
    height: 930px;
  }
  } 

        @media (min-width:990px){
      .iframe_iframe{
    height: 630px;
  }

  iframe{
    height: 630px;
  }
  } 


        @media(min-width:1200px){
      .iframe_iframe{
    height: 610px;
  }

  iframe{
    height: 610px;
  }
  } 

</style>
</body>

</html>