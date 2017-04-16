<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;


	$idproker = $_GET['idproker'];
	$idprogres = $_GET['idprogres'];
	$sql = "DELETE FROM tabelprogres WHERE idprogres = '$idprogres'";

	$result = mysqli_query($conn,$sql);
	header("Location: ../daftarprogres.php?idproker=$idproker");
	mysqli_free_result($result);
?>