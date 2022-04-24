<?php
   include 'adminheader.php';
   include_once 'dbh.inc.php';
   $roomid = $_GET['rd'];
   $sql = "DELETE FROM  room WHERE room_id='$roomid'";
   $data = mysqli_query($conn, $sql);
   if ($sql) {
   	echo "font color='white'> Record deleted from Database";
   	?>
   	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/loginsystem/room.php">
   	<?php
   } else {
   	echo "<font color='red'>Record NOT Deleted";
   }
?>