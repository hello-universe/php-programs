<?php
$name = $_POST["name"];
$email = $_POST["email"];
$file = fopen("Anand.txt", "w");
$str = "Anand";
fwrite($file,$str);
fclose($file);
$file = fopen("Anand.txt","r");
while(!feof($file))
{
    echo fgets($file);
}
?>