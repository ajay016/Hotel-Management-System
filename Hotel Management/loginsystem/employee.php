<?php
    include_once 'header.php'
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Create Employee Account</h2>
		<form class="signup-form" action="includes/employee.inc.php" method="POST">
			<input type="text" name="employeeid" placeholder="Employee_id">
			<input type="text" name="first" placeholder="First Name">
			<input type="text" name="last" placeholder="Last Name">
			<input type="text" name="phone" placeholder="Phone">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="serviceid" placeholder="Service">
			<button type="submit" name="submit">Create</button>
		</form>
	</div>
</section>

<?php
    include_once 'footer.php'
?>