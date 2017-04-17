<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;

	$sql = "SELECT * FROM tabeldivisi";

	$result = mysqli_query($conn,$sql);

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<div class ="container-fluid">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">SLP3K</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="kydaftarproker.php">Home</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav>
		<br><br>
	<h3 class="text-center">Daftar Divisi</h2>	
	</div>
	<br><br>


	 <div class="container">

		<div class="table-responsive">
		    <table id="productSizes" class="table">
		       
		        <tbody>
					<?php
		        	while($row = $result->fetch_assoc()){
		        		echo '<tr>';
		        		echo '<td><a href=kydaftarproker.php?iddivisi='.$row['iddivisi'].'><button type="button" class="btn btn-primary btn-block" data-toggle="modal" >'.$row['namadivisi'].'</button></a></td>';
		        		echo '</tr>';
		        	}
					?>

		        </tbody>
		    </table>
		</div>

	 	
 	</div>


</body>
</html>