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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="./css/blogpost.css">
  <title></title>

</head>

<body style="height:1500px">





  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/colombo.jpg" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="main-text">Colombo</h1>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/colombo.jpg" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="main-text">Colombo</h1>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/colombo.jpg" class=" w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="main-text">Colombo</h1>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <nav class=" navbar-expand-sm sticky-top">



    <!-- tabs -->


    <div class="row py-3">

      <div class="col-sm-8 px-5 ">
        <form action="">
          <input type="text" placeholder="Search ..." aria-label="Search" name="location" />
      </div>
      <div class="col-sm-2">
        <input type="submit" class="btn btn-primary" value="Search">

      </div>
      </form>
    </div>

    <!-- tabs open -->

    <ul class="nav nav-pills px-3 pb-3" id="myTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1"
          aria-selected="true">All result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
          aria-selected="false">Hotels</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
          aria-selected="false">Vacation Rentals</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="tab4-tab" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4"
          aria-selected="false">Resturents</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="tab5-tab" data-bs-toggle="tab" href="#tab5" role="tab" aria-controls="tab5"
          aria-selected="false">Things To do</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="tab6-tab" data-bs-toggle="tab" href="#tab6" role="tab" aria-controls="tab6"
          aria-selected="false">Tours & Tickets</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="tab6-tab" data-bs-toggle="tab" href="#tab6" role="tab" aria-controls="tab6"
          aria-selected="false">Locations</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="tab7-tab" data-bs-toggle="tab" href="#tab7" role="tab" aria-controls="tab7"
          aria-selected="false">Travel Guides</a>
      </li>


    </ul>

  </nav>

  <div class="tab-content mt-5 px-5">

    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

      <!-- frist card -->
      <div class="row">
        <div class="col-sm-8">

          <div class="card">
            <div class="card-header">
              Featured
            </div>

            <div class="card p-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                  <p class="location px-2"><span> <i class="material-icons "
                        style="font-size:16px; ">location_on</i></span> Locations</p>

                </div>

                <div class="col-md-8">
                  <a href="#">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content.
                        This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>

      <!-- frist card end -->
      <br>
      <div class="row">
        <div class="col-sm-8">

          <div class="card">
            <div class="card-header">
              Featured
            </div>

            <div class="card p-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                </div>

                <div class="col-md-8">
                  <a href="#">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content.
                        This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>

      <!-- third section -->

      <div class="row">
        <div class="col-sm-8">



          <div class="card p-3">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
              </div>

              <div class="col-md-8">
                <a href="#">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content.
                      This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>


      </div>




      <!--third  end -->



      <!-- fourth section -->

      <div class="row">
        <div class="col-sm-8">



          <div class="card p-3">
            <div class="row g-0">
              <div class="col-md-4">
                <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
              </div>

              <div class="col-md-8">
                <a href="#">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content.
                      This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>


      </div>




      <!--fourth  end -->

    </div>

    <!-- tab 1 end -->





    <!-- tab 2 start -->


    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
     

      <!-- frist card -->
      <div class="row">
        <div class="col-sm-8">
      
          <div class="card">
            <div class="card-header">
              Featured
            </div>
      
            <div class="card p-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                  <p class="location px-2"><span> <i class="material-icons " style="font-size:16px; ">location_on</i></span>
                    Locations</p>
      
                </div>
      
                <div class="col-md-8">
                  <a href="#">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content.
                        This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </a>
                </div>
      
              </div>
            </div>
          </div>
      
      
        </div>
      </div>

      <!-- end -->


   
      
      
      
      <!--  end -->
      
      </div>
      
      <!-- tab 1 end -->
      
      
      
      
      
      <!-- tab 2 start -->
      
      
      <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
      
      
        <!-- frist card -->
        <div class="row">
          <div class="col-sm-8">
      
            <div class="card">
              <div class="card-header">
                Featured
              </div>
      
              <div class="card p-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                    <p class="location px-2"><span> <i class="material-icons " style="font-size:16px; ">location_on</i></span>
                      Locations</p>
      
                  </div>
      
                  <div class="col-md-8">
                    <a href="#">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                          additional content.
                          This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </a>
                  </div>
      
                </div>
              </div>
            </div>
      
      
          </div>
        </div>
      
        <!-- end -->


     
    </div>

    <!-- tab 2 end -->


<!-- tab 3 start -->

    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
      <
              <!-- frist card -->
        <div class="row">
          <div class="col-sm-8">
      
            <div class="card">
              <div class="card-header">
                Featured
              </div>
      
              <div class="card p-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                    <p class="location px-2"><span> <i class="material-icons " style="font-size:16px; ">location_on</i></span>
                      Locations</p>
      
                  </div>
      
                  <div class="col-md-8">
                    <a href="#">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                          additional content.
                          This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </a>
                  </div>
      
                </div>
              </div>
            </div>
      
      
          </div>
        </div>
      
        <!-- end -->


    </div>
 

  <!-- tab 3end -->


    <!-- tab 4 start -->
    
    
    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
      
              <!-- frist card -->
              <div class="row">
                <div class="col-sm-8">
              
                  <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
              
                    <div class="card p-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                          <p class="location px-2"><span> <i class="material-icons " style="font-size:16px; ">location_on</i></span>
                            Locations</p>
              
                        </div>
              
                        <div class="col-md-8">
                          <a href="#">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content.
                                This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </a>
                        </div>
              
                      </div>
                    </div>
                  </div>
              
              
                </div>
              </div>
              
              <!-- end -->


    </div>
    
    <!-- tab 4 end -->

    <!-- tab 4 start -->
    
    
    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">

              <!-- frist card -->
              <div class="row">
                <div class="col-sm-8">
              
                  <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
              
                    <div class="card p-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                          <p class="location px-2"><span> <i class="material-icons " style="font-size:16px; ">location_on</i></span>
                            Locations</p>
              
                        </div>
              
                        <div class="col-md-8">
                          <a href="#">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content.
                                This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </a>
                        </div>
              
                      </div>
                    </div>
                  </div>
              
              
                </div>
              </div>
              
              <!-- end -->


    </div>
    
    <!-- tab 4 end -->

    <!-- tab 4 start -->
    
    
    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">

              <!-- frist card -->
              <div class="row">
                <div class="col-sm-8">
              
                  <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
              
                    <div class="card p-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                          <p class="location px-2"><span> <i class="material-icons " style="font-size:16px; ">location_on</i></span>
                            Locations</p>
              
                        </div>
              
                        <div class="col-md-8">
                          <a href="#">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content.
                                This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </a>
                        </div>
              
                      </div>
                    </div>
                  </div>
              
              
                </div>
              </div>
              
              <!-- end -->


    </div>
    
    <!-- tab 4 end -->

    <!-- tab 4 start -->
    
    
    <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">

              <!-- frist card -->
              <div class="row">
                <div class="col-sm-8">
              
                  <div class="card">
                    <div class="card-header">
                      Featured
                    </div>
              
                    <div class="card p-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <a href="#"> <img src="./images/colombo.jpg" class="img-fluid rounded-start" alt="..."> </a>
                          <p class="location px-2"><span> <i class="material-icons " style="font-size:16px; ">location_on</i></span>
                            Locations</p>
              
                        </div>
              
                        <div class="col-md-8">
                          <a href="#">
                            <div class="card-body">
                              <h5 class="card-title" id="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content.
                                This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </a>
                        </div>
              
                      </div>
                    </div>
                  </div>
              
              
                </div>
              </div>
              
              <!-- end -->


    </div>
    
    <!-- tab 4 end -->

    

 











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>