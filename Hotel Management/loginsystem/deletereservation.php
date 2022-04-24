<?php
   include 'adminheader.php';
   include_once 'dbh.inc.php';
   $reserveid = $_GET['rd'];
   $sql = "DELETE FROM  reservation WHERE reservation_id='$reserveid'";
   $data = mysqli_query($conn, $sql);
   if ($sql) {
   	echo "font color='white'> Record deleted from Database";
   	?>
   	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/loginsystem/reservation.php">
   	<?php
   } else {
   	echo "<font color='red'>Record NOT Deleted";
   }
?>