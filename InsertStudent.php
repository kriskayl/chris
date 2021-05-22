<?php 
$server = 'localhost';
$user = 'root';
$pass= '';
$dbname='DBko';
$conn = new mysqli($server, $user,$pass,$dbname);

	if($conn->connect_error) {
		die("Connection Failed " . $conn->connect_error);
		}
$sql= "INSERT into Student (StudentNumber,LastName,FirstName,MiddleName,Course,Year,EmailAddress,ContactNumber)
VALUE('17-1390','Limbo','Chris Kyle', 'Bacha','BSIT',2,'chriskyle480@gmail.com','09323017993')";
if ($conn->query($sql)=== true) {
	echo" New Record created Successfully";
	} else {
		echo "Error Inserting Data" . $conn->error;
		}
		$conn->close();
		?>