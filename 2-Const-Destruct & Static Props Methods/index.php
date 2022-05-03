<?php
    include 'includes/person.inc.php'
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
        //Init a Class
        //Fill a Variable Using Constructor
        $P = new Person('Unes' , 24);

        //Fill a Variable with a Method
        echo $P->setName('James');

        echo $P->getName();

        //Call Static Method
        Person::SetDrinkAge(16);

        //Call Static Properties
        echo Person::$DrinkAge;
    ?>
</body>
</html>