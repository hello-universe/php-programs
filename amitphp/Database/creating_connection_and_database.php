<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
    die ("Connection error: ".$conn->connect_error);
}
else echo "Connected successfully";
$que = "create database University";
if($conn->query($que) === TRUE) {
    echo "Database created successfully";
}
else die("Error crating database: ".$conn->error);
$conn->close();
?>