<?php


class Buy extends Visa {

    public function GetPayment(){
        return $this->visaPayment();
    }
    
}