<?php
	$cookiename = "name";
	$cookievalue = "Amit";
	setcookie($cookiename, $cookievalue, time()+86400, "/");
	if(isset($_COOKIE[$cookiename])){
		echo "Cookie is set with name: ".$_COOKIE[$cookiename]."<br>";
	}
	else echo "Cookie not set<br>";
?>