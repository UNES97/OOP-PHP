<?php


class UserController extends User {

    public function ShowUsers(){
        return $this->getUsers();
    }

}