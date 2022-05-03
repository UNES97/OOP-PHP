<?php

class NewClass
{
    //Preperties & Methods Goes Here
    public $data = 'Property'; 

    public function __construct(){
        echo 'Class Start <br>';
    }

    public function SetNewProperty($data){
        $this->data = $data;
    }

    public function GetProperty(){
        return $this->data;
    }

    public function __destruct(){
        echo '<br>  Class End';
    }
}


?>