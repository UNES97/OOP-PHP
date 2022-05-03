<?php

namespace Persons;

class Person
{
    //Props
    private $name;
    private $age;

    //Constructor
    public function __construct(string $name , int $age){
        $this->name = $name;
        $this->age = $age;
    }

    //Method
    public function setName(string $name){
        $this->name = $name;
    }


    public function getName(){
        return $this->name;
    }

}


?>