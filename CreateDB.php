<?php 
$server = 'localhost';
$user = 'root';
$pass= '';

$conn = new mysqli($server, $user,$pass);

	if($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
		}
	
	$sql = "CREATE DATABASE DBko";
	
		if($conn->query($sql) === true){
			echo" Database Created Successfully";
			} else {
			echo" Error Creating Database" . $conn->error;
			}
	$conn->close();
	?>