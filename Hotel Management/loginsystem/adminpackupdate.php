<?php
   include 'adminheader.php';
   include_once 'dbh.inc.php';

   
    ?>

<section class="main-container">
   <div class="main-wrapper">
      <h2>Update Packages</h2>
      <form class="signup-form" action="" method="POST">
         <input type="text" name="packid" value="<?php echo $_GET['pd']; ?>">
         <input type="text" name="packname" value="<?php echo $_GET['pn']; ?>">
         <input type="text" name="price" value="<?php echo $_GET['pr']; ?>">
         <input type="text" name="noroom" value="<?php echo $_GET['nr']; ?>">
         <button type="submit" name="submit">Update</button>
      </form>
   </div>
</section>
<?php
   $pack = $_GET['pd'];
   if (isset($_POST['submit'])) {
      $packid = mysqli_real_escape_string($conn, $_POST['packid']);
      $packname = mysqli_real_escape_string($conn, $_POST['packname']);
      $price = mysqli_real_escape_string($conn, $_POST['price']);
      $noroom = mysqli_real_escape_string($conn, $_POST['noroom']);

      $sql = "UPDATE packages SET package_id='$packid', package_name='$packname', price='$price', no_of_rooms='$noroom' WHERE package_id='$pack'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
         echo "Record Updated";
      } else {
         echo "Not yet Updated";
      }
   } else {
      echo "Confirm";
   }
?>
<?php
    include_once 'footer.php'
?>