<?php
    include_once 'adminheader.php'
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Admin Login</h2>
		<form class="adminlogin-form" action="includes/adminlogin.inc.php" method="POST">
			<input type="text" name="uid" placeholder="Username/E-mail">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Login</button>
		</form>
	</div>
</section>

<?php
    include_once 'footer.php'
?>