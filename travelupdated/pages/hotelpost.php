<?php
include '../login/db_conn.php'; // Include the database connection outside the conditional block

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

}

?>







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

  <link rel="stylesheet" href="./css/locpost.css">
  <!-- <link rel="stylesheet" href="./css/blogpost.css"> -->



  <title></title>

</head>

<body>
  <div class="container">

    <div class="locpost_text ">




      <h5 class="px-2">Write a Review</h5>



    </div>

    <!-- hero part start -->

    <div class="hero">


      <div class="row">
        <div class="col-md-4 form">

          <div class="card">
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">How would you rate your experience?</label>
                  <div class="form_rate">
                    <div class="box pop1">
                      <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                        data-bs-content=" popover">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      </span>




                    </div>
                    <div class="box ">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    </div>
                    <div class="box ">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    </div>
                    <div class="box ">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    </div>
                  </div>

                </div>
                <div class="mb-3">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                      style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                  </div>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <div class="see_option ">
            <div class="card">
              <div class="card-body my-3">
                <h5>Tours & experiences</h5>
                <p>Explore different ways to experience this place.</p>
                <div class="see_option_btn position-relative px-5 my-3 mt-sm-5 mt-md-5">
                  <button type="button" class="btn btn-dark   position-absolute  start-50 translate-middle mb-2">See
                    Option</button>
                </div>
              </div>
            </div>
          </div>



        </div>
        <div class="col-md-8">
            <iframe src="./location_post.php" scrolling="no" width="100%" height="1500px" frameborder="0" id="myiframe"
              class="iframe_iframe"></iframe>





        </div>






      </div>
    </div>






    <!-- hero part end -->





  </div>
  


  <script>



  </script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>