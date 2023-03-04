<?php
	//Connection Database
	$conn = new mysqli('localhost', 'root', '', 'database_user');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	
	
?>