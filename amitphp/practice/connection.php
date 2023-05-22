<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password);
	if($conn->connect_error) {
		echo "Connection failed: ".$conn->connect_error;
	}
	else echo "Connection successful<br>";
	$que = "create database School";
	if($conn->query($que) === TRUE) {
		echo "Database Created Successfully<br>";
	}
	else echo "Error creating database<br>".$conn->error;
?>