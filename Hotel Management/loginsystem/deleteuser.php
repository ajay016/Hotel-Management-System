<?php
   include 'adminheader.php';
   include_once 'dbh.inc.php';
   $userid = $_GET['ud'];
   $sql = "DELETE FROM  users WHERE user_id='$userid'";
   $data = mysqli_query($conn, $sql);
   if ($sql) {
   	echo "font color='white'> Record deleted from Database";
   	?>
   	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/loginsystem/usertable.php">
   	<?php
   } else {
   	echo "<font color='red'>Record NOT Deleted";
   }
?>