<?php include './header.php';?>



<div class="dashboard__main">
  <div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
      <div class="col-auto">
        <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
        <div class="text-15 text-light-1">user side (web) edit  Most Popular Travel Places  Section .</div>
      </div>

      <div class="col-auto">

      </div>
    </div>

    <!-- Content -->

    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <h3>Add  Most Popular Travel Places </h3>
          <p> All images size 1200 x 1700 </p>
        </div>

        <form id="registration-form" action="./API/insert/insert_travel_places.php" method="post"
          enctype="multipart/form-data">



          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Image 01</label>
                <input class="form-control" type="file" name="file1" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Place : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="place1" placeholder="Place" aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <!-- <div class="mb-3 row">
                  <label class="form-control"> days : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" placeholder="Place  " aria-label="default input example" style="border:1px solid black;">
                  </div>

                </div> -->


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="location_name1" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> people : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="people1" type="number" placeholder="people  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file2">Image 02</label>
                <p> image size 800x 1700 </p>
                <input class="form-control" type="file" name="file2" id="formFileMultiple" multiple name="file2" id="file2">

                <div class="mb-3 row">
                  <label class="form-control"> Place : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="place2" placeholder="Place  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <!-- <div class="mb-3 row">
                  <label class="form-control"> days : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" placeholder="Place  " aria-label="default input example" style="border:1px solid black;">
                  </div>

                </div> -->


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="location_name2" type="text" placeholder="Location Name   " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> people : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="people2" type="number" placeholder="people  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file3">Image 03</label>
                <input class="form-control" type="file" name="file3" id="formFileMultiple" multiple name="file3" id="file3">

                <div class="mb-3 row">
                  <label class="form-control"> Place : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="place3" type="text" placeholder="Place  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <!-- <div class="mb-3 row">
                  <label class="form-control"> days : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" placeholder="Place  " aria-label="default input example" style="border:1px solid black;">
                  </div>

                </div> -->


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="location_name3" type="text" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> people : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="people3" type="number" placeholder="people  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file3">Image 04</label>
                <input class="form-control" name="file4" type="file" name="file4" id="formFileMultiple" multiple name="file3" id="file3">


                <div class="mb-3 row">
                  <label class="form-control"> Place : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="place4" type="text" placeholder="Place  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <!-- <div class="mb-3 row">
                  <label class="form-control"> days : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" placeholder="Place  " aria-label="default input example" style="border:1px solid black;">
                  </div>

                </div> -->


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="location_name4" type="text" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> people : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="people4" type="number" placeholder="people  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file3">Image 05</label>
                <input class="form-control" type="file" name="file5" id="formFileMultiple" multiple name="file3" id="file3"> <br>

                <div class="mb-3 row">
                  <label class="form-control"> Place : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name= "place5" type="text" placeholder="Place  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <!-- <div class="mb-3 row">
                  <label class="form-control"> days : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" placeholder="Place  " aria-label="default input example" style="border:1px solid black;">
                  </div>

                </div> -->


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="location_name5" type="text" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> people : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="people5" type="number" placeholder="people  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file3">Image 06</label>
                <input class="form-control" type="file" name="file6" id="formFileMultiple" multiple name="file3" id="file3"> <br>

                <div class="mb-3 row">
                  <label class="form-control"> Place : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name= "place6" type="text" placeholder="Place  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <!-- <div class="mb-3 row">
                  <label class="form-control"> days : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" placeholder="Place  " aria-label="default input example" style="border:1px solid black;">
                  </div>

                </div> -->


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="location_name6" type="text" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> people : </label>
                  <div class="col-sm-12">
                    <input class="form-control" name="people6" type="number" placeholder="people  " aria-label="default input example"
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