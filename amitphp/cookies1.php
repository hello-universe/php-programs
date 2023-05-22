<?php
echo "Welcome to the world of cookies<br>";
$name = "user";
$value = "Amit";
setcookie($name, $value, time()+86400, "/");
if(isset($_COOKIE[$name])){
    echo "Cookie is set<br>";
}
else echo "Cookie is not set<br>";
echo "Value of cookie for name is ".$_COOKIE[$name];
?>