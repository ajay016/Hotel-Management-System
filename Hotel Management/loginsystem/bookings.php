<?php
    include_once 'adminheader.php'
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>New Booking</h2>
		<form class="signup-form" action="includes/bookings.inc.php" method="POST">
			<input type="text" name="reserveid" placeholder="Reservation_ID">
			<input type="text" name="userid" placeholder="User_ID">
			<input type="text" name="roomtype" placeholder="Room_Type">
			<input type="text" name="roomid" placeholder="Room_ID">
			<input type="text" name="checkin" placeholder="Check_in_Date">
			<input type="text" name="checkout" placeholder="Check_out_Date">
			<input type="text" name="staytime" placeholder="Stay_time">
			<input type="text" name="price" placeholder="Price">
			<input type="text" name="packid" placeholder="Package_ID">
			<button type="submit" name="submit">Book</button>
		</form>
	</div>
</section>

<?php
    include_once 'footer.php'
?>