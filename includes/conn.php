<?php
	$conn = new mysqli('localhost:8080', '127.0.0.1', '', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>