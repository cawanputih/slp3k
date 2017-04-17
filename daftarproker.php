<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;
	$iddivisi = $_GET['iddivisi'];
	$sql = "SELECT * FROM tabelproker WHERE iddivisi='$iddivisi'";

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
					<li><a href="daftarproker.php?iddivisi=1">Home</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav>
		<br><br>
	<h3 class="text-center">Daftar Program Kerja</h2>	
	</div>
	<br><br>

	 <div class="container">

		<div class="table-responsive">
		    <table id="productSizes" class="table">
		       
		        <tbody>
					<?php
		        	while($row = $result->fetch_assoc()){
		        		echo '<tr>';
		        		echo '<td><a href=daftarprogres.php?idproker='.$row['idproker'].'><button type="button" class="btn btn-primary btn-block" data-toggle="modal" >'.$row['namaproker'].'</button></a></td>';
		        		echo '</tr>';
		        	}
					?>

		        </tbody>
		    </table>
		</div>


		<div class="col-xs-3">
			<a href="tambahproker.php"><button type="button" class="btn btn-warning btn-block " data-toggle="modal">Tambah Proker</button></a>	
		</div>


		<div class="col-xs-3 pull-right">
			<a href="generatelaporan.php"><button type="button" class="btn btn-success btn-block" style="float:right" data-toggle="modal" data-target="#modalgenerator">Generate Laporan</button></a>	
		</div>
	 	
		<!-- Modal HTML -->
	    <!-- <div id="modalgenerator" class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title">Information</h4>
	                </div>
	                <div class="modal-body">
	                    <p>Berhasil melakukan generate pada laporan</p>
	                </div>
	                <div class="modal-footer">
	                    <a href="daftarproker.html"><button type="button" class="btn btn-primary">Unduh</button></a>
	                </div>
	            </div>
	        </div>
	    </div> -->

 	</div>


</body>
</html>