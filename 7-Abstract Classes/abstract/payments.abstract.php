<?php

// PHP has abstract classes and methods. Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method must also be abstract. Methods defined as abstract simply declare the method's signature; they cannot define the implementation. 

abstract class Visa {

    public function visaPayment(){
        return 'Preform a Payment via Visa !';
    }

    //----------------- Set Rule as Interface -----------------\\
    abstract public function GetPayment();
    
}