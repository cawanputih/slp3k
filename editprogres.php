<?php 

	// connect to the database server
	require_once('dbconnect.php');
	global $conn;


	$idproker = $_GET['idproker'];
	$idprogres = $_GET['idprogres'];
	$sql = "SELECT * FROM tabelprogres WHERE idprogres = '$idprogres'";

	$result = mysqli_query($conn,$sql);

	$row = $result->fetch_assoc();
	$idprogres = $row['idprogres'];
	$tanggalprogres = $row['tanggalprogres'];
	$namaprogres = $row['namaprogres'];

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
	<h3 class="text-center">Edit Progres</h2>	
	</div>


	 <br>
	 <div class="container">
            <form action="server/editprogresserver.php?idproker=<?php echo $idproker; ?>&idprogres=<?php echo $idprogres; ?>" class="form-horizontal" role="form" method="post">
                <div class="form-group">
                    <label for="startdate" class="col-sm-3 control-label">Tanggal Progres</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" value = "<?php echo $tanggalprogres; ?>" name = "tglprogres">
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-sm-3 control-label ">Progres</label>
                    <div class="col-sm-9">
                        <input type="text" id="desc" placeholder="" class="form-control" value = "<?php echo $namaprogres; ?>" name ="nmprogres" autofocus >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                    	<input type="Submit" class="btn btn-primary btn-block" value="Simpan">
                    </div>
                </div>
            </form> <!-- /form -->
    </div> <!-- ./container -->

     <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Information</h4>
                </div>
                <div class="modal-body">
                    <p>Berhasil menyimpan progres</p>
                </div>
                <div class="modal-footer">
                    <a href="daftarprogres.html"><button type="button" class="btn btn-primary">OK</button></a>
                </div>
            </div>
        </div>
	</div>

</body>
</html>