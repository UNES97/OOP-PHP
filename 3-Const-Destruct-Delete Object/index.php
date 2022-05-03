<?php
    include 'includes/newcalss.inc.php';
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
        $Obj = new NewClass();
        echo $Obj->GetProperty();
        //Trigger Destruct to Unset Class
        unset($Obj);
    ?>
</body>
</html>