<?php
$str = "We do not forget we do not forgive! Expect us";
$len = strlen($str);
$str = strtolower($str);
$cnt_we = substr_count($str, "we");
echo "Number of times we came is ".$cnt_we;
echo "<br>";
echo "Length of string is ".$len;
echo "<br>";
$words = str_word_count($str);
echo "Number of words in string are ".$words;
echo "<br>";
$str = str_replace("we", "I", $str);
echo $str;
echo "<br>";
$str = strtoupper($str);
echo "In uppercase: ";
echo "<br>";
echo $str;
echo "<br>";
$str = strtolower($str);
echo "In lowercase: ";
echo "<br>";
echo $str;
?>