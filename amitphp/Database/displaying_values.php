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
$que = "select * from Students";
$result = $conn->query($que); 
$r = $result->num_rows; //This query stores the number of records in $r
echo "Number of records: ".$r."<br>";
if($r>0){
    while($row = $result->fetch_assoc()){ //$row will return null if there are no enteries
        //echo var_dump($row)."<br>";
        echo $row['r_no']." ".$row['name']." ".$row['branch']."<br>";
    }
}
?>