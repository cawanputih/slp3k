<?php

	// Avoid mysql_connect() deprecation error.
	// error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'slp3kdb');

	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

	// Check connection
	if (mysqli_connect_errno()) {
		die("Connection failed : " . mysqli_connect_error());
	}

?>