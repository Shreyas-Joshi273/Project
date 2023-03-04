<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM `users` WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'User Deleted Successfully';
		}
		
		else{
			$_SESSION['error'] = 'Error No Delete User';
		}
	}
	else{
		$_SESSION['error'] = 'Select User To Delete First';
	}

	header('location: index.php');
?>