<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "School";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error) {
		echo "Error connecting database<br>";
	}
	else echo "successfully connected to database<br>";
	$que = "create table students(name varchar(50), age int)";
	if($conn->query($que) === TRUE) {
		echo "Table created successfully<br>";
	}
	else echo "Error creating table".$conn->error;
?>