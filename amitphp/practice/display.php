<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "School";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$que = "select * from students";
	$result = $conn->query($que);
	$num = $result->num_rows;
	if($num>0){
		while($rows = $result->fetch_assoc()) {
			echo "Name: ".$rows['name']." Age: ".$rows['age']."<br>";
		}
	}
?>