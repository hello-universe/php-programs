<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "School";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$que = "insert into students values('$name', '$age')";
	if($conn->query($que) === TRUE) {
		echo "Values inserted successfully<br>";
	}
	else echo "Values not inserted<br>";
?>