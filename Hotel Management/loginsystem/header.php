<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li class="<?php if($page=='home'){echo 'active';}?>"><a href="index.php">Home</a></li>
				<li class="<?php if($page=='packages'){echo 'active';}?>"><a href="packages.php">Packages</a></li>
				<li class="<?php if($page=='admin'){echo 'active';}?>"><a href="adminlogin.php">Admin</a></li>
			</ul>
			<div class="nav-login">
				<?php
                    if (isset($_SESSION['u_id'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="submit">Logout</button>
				    </form>';
                    } else {
                    echo '<form action="includes/login.inc.php" method="POST">
					<input type="text" name="uid" placeholder="Username/e-mail">
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="submit">Login</button>
				    </form>
				    <a href="signup.php">Sign up</a>';                    
                    }
				?>
			</div>
		</div>
	</nav>
</header>	