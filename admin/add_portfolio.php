<div class="container">
  <?php 
    if (isset($_GET['empty'])) {
      echo "<span class='label label-danger'>All Fields Are Required</span>";
    }
  ?>
  <hr>
  <div class="row">
    <form method="POST" enctype="multipart/form-data">
    <div class="col-md-5">
        <label for="title">Title</label>
        <input type="text" class="form-control" placeholder="Enter Portfolio Title" name="title">
      </div>
      <div class="col-md-5">
        <label for="title">Image</label>
        <input type="file" name="file" class="form-control" name="">
      </div>
      <div class="col-md-10"> <br>
        <textarea name="description" placeholder="Enter Description" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="col-md-10"> <br>
        <input type="submit" name="addPortfolio" class="btn btn-primary btn-block" value="Add Portfolio"> <br>
      </div>
      </form>
  </div>
</div>