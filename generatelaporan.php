<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
	
	require_once('dbconnect.php');
	global $conn;


?>

<html>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>


<div class="container">
<h2>Laporan Progres Program Kerja Divisi Humas</h2>
<br><br>
<?php

	$sql = "SELECT * FROM tabelproker";

	$result = mysqli_query($conn,$sql);

    	while($row = $result->fetch_assoc()){
    		$idproker = $row['idproker'];
    		$namaproker = $row['namaproker'];
    		echo '<h4>';
    		echo $namaproker;
    		echo '</h4><br>';

    		$sql2 = "SELECT * FROM tabelprogres WHERE idproker='$idproker'";
    		$result2 = mysqli_query($conn,$sql2);

    			echo '
    			<div class="table-responsive">
		   		 <table id="productSizes" class="table">
			        <thead>
			            <tr>
			                <th class="col-xs-3" style ="text-align: left">Tanggal</th>
			                <th class="col-xs-7" style ="text-align: left">Progres</th>
			            </tr>
			        </thead>';

    			while($row2 = $result2->fetch_assoc()){
		    		echo '<tr>';
		    		echo '<td>'.$row2['tanggalprogres'].'</td>';
		    		echo '<td>'.$row2['namaprogres'].'</td>';
		    		echo '</tr>';
		    	}

		    	echo '</table>
				</div>';
    	}

?>
</div>
</body>
</html>