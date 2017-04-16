<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;

	$namaproker = $_POST['namaproker'];
	$tanggalmulai = $_POST['tglmulai'];
	$tanggalselesai = $_POST['tglselesai'];
	$deskripsi = $_POST['deskripsi'];

	
	$sql = "INSERT INTO  tabelproker(namaproker,tanggalmulai,tanggalselesai,deskripsi) VALUES ('$namaproker','$tanggalmulai','$tanggalselesai','$deskripsi')";

	$result = mysqli_query($conn,$sql);

	header("Location: ../index.php");
	mysqli_free_result($result);
?>