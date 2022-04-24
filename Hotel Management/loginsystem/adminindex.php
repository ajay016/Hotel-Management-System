<?php
    $page = 'home';
    include 'adminheader.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php
		    if (isset($_SESSION['a_id'])) {
		    	echo " ";
		    }
		?>
	</div>
</section>

<?php
    include_once 'footer.php'
?>