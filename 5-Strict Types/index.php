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
    <title>Document</title>
</head>
<body>
    <?php
        //Call Class Inside a NameSpace
        $P = new Persons\Person('Unes' , 24);
        echo $P->getName();

        $H = new House('Casablanca' , 512);
        echo $H->getRoad(); 
    ?>
</body>
</html>