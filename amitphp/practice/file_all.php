<?php
	$name = $_POST['name'];
	$file = "$name.txt";
	if(file_exists($file)) {
		echo "File already exist<br>";
	}
	else { 
	echo "File do not exist<br>";
	$file = fopen("$name.txt", "w") or die("Unable to open file");
	fwrite($file, $name);
	fclose($file);
	$file = fopen("$name.txt", "r") or die("Unable to open file");
	while(!feof($file)) {
		echo fgets($file)."<br>";
	}
}
?>