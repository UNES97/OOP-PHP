<?php

// Object Interfaces ¶
// Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented. Interfaces share a namespace with classes and traits, so they may not use the same name.

// Interfaces are defined in the same way as a class, but with the interface keyword replacing the class keyword and without any of the methods having their contents defined.

// All methods declared in an interface must be public; this is the nature of an interface.

// In practice, interfaces serve two complementary purposes:

//     To allow developers to create objects of different classes that may be used interchangeably because they implement the same interface or interfaces. A common example is multiple database access services, multiple payment gateways, or different caching strategies. Different implementations may be swapped out without requiring any changes to the code that uses them.
//     To allow a function or method to accept and operate on a parameter that conforms to an interface, while not caring what else the object may do or how it is implemented. These interfaces are often named like Iterable, Cacheable, Renderable, or so on to describe the significance of the behavior.

// Interfaces can be extended like classes using the extends operator. 

//Interfaces
interface Payements{
    public function payNow();
    public function PaymentProcess();
}

interface LoginPayement{
    public function Login();
    public function payNow();
    public function PaymentProcess();
}

class Paypal implements Payements , LoginPayement {
    public function payNow(){}
    public function Login(){}

    public function PaymentProcess(){
        $this->Login();
        $this->payNow();
    }
}

class Visa implements Payements {
    public function payNow(){}

    public function PaymentProcess(){
        $this->payNow();
    }
}

class Cash implements Payements {
    public function payNow(){}
     
    public function PaymentProcess(){
        $this->payNow();
    }
}

class BuyProduct {
    public function Cashpay(Payements $payement){
        $payement->PaymentProcess();
    }

    public function OnlinePay(LoginPayement $payement){
        $payement->PaymentProcess();
    }
}