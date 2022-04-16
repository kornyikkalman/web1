<?php

class EmailModel {

    protected $database;

    public function __construct () {
        require_once 'core/SPDO.php';
        $this->database = SPDO::singleton();
    }
    

    public function saveEmail ($username, $email, $message) {
        $username = '' ? 'guest' : $username;
        $email = '' ? 'none' : $email;
        $created_at = date('Y-m-d H:i:s');
        
        $email_for_insert = $this->database->prepare('INSERT INTO email(username, email, message, created_at) VALUES(:username, :email, :message, :created_at)';
        $email_for_insert->bindValue(':username', $username);
        $email_for_insert->bindValue(':email', $email);
        $email_for_insert->bindValue(':message', $message);
        $email_for_insert->bindValue(':created_at', $created_at);
        $email_for_insert->execute();

    }

    

}