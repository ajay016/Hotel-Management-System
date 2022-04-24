<?php
   include 'adminheader.php';
   include_once 'dbh.inc.php';

   
    ?>

<section class="main-container">
   <div class="main-wrapper">
      <h2>Update Packages</h2>
      <form class="signup-form" action="" method="POST">
         <input type="text" name="payid" placeholder=Payment_ID value="<?php echo $_GET['pd']; ?>">
         <input type="text" name="userid" placeholder=User_ID value="<?php echo $_GET['ud']; ?>">
         <input type="text" name="reserveid" placeholder=Reservation_ID value="<?php echo $_GET['rd']; ?>">
         <input type="text" name="amount" placeholder=Amount value="<?php echo $_GET['am']; ?>">
         <input type="text" name="adminid" placeholder=Admin_ID value="<?php echo $_GET['ad']; ?>">
         <input type="text" name="paymethod" placeholder=Payment_Method value="<?php echo $_GET['pk']; ?>">
         <button type="submit" name="submit">Update</button>
      </form>
   </div>
</section>
<?php
   $pay = $_GET['pd'];
   if (isset($_POST['submit'])) {
      $payid = mysqli_real_escape_string($conn, $_POST['payid']);
      $userid = mysqli_real_escape_string($conn, $_POST['userid']);
      $reserveid = mysqli_real_escape_string($conn, $_POST['reserveid']);
      $amount = mysqli_real_escape_string($conn, $_POST['amount']);
      $adminid = mysqli_real_escape_string($conn, $_POST['adminid']);
      $paymethod = mysqli_real_escape_string($conn, $_POST['paymethod']);

      $sql = "UPDATE payment SET payment_id='$payid', user_id='$userid', reservation_id='$reserveid', amount='$amount', admin_id='$adminid', payment_method='$paymethod' WHERE payment_id='$pay'";
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