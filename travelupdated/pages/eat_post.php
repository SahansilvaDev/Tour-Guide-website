<?php
include '../login/db_conn.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./css/locatonpost.css">
    <link rel="stylesheet" href="./css/blog_post.css">

    <title></title>
</head>

<body>
    <?php
    if (isset($_GET['locationId'])) {
        $locationId = $_GET['locationId'];
        // Sanitize the input to prevent SQL injection
        $locationId = $conn->real_escape_string($locationId);

        // Query the database to retrieve data related to the locationId
        $sql = "SELECT * FROM eat WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $locationId); // Assuming id is an integer
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Output data of the first row (assuming you only expect one result)
            $row = $result->fetch_assoc();
    ?>
            <div class="main_section">
                <div class="main_section_img">
                    <img src="../../admin/img/eat/<?php echo $row['eat_main_img']; ?>" alt="">
                    <div class="main_section_text">
                        <h1><?php echo $row["eat_city"]; ?></h1>
                    </div>
                </div>
            </div>
<?php include './post_header.php'; ?>

     
            <div class="main_section_hed w3-row">
                <div class="w3-container " style="text-shadow:1px 1px 0 #444; margin-left: 50px;">
                    <div class="w3-col s5  w3-left">
                        <h1 style="font-family: Tahoma, 'Trebuchet MS', sans-serif;text-transform: capitalize;"><?php echo $row["eat_hed"]; ?></h1>
                        <div class="review-holder">
                            <div class="review">
                                <span data-description="hate it" onclick="submitRating(1)"></span>
                                <span data-description="don't like it" onclick="submitRating(2)"></span>
                                <span data-description="it's ok" onclick="submitRating(3)"></span>
                                <span data-description="it's good" onclick="submitRating(4)"></span>
                                <span data-description="it's great" onclick="submitRating(5)"></span>
                            </div>
                        </div>
                    </div>
                    <div class="w3-col s5  w3-center">

                    </div>

                    <div class="w3-col s2  w3-right">
                        <button class="w3-button w3-color-white w3-round-xxlarge w3-margin-top"
                                style="background-color:#110934;color:white;" onclick="document.getElementById('id01').style.display='block'" >See Location</button>

                   
                                  <div id="id01" class="w3-modal">
                                    <div class="w3-modal-content">
                                      <div class="w3-container">
                                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                          <!-- <iframe src="<?php echo $row['eat_img_url'];?>" width="100%" height="300" style="border:1px solid black;"> 
                                          
</iframe> -->

<iframe width="560" height="315" src="https://www.youtube.com/embed/eurd0WONOdw?si=SN6b5A4vwqkqTrQ7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                      </div>
                                    </div>
                                  </div>
                                </div>     
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="slide1 cloumn">

                </div>
                <div class="slide2 cloumn">
                    <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">1 / 10</div>
                            <img src="../../admin/img/eat/<?php echo $row['eat_img1']; ?>"
                                style="width:100%; " >
                        </div>
                  
     

       <div class="mySlides">
          <div class="numbertext">2 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img2']; ?>" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img3']; ?>" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img4']; ?>" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">5 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img5']; ?>" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">6 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img6']; ?>"style="width:100%">
        </div> 

         <div class="mySlides">
          <div class="numbertext">7 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img7']; ?>"style="width:100%">
        </div> 

         <div class="mySlides">
          <div class="numbertext">8 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img8']; ?>"style="width:100%">
        </div> 

         <div class="mySlides">
          <div class="numbertext">9 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img9']; ?>"style="width:100%">
        </div> 

         <div class="mySlides">
          <div class="numbertext">10 / 10</div>
          <img src="../../admin/img/eat/<?php echo $row['eat_img10']; ?>"style="width:100%">
        </div> 

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>


        <div class="row scroll-bar">
          <div class="column">
            <img class="demo cursor" src="../../admin/img/eat/<?php echo $row['eat_img1']; ?>"style="width:100%; height:100px;" onclick="currentSlide(1)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor"
              src="../../admin/img/eat/<?php echo $row['eat_img2']; ?>"style="width:100%; height:100px;"
              onclick="currentSlide(2)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor"
              src="../../admin/img/eat/<?php echo $row['eat_img3']; ?> " style="width:100%; height:100px;" onclick="currentSlide(3)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="../../admin/img/eat/<?php echo $row['eat_img4']; ?> "style="width:100%; height:100px;"
              onclick="currentSlide(4)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor"
              src="../../admin/img/eat/<?php echo $row['eat_img5']; ?>"style="width:100%; height:100px;" onclick="currentSlide(5)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="../../admin/img/eat/<?php echo $row['eat_img6']; ?>"style="width:100%; height:100px;" onclick="currentSlide(6)" alt="Snowy Mountains">
          </div>
          <div class="column">
            <img class="demo cursor" src="../../admin/img/eat/<?php echo $row['eat_img7']; ?> "style="width:100%; height:100px;"
              onclick="currentSlide(7)" alt="Snowy Mountains">
          </div>
          <div class="column">
            <img class="demo cursor"
              src="../../admin/img/eat/<?php echo $row['eat_img8']; ?> "style="width:100%; height:100px;" onclick="currentSlide(8)" alt="Snowy Mountains">
          </div>
          <div class="column">
            <img class="demo cursor"
              src="../../admin/img/eat/<?php echo $row['eat_img9']; ?> "style="width:100%; height:100px;" onclick="currentSlide(9)" alt="Snowy Mountains">
          </div>
          <div class="column">
            <img class="demo cursor"
              src="../../admin/img/eat/<?php echo $row['eat_img10']; ?> "style="width:100%; height:100px;" onclick="currentSlide(10)" alt="Snowy Mountains">
          </div>
        </div>
                    </div>
      </div>
    </div>
  </div>

  


   
    <div class="second_section w3-container">
     

      <div class="w3-row">
  <div class="w3-col w3-container" style="width:10%"></div>

  <div class="w3-col  w3-container" style="width:80%">
      <div class="ss_about">
        <h2 >About <span style="text-transform: capitalize;"><?php echo $row["eat_hed"]; ?></span></h2>
      </div>
      <p class="second_section_para"><?php echo $row['eat_img_text']; ?></p>
    </div>

      <div class="w3-col  w3-container" style="width:10%"></div>
</div>

 
    </div>

  
    
      
  

    <div class="map w3-container">
      <footer class="w3-container w3-teal">
        <h5>Map</h5>
        <p>Map</p>
      </footer>
    </div>


    <?php 
    
   } else {
            echo "No data found for location ID: $locationId.";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "LocationId parameter not set in the URL.";
    }
    ?>



  
    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }

      // Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


  function submitRating(rating) {
    // You can perform actions here to submit the rating to your server or perform any other necessary actions.
    alert(`Rating submitted: ${rating}`);
  }
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


