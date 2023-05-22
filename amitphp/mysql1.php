<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    //Using mysqli procedural
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
        die("Connection not successful "."<br>");
    }
    else{
        echo("Connected successfully");
    }
    
?>