<?php

class UserModel {
    
    private $id;
    private $username;
    private $password;
    private $fullname;
    private $role;
    private $email;
    private $dateofbirth;
    private $creationdate;
    
    function __construct() {
        
    }
    function getUsername() {
        return $this->username;
    }

    function getFullname() {
        return $this->fullname;
    }

    function getEmail() {
        return $this->email;
    }

    function getDateofbirth() {
        return $this->dateofbirth;
    }


    
}

