<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;

	$tanggal = $_POST['tglprogres'];
	$nama = $_POST['nmprogres'];
	$idproker = $_GET['idproker'];
	$idprogres = $_GET['idprogres'];

	$sql = "UPDATE tabelprogres SET tanggalprogres= '$tanggal' , namaprogres= '$nama' WHERE idprogres = '$idprogres' ";

	$result = mysqli_query($conn,$sql);

	header("Location: ../daftarprogres.php?idproker=$idproker");
	mysqli_free_result($result);
?>