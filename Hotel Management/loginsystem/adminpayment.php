<?php
   $page = 'admin';
  
   include 'adminheader.php';
   include 'dbh.inc.php';
   $sql = "SELECT * FROM payment";
   $records = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style>
table, th, td {
	width: 1000px;
    border: 2px solid black;
    text-align: center;
    background-color: #ccc;
      }
button {
    width: 80px;
    height: 50px;
    margin-right: 0px;
    margin-bottom: 0px;
    border: none;
    background-color: #ccc;
    font-family: arial;
    font-size: 14px;
    color: #111;
    cursor: pointer;
}
button:hover {
	background-color: #fff;
}
</style>
</head>
<body>
	<section class="main-container">
	<div class="main-wrapper">
		<h2>Packages</h2>
		<div align="center">
	    <table border="2" align="center">
		<tr> 
			<th>Package ID</th>
			<th>Package name</th>
			<th>Reservation ID</th>
			<th>Amount</th>
            <th>Admin ID</th>
            <th>PAyment Method</th>
			<th colspan="2">Operations</th>
				<?php
				$i=1;
			   while($result = mysqli_fetch_assoc($records)) {
			   		echo "<tr>
			   		   <td>".$result['payment_id']."</td>
			   		   <td>".$result['user_id']."</td>
			   		   <td>".$result['reservation_id']."</td>
			   		   <td>".$result['amount']."</td>
			   		   <td>".$result['admin_id']."</td>
			   		   <td>".$result['payment_method']."</td>
			   		   <td><a href='adminpayupdate.php?pd=$result[payment_id]&ud=$result[user_id]&rd=$result[reservation_id]&am=$result[amount]&ad=$result[admin_id]&pk=$result[payment_method]'>Edit</a></td>
			   		   <td><a href='deletepayment.php?pd=$result[payment_id]' onclick='return checkdelete()'>Delete</a></td>
			   		</tr>";	   			   
			   }
			?>
		</tr>
	   </table>
    </div>
		
	</div>
</section>
<script>
	function checkdelete() {
		return confirm('Are you sure you want to delete?');
	}
</script>
<?php
    include_once 'footer.php'
?>