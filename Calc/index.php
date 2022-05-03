<?php
    //--------------- Strict Types for Props Strict Type (Int , Float) --------------\\
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">

        <input type="number" name="num1" placeholder="1st Number">

        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>

        <input type="number" name="num2" placeholder="2nd Number">

        <input type="submit" name="calculate" value="Calculate">

    </form>
</body>
</html>