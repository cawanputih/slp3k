<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;

	$username = $_POST['username'];
	
	$sql = "SELECT iddivisi FROM tabeluser WHERE username='$username'";

	$result = mysqli_query($conn,$sql);
	$row = $result->fetch_assoc();
	$iddivisi = $row['iddivisi'];

	if ($username == 'ketuayayasan'){
		header("Location: ../kydaftardivisi.php");
	}else{
		header("Location: ../daftarproker.php?iddivisi=$iddivisi");
	}
?>