<?php
    $num = $_GET["fact"];
    $n = $_GET["name"];
    echo "Your name is $n";
    $facto = 1;
    for($i=2; $i<=$num; $i++){
        $facto = $facto*$i;

    }
    echo "Factorial of $num is $facto";
?>