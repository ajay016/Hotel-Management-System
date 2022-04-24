<?php
   $page = 'packages';
   include 'adminheader.php';
   include 'dbh.inc.php';
   $sql = "SELECT * FROM packages";
   $records = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Packages</title>
	<style>
table, th, td {
	width: auto;
    border: 2px solid black;
    text-align: center;
    vertical-align: center;
    background-color: #f6e2d3;
      }
button {
    width: 80px;
    height: 30px;
    margin-right: 0px;
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
	    <table border="2" width="400">
		<tr>
			<th>Package ID</th>
			<th>Package Name</th>
			<th>Price</th>
			<th>No.of Rooms</th>
				<?php
			   while($row = mysqli_fetch_assoc($records)) {
			   	echo "<tr>";
			   	echo "<td>".$row['package_id']."</td>";
			   	echo "<td>".$row['package_name']."</td>";
			   	echo "<td>".$row['price']."</td>";
			   	echo "<td>".$row['no_of_rooms']."</td>";	
			   		   
			    echo "<tr>";
			   }
			?>
		</tr>
	   </table>
    </div>
		<?php
		    if (isset($_SESSION['u_id'])) {
		    	 echo "Logged in";
		    }
		?>
	</div>
</section>
<?php
    include_once 'footer.php'
?>