<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$hobbies = $_POST['hobbies'];
		$country = $_POST['country'];
		$address = $_POST['address'];
		$sql = "UPDATE `users` SET fullname = '$fullname', email = '$email', gender = '$gender', hobbies = '$hobbies', country = '$country', address = '$address' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'User Updated Successfully';
		}
		
		else{
			$_SESSION['error'] = 'Error To Updating User';
		}
	}
	else{
		$_SESSION['error'] = 'Select User To Edit';
	}

	header('location: index.php');

?>