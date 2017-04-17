<?php
	
	require_once('dbconnect.php');
	
	global $conn;
	
	$username = $_GET['username'];
	$password = $_GET['password'];
	
	$sql = "SELECT iduser FROM tabeluser WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

	if ($count != 0) {
		// username (email) and password are match
		echo "match";
	} else {
		// username (email) and password are not match
		echo "not_match";
	}
	
	// free result set
	mysqli_free_result($result);
	// Close the connection
	mysqli_close($conn);
	
?>