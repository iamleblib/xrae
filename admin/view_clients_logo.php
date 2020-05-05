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
      
      <tbody>
        <?php echo viewClientsLogo(); ?>
      </tbody>
      
    </table>
  </div>
</div>