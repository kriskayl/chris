<?php 
$server = 'localhost';
$user = 'root';
$pass= '';

$conn = new mysqli($server, $user,$pass);

	if($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
		}
		echo " Connected Successfully" ;
?>