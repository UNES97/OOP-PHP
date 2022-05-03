<?php

namespace Persons;

class Person
{
    //Props
    private $name;
    private $age;

    //Constructor
    public function __construct($name , $age){
        $this->name = $name;
        $this->age = $age;
    }

    //Method
    public function setName($name){
        $this->name = $name;
    }


    public function getName(){
        return $this->name;
    }

}


?>