<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;

	$idproker = $_GET['idproker'];
	$sql = "SELECT * FROM tabelprogres WHERE idproker = '$idproker'";
	$sql2 = "SELECT * FROM tabelproker WHERE idproker = '$idproker'";

	$result = mysqli_query($conn,$sql);
	$result2 = mysqli_query($conn,$sql2);

	$row2 = $result2->fetch_assoc();
	$namaproker = $row2['namaproker'];

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
					<li class="active"><a href="index.php">Home</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav>
		<br><br>
	<h3 class="text-center">Daftar Progres Program Kerja <?php echo $namaproker; ?></h2>	
	</div>
	<br>

	<div class="container">


		<div class="table-responsive">
		    <table id="productSizes" class="table">
		        <thead>
		            <tr>
		                <th class="col-xs-3">Tanggal</th>
		                <th class="col-xs-7">Progres</th>
		            </tr>
		        </thead>

		        <?php
		        	while($row = $result->fetch_assoc()){
		        		echo '<tr>';
		        		echo '<td>'.$row['tanggalprogres'].'</td>';
		        		echo '<td>'.$row['namaprogres'].'</td>';
		        		echo '</tr>';
		        	}


				?>

		    </table>
		</div>

	
	 	

 	</div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Ingin menghapus progres kerja?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <a href="daftarprogres.html"><button type="button" class="btn btn-primary">Ya</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal HTML -->
    <div id="modalgenerator" class="modal fade">
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
                    <a href="daftarprogres.html"><button type="button" class="btn btn-primary">Unduh</button></a>
                </div>
            </div>
        </div>
    </div>



</body>
</html>