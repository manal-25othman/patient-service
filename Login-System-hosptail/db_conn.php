<?php
	$servername = "165.227.232.223";
	$username = "admin";
	$password = "admin123";
	$db="imaundatabase";

	// Create connection
		$conn = new mysqli($servername, $username, $password,$db);


	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	?>
