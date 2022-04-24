<?php
    $page = 'admin';
    include 'adminheader.php';
    include 'dbh.inc.php';
    ?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Admin Dashboard</h2>
		<div class="admin-site">
			<form action="reservation.php" method="POST">
			<button type="submit" name="submit">Update Reservation</button>
			</form>
			<form action="bookings.php" method="POST">
			<button type="submit" name="submit">Bookings</button>
			</form>
			<form action="adminpayment.php" method="POST">
				<button type="submit" name="submit">Customer Payment</button>
			</form>
			<form action="room.php" method="POST">
				<button type="submit" name="submit">Hotel Room</button>
			</form>
			<form action="employee.php" method="POST">
				<button type="submit" name="submit">Employee</button>
			</form>
			<form action="adminpackage.php" method="POST">
				<button type="submit" name="submit">Update Package</button>
			</form>
			<form action="createuser.php" method="POST">
				<button type="submit" name="submit">Create new user</button>
			</form>
			<form action="usertable.php" method="POST">
				<button type="submit" name="submit">Remove User</button>
			</form>

		</div>
		<?php
		    if (isset($_SESSION['a_id'])) {
		    	echo "Select to update";
		    } 
		?>
	</div>
</section>

<?php
    include_once 'footer.php'
?>