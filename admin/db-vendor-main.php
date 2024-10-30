<?php include './header.php';?>



<div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
            <div class="text-15 text-light-1">user side (web) edit main section slide image part .</div>
          </div>

          <div class="col-auto">

          </div>
        </div>

        <!-- Content -->

        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <h3>Add slide image</h3>
            </div>

               <form id="registration-form" action="./API/insert/main_slide_insert.php" method="post" enctype="multipart/form-data">

             <div  class="mb-3">
            <label for="formFileMultiple" class="form-label" for="file1">Slide 01</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple name="file1" id="file1">
        </div>

        <div  class="mb-3">
            <label for="formFileMultiple" class="form-label" for="file2">Slide 02</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple name="file2" id="file2">
        </div>

        <div  class="mb-3">
            <label for="formFileMultiple" class="form-label" for="file3">Slide 03</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple name="file3" id="file3">
        </div>

        <div  class="mb-3 submit" >
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
