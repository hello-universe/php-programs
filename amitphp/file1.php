<?php
$myfile = fopen("hello.txt", "r") or die("Unable to open");
//echo fread($myfile, filesize("hello.txt"));
while(!feof($myfile)){
    echo fgets($myfile)."<br>";
}
fclose($myfile);
$myfile = fopen("hello.txt", "w") or die("unable to open");
$name = "Amit";
fwrite($myfile, $name);
fclose($myfile);
?>