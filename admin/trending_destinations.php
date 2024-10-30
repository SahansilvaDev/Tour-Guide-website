<?php include './header.php';?>



<div class="dashboard__main">
  <div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
      <div class="col-auto">
        <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
        <div class="text-15 text-light-1">user side (web) best hotels and resourt .</div>
      </div>

      <div class="col-auto">

      </div>
    </div>

    <!-- Content -->

    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <h3>best hotels and resourt</h3>
          <p> All images size 1200 x 1700 (importent)</p>
        </div>

        <form id="registration-form" action="./API/insert/insert_best_hotels_and_resourt.php" method="post"
          enctype="multipart/form-data">



          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Hotel Image</label>
                <input class="form-control" type="file" name="file1" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Hotel Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_name" placeholder="Hotel Name " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> Hotel description : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_description1" placeholder="Hotel Discription  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                 <div class="mb-3 row">
                  <label class="form-control"> Hotel price : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="number" name="text1" placeholder="Hotel Price  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>



              </div>
            </div>
          </div>


          
            <div class="mb-3 submit">
              <input type="submit" name="submit" value="Submit">
            </div>
        </form>


        <!-- #region -->
      </div>
    </div>

  </div>
</div>

</div>

<?php include './footer.php';?>