<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "kafekolong";

	$connection = mysqli_connect($servername, $username, $password,$databasename);

	if (!$connection) {
		echo "Error : ". mysql_connect_error();
		exit();
	}
	

?>