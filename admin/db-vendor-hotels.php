<?php include './header.php';?>



<div class="dashboard__main">
  <div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
      <div class="col-auto">
        <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
        <div class="text-15 text-light-1">user side (web) edit Hotels part .</div>
      </div>

      <div class="col-auto">

      </div>
    </div>

    <!-- Content -->

    <div class="card">
      <div class="card-body">
        <div class="mb-3">
          <h3>Add populer places</h3>
          <p> All images size 1200 x 1700 </p>
        </div>

        <form id="registration-form" action="./API/insert/insert_hotels.php" method="post"
          enctype="multipart/form-data">



          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Image 01</label>
                <input class="form-control" type="file" name="file1" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Hotel Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_name1" placeholder="Hotel Name " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="location1" placeholder="Location Name  " aria-label="default input example"
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
                  <label class="form-control"> Hotel name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="text1" placeholder="Hotel Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>



              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Image 02</label>
                <input class="form-control" type="file" name="file2" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Hotel Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_name2" placeholder="Hotel Name " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="location2" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <div class="mb-3 row">
                  <label class="form-control"> Hotel description : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_description2" placeholder="Hotel Discription  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                 <div class="mb-3 row">
                  <label class="form-control"> Hotel name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="text2" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>



              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Image 03</label>
                <input class="form-control" type="file" name="file3" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Hotel Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_name3" placeholder="Hotel Name " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="location3" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <div class="mb-3 row">
                  <label class="form-control"> Hotel description : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_description3" placeholder="Hotel Discription  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                 <div class="mb-3 row">
                  <label class="form-control"> Hotel name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="text3" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>



              </div>
            </div>
          </div>


          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Image 04</label>
                <input class="form-control" type="file" name="file4" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Hotel Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_name4" placeholder="Hotel Name " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="location4" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <div class="mb-3 row">
                  <label class="form-control"> Hotel description : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_description4" placeholder="Hotel Discription  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                 <div class="mb-3 row">
                  <label class="form-control"> Hotel name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="text4" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>



              </div>
            </div>
          </div>



          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Image 05</label>
                <input class="form-control" type="file" name="file5" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Hotel Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_name5" placeholder="Hotel Name " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="location5" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <div class="mb-3 row">
                  <label class="form-control"> Hotel description : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_description5" placeholder="Hotel Discription  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                 <div class="mb-3 row">
                  <label class="form-control"> Hotel name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="text5" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>



              </div>
            </div>
          </div>
          



          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label" for="file1">Image 06</label>
                <input class="form-control" type="file" name="file6" id="formFileMultiple" multiple name="file1" id="file1">

                <div class="mb-3 row">
                  <label class="form-control"> Hotel Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_name6" placeholder="Hotel Name " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                <div class="mb-3 row">
                  <label class="form-control"> Location Name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="location6" placeholder="Location Name  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                <div class="mb-3 row">
                  <label class="form-control"> Hotel description : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="hotel_description6" placeholder="Hotel Discription  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                 <div class="mb-3 row">
                  <label class="form-control"> Hotel name : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="text6" placeholder="Location Name  " aria-label="default input example"
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