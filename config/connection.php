<?php 
	//variabel connection host
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "dbreporting";

	@$conn = new mysqli($host, $username, $password, $database);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully";
 
?>