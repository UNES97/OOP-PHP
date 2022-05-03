<?php
//Procedural PHP vs OOP PHP (More Organized , No Code Repitation , Good for Team Work)


//Private -> Access Preperties Only From the Same Class
//Protected -> Access Preperties Only From the Same Class Or Extended
//Public -> Access Preperties From Anywhere
//Static -> Props Or Methods Can be Accessed without  Create Object

//A Class is an Object of Preperties & Methods
class Person
{
    //Preperties & Methods Goes Here
    protected $FirstName = 'Unes'; 
    private $LastName = 'Noufair'; 
    private $Age = '25'; 
}


class Pet extends Person
{
    public function Owner(){
        $A = $this->FirstName;
        return $A;
    }
}


?>