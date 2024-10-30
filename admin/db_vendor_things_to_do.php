<?php include './header.php';?>


 <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
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

        <form id="registration-form" action="./API/insert/insert_add_things_to_do.php" method="post"
          enctype="multipart/form-data">



          <div class="card">
            <div class="card-body">
              <div class="mb-3">
               
                <div class="mb-3 row">
                  <label class="form-control"> Things To Do city : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="place1" placeholder="Place" aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>

                  <label for="formFileMultiple" class="form-label" for="file2">Image 01</label> 
                <p> image size 800x 1700 </p>
                <input class="form-control" type="file" name="file1" id="formFileMultiple" multiple name="file2" id="file2">



                <div class="mb-3 row">
                  <label class="form-control"> Tings To Do Hedding : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="about" placeholder="hed  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


                
                <div class="mb-3 row">
                  <label class="form-control"> Things To Do price : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="price" placeholder="price  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div>


              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 01</h5>
                <input class="form-control" type="file" name="things_to_do_img1" id="formFileMultiple" multiple name="file2" id="file2">
              </div>


               <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 02</h5>
                <input class="form-control" type="file" name="things_to_do_img2" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 03</h5>
                <input class="form-control" type="file" name="things_to_do_img3" id="formFileMultiple" multiple name="file2" id="file2">
              </div>


              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 04</h5>
                <input class="form-control" type="file" name="things_to_do_img4" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 05</h5>
                <input class="form-control" type="file" name="things_to_do_img5" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 06</h5>
                <input class="form-control" type="file" name="things_to_do_img6" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 07</h5>
                <input class="form-control" type="file" name="things_to_do_img7" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 08</h5>
                <input class="form-control" type="file" name="things_to_do_img8" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 09</h5>
                <input class="form-control" type="file" name="things_to_do_img9" id="formFileMultiple" multiple name="file2" id="file2">
              </div>
                

              <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Image 10</h5>
                <input class="form-control" type="file" name="things_to_do_img10" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

               <div class="mb-3 row">
                <label for="formFileMultiple" class="form-label" for="file2"> location Images </label> 
                    <p> image size 800x 1700 </p>
                    <h5>Main Image </h5>
                <input class="form-control" type="file" name="things_to_do_img11" id="formFileMultiple" multiple name="file2" id="file2">
              </div>

              <!-- <div class="mb-3 row">
                  <label class="form-control"> Location Text : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="things_to_do_text" placeholder="Location Text  " aria-label="default input example"
                      style="border:1px solid black;">
                  </div>

                </div> -->

<div class="mb-3 row">
  <label class="form-control"> Location Text : </label>
  <div class="col-sm-12">
    <div class="form-floating">
     
       <textarea class="form-control" id="editor"   name="things_to_do_text"  id="article_editor" style="height: auto" style="border:1px solid black;"></textarea>
                    
      <label for="floatingTextarea2"> </label>
    </div>
  </div>
</div>

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

                            <div class="mb-3 row">
                  <label class="form-control"> Location Map url : </label>
                  <div class="col-sm-12">
                    <input class="form-control" type="text" name="things_to_do_url" placeholder="Location url  " aria-label="default input example"
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