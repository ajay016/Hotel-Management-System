<?php
   include 'adminheader.php';
   include_once 'dbh.inc.php';
   $payid = $_GET['pd'];
   $sql = "DELETE FROM  payment WHERE payment_id='$payid'";
   $data = mysqli_query($conn, $sql);
   if ($sql) {
   	echo "font color='white'> Record deleted from Database";
   	?>
   	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/loginsystem/adminpayment.php">
   	<?php
   } else {
   	echo "<font color='red'>Record NOT Deleted";
   }
?>