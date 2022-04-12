<?php

class UserModel {

    protected $database;
    protected $errors; 
       
    public function __construct () {
        require_once 'core/SPDO.php';
        $this->database = SPDO::singleton();
    }

    public function checkDuplicate ($username, $email) {
        
    
    }

    public function registerUser ($username, $email, $password) {
            $insert_for_register = $this->database->prepare('INSERT INTO user(username, email, password) VALUES(:username, :email, :password)');
            $insert_for_register->bindValue(":username", $username);
            $insert_for_register->bindValue(":email", $email);
            $insert_for_register->bindValue(":password", md5($password));
            $insert_for_register->execute();
    }

}