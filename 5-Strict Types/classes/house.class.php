<?php

class House
{
    //Props
    private $road;
    private $number;

    //Constructor
    public function __construct($road , $number){
        $this->road = $road;
        $this->number = $number;
    }

    //Method
    public function setRoad($road){
        $this->road = $road;
    }


    public function getRoad(){
        return $this->road;
    }

}


?>