<?php

//Constructors and Destructors 
//Constructors -> __construct Runs at the Beginin of the Class
//Destructors ->  __desstruct Runs at the End of the Class

class Person
{
    //Props
    private $name;
    private $age;

    //Static Props Or Methods Can be Accessed without  Create Object (Add them to Class to Categories Them)
    //They Can be accessed from Both Public and Private Methods 
    //Static Prop
    public static $DrinkAge = 18;

    //Constructors
    public function __construct($name , $age){
        $this->name = $name;
        $this->age = $age;
    }

    //Methods
    public function setName($name){
        $this->name = $name;
    }


    public function getName(){
        return $this->name;
    }

    //Static Method
    public static function SetDrinkAge($newDa){
        // self for Same Class Properties
        // parent for Parent Class Properties
        // const Unchangable Proprties
        self::$DrinkAge = $newDa;
    }

    //Destructors
    public function __desstruct(){

    }

}


?>