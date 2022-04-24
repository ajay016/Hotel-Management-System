<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);	
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);	
    
    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
    	header("Location: ../index.php?login=empty");
    		exit();
    } else {
    	$sql = "SELECT * FROM Administrator WHERE admin_uid='$uid' AND admin_pwd='$pwd'";
    	$result = mysqli_query($conn, $sql);
    	$resultCheck = mysqli_num_rows($result);
    	if ($resultCheck < 1) {
    		header("Location: ../index.php?login=error");
    		exit();
    	} elseif ($row = mysqli_fetch_assoc($result)){
    				$_SESSION['a_id'] = $row['admin_id'];
                    $_SESSION['a_first'] = $row['admin_first'];
                    $_SESSION['a_last'] = $row['admin_last'];
                    $_SESSION['a_email'] = $row['admin_email'];
                    $_SESSION['a_uid'] = $row['admin_uid'];
                    $_SESSION['a_pwd'] = $row['admin_pwd'];
    				header("Location: ../admin.php?login=success");
    				exit();   		
    	}
    }
} else {
	header("Location: ../index.php?login=error");
	exit();
}