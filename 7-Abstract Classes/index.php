<?php
    include 'abstract/payments.abstract.php';
    include 'classes/buy.class.php';


    $buy = new Buy();
    echo $buy->GetPayment();
?>