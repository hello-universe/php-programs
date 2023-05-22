<html>

<head> <title>practical 14</title></head>

<body>

<h1>UPLOAD AN IMAGE:</h1>

<form action="" method="post" enctype="multipart/form-data"> <input type="file" name="img">

<br><br> <input type="submit">

</form></body></html>

<?php

$image=$_FILES['img']['name'];

$tmp=$_FILES['img']['tmp_name']; 
$pass = move_uploaded_file($tmp,$image); 
if($pass){

echo"successfully uploaded <br>";

echo "<img src=' $image'>"; } 
else{ echo"file is not uploaded"; }

?>