<?php

    include 'classes/simple.class.php';

    //Regular Class 

    $Obj = new Simple();
    $Obj->helloMessage();

    //Anonymous Class

    $NewObj = new class() {
        public function helloMessage() {
            echo "Hello World!";
        }
    };
    $NewObj->helloMessage();

    
?>