<?php 
$server = 'localhost';
$user = 'root';
$pass= '';
$dbname='DBko';
$conn = new mysqli($server, $user,$pass,$dbname);

	if($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
		}
		
		$sql = "CREATE TABLE Student (
		StudentNumber varchar(10) primary key,
		LastName varchar(50) not null,
		FirstName varchar(50) not null,
		MiddleName varchar(50) not null,
		Course varchar(50) not null,
		Year int(1) not null,
		EmailAddress varchar(50) not null,
		ContactNumber int(13) not null)";
		
		if ($conn->query($sql)=== true) {
			echo"Table created successfully";
		} else {
			echo"Error creating Table";
			}
			
$conn->close();
		
		
		
?>