<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "University";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die ("Error connecting to database: ".$conn->connect_error);
}
else echo("Connected to database successfully<br>");
$que = "insert into Students values(30, 'Amit', 'CSE'), (35, 'Ankit', 'Civil'), (31, 'Anand'
, 'Mechanical')";
if($conn->query($que) === TRUE){
    echo "Values inserted successfully<br>";
}
else die("Error inserting values: ".$conn->error);
?>