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
$que = "create table Students(r_no int, name varchar(60), branch varchar(40))";
if($conn->query($que) === TRUE){
    echo "Table created successfully<br>";
}
else die("Table not created: ".$conn->error);
?>