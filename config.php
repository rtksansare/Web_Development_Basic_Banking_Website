<?php

	$server = "sql100.epizy.com";
	$username = "epiz_29191685";
	$password = "Trbcn3SevxNRJIP";
	
	$dbname = "epiz_29191685_banking";

	$conn = mysqli_connect($server, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>