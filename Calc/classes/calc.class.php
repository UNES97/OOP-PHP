<?php


class Calc {

    public $num1;
    public $num2;
    public $oper;

    public function __construct(string $oper , int $num1 , int $num2){
        $this->oper = $oper;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculate(){
        switch ($this->oper) {
            case 'add':
                $result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                break;
            default:
                $result = 'Operation Not Fond';
                break;
        }

        return $result;
    }

}


