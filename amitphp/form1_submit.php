<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Your name is <?php echo $_POST["name"]; ?><br>
    Email is <?php echo $_POST["email"]; ?><br>
    <?php
    $facto = 1;
    for($i=2; $i<=$_POST["fact"]; $i++){
        $facto*=$i;
    }
    echo "Factorial of ".$_POST["fact"]." is ".$facto."<br>";
    ?>
</body>
</html>