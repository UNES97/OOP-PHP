<?php

class User extends Db{

    protected function getUsers() {
        $Sql    = "SELECT * FROM users";
        $Stmnt  = $this->Connect()->query($Sql);
        return $Stmnt->fetchAll();
    }

    protected function getUser($id) {
        $Sql    = "SELECT * FROM users WHERE id = ?";
        $Stmnt  = $this->Connect()->prepare($Sql);
        $Stmnt->execute([$id]);
        return $Stmnt->fetch();
    }

    protected function InsertUser($firstname , $lastname , $birthdate){
        $Sql    = "INSERT INTO users (firstname , lastname , birthdate) VALUES (? , ? , ?)";
        $Stmnt  = $this->Connect()->prepare($Sql);
        $Stmnt->execute([$firstname , $lastname , $birthdate]);
    }

}