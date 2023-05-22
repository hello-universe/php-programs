<?php
	$str = "Hello World";
	$len = strlen($str);
	echo "Length of string: ".$len."<br>";
	$str = strtolower($str);
	echo "String in lowercase: ".$str."<br>";
	$str = strtoupper($str);
	echo "String in uppercase: ".$str."<br>";
	$rev = strrev($str);
	echo "Reverse: ".$rev."<br>";
	$word = str_word_count($str);
	echo "Word count: ".$word."<br>";
	$sub = substr_count($str, "O");
	echo "Number of times o: ".$sub."<br>";
	$str = str_replace("O", "A", $str);
	echo "New str: ".$str."<br>";
	$pos = strpos($str, "W");
	echo "Position of W: ".$pos."<br>";
?>