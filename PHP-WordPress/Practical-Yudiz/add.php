<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$hobbies = $_POST['hobbies'];
		$country = $_POST['country'];
		$address = $_POST['address'];
		$sql = "INSERT INTO `users` (fullname, email, gender, hobbies, country, address) VALUES ('$fullname', '$email', '$gender', '$hobbies', '$country', '$address')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'User Added Successfully';
		}
		

		else{
			$_SESSION['error'] = 'Error To Insert User';
		}
	}
	
	else{
		$_SESSION['error'] = 'Fill The Add User Form First';
	}

	header('location: index.php');
?>
