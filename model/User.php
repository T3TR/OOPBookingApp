<?php

class User {

    private $id;
    private $username;
    private $email;
    private $password;
    private $fullname;


    public function __construct(
        $username,  
        $email,
        $password, 
        $fullname) {

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->id = "abc";
    }

    public function login(){

    }

    public function logout(){
        
    }

    public function register(){
        
    }

}
