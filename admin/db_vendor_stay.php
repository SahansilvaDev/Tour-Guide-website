<?php include './header.php';?>



<div class="dashboard__main">
  <div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
      <div class="col-auto">
        <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
        <div class="text-15 text-light-1">user side (web) cities  section places part .</div>
      </div>

      <div class="col-auto">

      </div>
    </div>

    <!-- Content -->

    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <h3>Add populer places</h3>
          <p> All images size 1920 x 1280 </p>
        </div>

        <form id="registration-form" action="./API/insert/insert_add_stay.php" method="post"
          enctype="multipart/form-data">



          <div class="card">
            <div class="card-body">
              <div class="mb-3">
               
                <div class="mb-3 row">
                  <label class="form-control"> stay set city : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="place1" placeholder="Place" aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                  <label for="formFileMultiple" class="form-label" for="file2">Image 01</label> 
                <p> image size 800x 1700 </p>
                <input class="form-control" type="file" name="file1" id="formFileMultiple" multiple name="file2" id="file2">



                <div class="mb-3 row">
                  <label class="form-control">  Hedding : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="about" placeholder="hed  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                
                <div class="mb-3 row">
                  <label class="form-control">  price : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="price" placeholder="price  " aria-label="default input example"
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