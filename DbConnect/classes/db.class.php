<?php


class Db{
    private $Host   = 'localhost:8889';
    private $User   = 'root';
    private $Pwd    = 'root';
    private $DB     = 'oop_db';

    protected function Connect(){
        $Dsn = 'mysql:host='. $this->Host .';dbname='.$this->DB;
        $Pdo = new PDO($Dsn , $this->User, $this->Pwd);
        $Pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
        $Pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $Pdo;
    }


}