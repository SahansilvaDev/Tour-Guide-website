

<!DOCTYPE html>
<html>

<link rel="stylesheet" href="./css/locatonpost.css">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
</head>



<body>


<?php  


// Get the city name from the URL parameter







if (isset($_GET['locationId'])) {
    $locationId = $_GET['locationId'];
    // Sanitize the input to prevent SQL injection
    $locationId = $conn->real_escape_string($locationId);

    // Query the database to retrieve data related to the locationId
    $sql = "SELECT * FROM places WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $locationId); // Assuming id is an integer
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Display the data related to the locationId
        echo "Stay ID: " . $row["id"] . "<br>";
        echo "Stay City: " . $row["place_city"] . "<br>";
        echo "place_hed: " . $row["place_hed"] . "<br>";
        // Add more columns as needed
    } else {
        echo "No data found for location ID: $locationId.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "LocationId parameter not set in the URL.";
}
?>

<?php include './post_header.php'; ?>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-9">

 


  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="https://www.andbeyond.com/wp-content/uploads/sites/5/colombo-sri-lanka.jpg"
        style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img
        src="https://www.talesofceylon.com/wp-content/uploads/2019/10/Colombo_800x520-1.jpg"style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="https://content.r9cdn.net/rimg/dimg/fc/17/07351718-city-36384-1645c1c32eb.jpg?width=1366&height=768&xhint=1943&yhint=1225&crop=true" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img
        src="https://www.colombo.mc.gov.lk/images/slider2.jpg"
        style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="https://island.lk/wp-content/uploads/2021/06/colombo.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img
        src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg?q=10&h=200"
        style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="row scroll-bar">
      <div class="column">
        <img class="demo cursor"
          src="https://www.andbeyond.com/wp-content/uploads/sites/5/colombo-sri-lanka.jpg"
          style="width:100%" onclick="currentSlide(1)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor"
          src="https://www.talesofceylon.com/wp-content/uploads/2019/10/Colombo_800x520-1.jpg"style="width:100%" onclick="currentSlide(2)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="https://content.r9cdn.net/rimg/dimg/fc/17/07351718-city-36384-1645c1c32eb.jpg?width=1366&height=768&xhint=1943&yhint=1225&crop=true"
          style="width:100%" onclick="currentSlide(3)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="https://www.colombo.mc.gov.lk/images/slider2.jpg"
          style="width:100%" onclick="currentSlide(4)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor"
          src="https://img.freepik.com/premium-photo/beautiful-nature-evening-spring-forest-trees-with-sun-rays_979131-1255.jpg?w=360"
          style="width:100%" onclick="currentSlide(5)" alt="">
      </div>
      <div class="column">
        <img class="demo cursor" src="https://cdn.pixabay.com/photo/2018/02/02/17/29/nature-3125912_1280.jpg"
          style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor"
          src="https://island.lk/wp-content/uploads/2021/06/colombo.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor"
          src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg?q=10&h=200"
          style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
      <div class="column">
        <img class="demo cursor"
          src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg?q=10&h=200"
          style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
      </div>
    </div>

</div>
</div>


    <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br>
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


