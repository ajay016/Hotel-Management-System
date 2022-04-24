<?php
   $page = 'admin';
  
   include 'adminheader.php';
   include 'dbh.inc.php';
   $sql = "SELECT * FROM packages";
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
			<th>Price</th>
			<th>no. of Rooms</th>
			<th colspan="2">Operations</th>
				<?php
				$i=1;
			   while($result = mysqli_fetch_assoc($records)) {
			   		echo "<tr>
			   		   <td>".$result['package_id']."</td>
			   		   <td>".$result['package_name']."</td>
			   		   <td>".$result['price']."</td>
			   		   <td>".$result['no_of_rooms']."</td>
			   		   <td><a href='adminpackupdate.php?pd=$result[package_id]&pn=$result[package_name]&pr=$result[price]&nr=$result[no_of_rooms]'>Edit</a></td>
			   		   <td>Delete</td>
			   		</tr>";	   			   
			   }
			?>
		</tr>
	   </table>
    </div>
		
	</div>
</section>
<?php
    include_once 'footer.php'
?>