<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sno" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>


<?php

    if (isset($_POST['showbtn'])) {

     include 'config.php';

    $sno = $_POST['sno'];
    $sql = "SELECT * FROM clients WHERE sno=$sno";
    $result = mysqli_query($mysqli , $sql) or die("Query Unsuccessful.");

     if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
          <label>First Name</label>
          <input type="hidden" name="sno" value="<?php echo $row['sno'] ?>"/>
          <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"/>
      </div>

      <div class="form-group">
          <label>Last Name</label>   
          <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"/>
      </div>



      <div class="form-group">
          <label>User Email</label>
          <input type="gmail" name="user_email" value="<?php echo $row['user_email'] ?>"/>
      </div>
      <div class="form-group">
          <label>User Phone</label>
          <input type="text" name="user_phone" value="<?php echo $row['user_phone'] ?>"/>
      </div>

      <div class="form-group">
          <label>Booking Start Date</label>
          <input type="date" name="bookingstart" value="<?php echo $row['bookingstart'] ?>"/>
      </div>

      <div class="form-group">
          <label>Booking End Date</label>
          <input type="date" name="bookingend" value="<?php echo $row['bookingend'] ?>"/>
      </div>

      <div class="form-group">
          <label>Packages</label>
          <input type="text" name="Packages" value="<?php echo $row['Packages'] ?>"/>
      </div>

    <input class="submit" type="submit" value="Update"  />
    </form>

<?php 
    }
}
}
?>
</div>
</div>
</body>
</html>
