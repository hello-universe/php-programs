<?php
$name = "Amit is a good boy";
echo $name;
echo "<br>";
echo strlen($name); //To print the length of string
// . operator is used to concatenate two strings
echo "<br>";
echo str_word_count($name); //To count words in the string
echo "<br>";
echo strrev($name); //To reverse the string
echo "<br>";
echo strpos($name, "good"); //To give position of a particular substring
echo "<br>";
echo str_replace("Amit", "Anand", $name); //To replace a substring with something else
echo str_repeat($name, 5); //Repeat the string a number of times mentioned
echo "<br>";
echo strtolower($name);
echo "<br>";
echo strtoupper($name);
echo "<br>";
echo var_dump(strpos($name, "cout")); //strpos returns false if does'nt find a string
?>