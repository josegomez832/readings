<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbname = 'readings_db';

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn -> connect_error){
		die('Connection failed: ' .$conn->connect_error);
	}
	echo 'connected';
	//$first = $_POST['FirstName'];
	//$last = $_POST['LastName'];
	//$email = $_POST['Email'];


	//$sql = "INSERT INTO the_word (FirstName, LastName, Email) 
			VALUES ('$first', '$last', '$email')";

?>