<div class="container-fluid">
  <?php 
    if (isset($_GET['empty'])) {
      echo "<span class='label label-danger'>All Fields Are Required</span>";
    }
  ?>
  <hr>

  <div class="row">
    <form method="POST" enctype="multipart/form-data">

      <div class="col-md-6 col-md-offset-3">
          <label for="title">Title</label>
          <input type="text" name="title" placeholder="Enter logo title" class="form-control">
        </div>
        
        <div class="col-md-6 col-md-offset-3">
          <label for="title">URL</label>
          <input type="text" name="url" placeholder="Enter url" class="form-control">
        </div>

      <div class="col-md-6 col-md-offset-3">
        <label for="title">Image</label>
        <input type="file" name="file" class="form-control">
      </div>
      
      <div class="col-md-6 col-md-offset-3"> <br>
        <input type="submit" name="addClientsLogo" class="btn btn-primary btn-block" value="Add Client Logo"> <br>
      </div>
      </form>
  </div>
</div>