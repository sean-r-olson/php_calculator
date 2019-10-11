<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    echo $num1 + $num2;
    ?>
    <form action="site.php" method="get">
       <input type="number" name="num1">
       <br> 
       <input type="number" name="num2">
       <br>
       <input type="submit">
    </form> 
    
</body>
</html>