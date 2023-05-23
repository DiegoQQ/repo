<?php
	$conn = new mysqli("localhost", "admin", "1803", 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>