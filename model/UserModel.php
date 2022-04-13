<?php

class UserModel {

    protected $database;
    protected $errors = []; 
       
    public function __construct () {
        require_once 'core/SPDO.php';
        $this->database = SPDO::singleton();
        $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }



    public function possibleDuplicate ($username, $email) {
        $username_to_check = $this->database->prepare('SELECT username FROM user WHERE username = :username');
        $username_to_check->bindValue(":username", $username);
        $username_to_check->execute();
        
        if($username_to_check->rowCount() > 0) {
            $this->addErrors('username_exists','Username already exists!');
        }
        $username_to_check->closeCursor();
        
        $email_to_check = $this->database->prepare('SELECT email from user WHERE email = :email');
        $email_to_check->bindValue(":email", $email);
        $email_to_check->execute();
        if($email_to_check->rowCount() > 0) {
            $this->addErrors('email_exists', 'Email already taken!');
        }
        $email_to_check->closeCursor();
        return $this->errors;
    }


    public function registerUser ($username, $email, $password) {
            $insert_for_register = $this->database->prepare('INSERT INTO user(username, email, password) VALUES(:username, :email, :password)');
            $insert_for_register->bindValue(":username", $username);
            $insert_for_register->bindValue(":email", $email);
            $insert_for_register->bindValue(":password", md5($password));
            $insert_for_register->execute();
    }

    public function addErrors ($key, $value) {
        $this->errors[$key] = $value;
    }

}