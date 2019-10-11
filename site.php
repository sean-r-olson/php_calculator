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
    <h2>Step 1: Choose 2 numbers</h2>
    <form action="site.php" method="get">
        <input placeholder="Number 1" type="number" name="num1">
        <input placeholder="Number 2" type="number" name="num2"> 

    <h2>Step 2: Choose operator to calculate!</h2>

        <input name="add" type="submit" value="add"/>
        <input name="subtract" type="submit" value="subtract"/>
        <input name="multiply" type="submit" value="multiply"/>
        <input name="divide" type="submit" value="divide"/>
    </form>
    <?php
    $num1 = $_GET["num1"] ?? 0;
    $num2 = $_GET["num2"] ?? 0;
    $add = $_GET["add"] ?? '';
    $subtract = $_GET['subtract'] ?? '';
    $multiply = $_GET['multiply'] ?? '';
    $divide = $_GET['divide'] ?? '';
    if ($num1 && $num2){
        if ($add == 'add'){
            $answer = $num1 + $num2;
            echo "<h2>$num1 + $num2</h2> Answer: <h2 class='answer'>$answer</h2>";
        } else if ($subtract == 'subtract'){
            $answer = $num1 - $num2;
            echo "<h2>$num1 - $num2</h2> Answer: <h2 class='answer'>$answer</h2>";
        } else if ($multiply == 'multiply'){
            $answer = $num1 * $num2;
            echo "<h2>$num1 * $num2</h2> Answer: <h2 class='answer'>$answer</h2>";
        } else if ($divide == 'divide'){
            $answer = $num1 / $num2;
            echo "<h2>$num1 / $num2</h2> Answer: <h2 class='answer'>$answer</h2>";
        } else {
            echo "Please choose an operator!";
        }
    }
    ?>
</body>
</html>