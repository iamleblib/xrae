<div class="container">
  <?php 
    if (isset($_GET['postAdded'])) {
      echo "<span class='label label-success'>Portfolio Added</span>";
    } else if (isset($_GET['deleted'])) {
      echo "<span class='label label-success'>Portfolio Deleted</span>";
    }
  ?>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php echo viewPortfolio(); ?>
      </tbody>
      <tfoot>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
      </tfoot>
    </table>
  </div>
</div>