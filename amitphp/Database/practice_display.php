<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "University";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Error connecting database: ".$conn->connect_error);
}
else echo("Connected to database successfully<br>");
$que = "select * from Students";
$result = $conn->query($que);
$num = $result->num_rows;
echo "Number of rows: ".$num."<br>";
if($num>0){
    while($row = $result->fetch_assoc()){
    echo $row['r_no']."  ".$row['name']."  ".$row['branch']."<br>"; 
    }
}
?>