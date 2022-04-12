<?php

class FormValidation {

    private $data = [];
    private $errors = [];

    public function __construct($post_data) {
        $this->data = $post_data;
    }

    public function validateRegisterForm () {
        $this->validateEmail();
        $this->validateUsername();
        $this->validatePassword();
        return $this->errors;
    }

    private function validateEmail () {
        $email_to_validate = trim($this->data['email']);

        if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email_to_validate)) {
            $this->addErorrs('email', 'Field must be an email adress');
        }
    }

    private function validateUsername () {
        $username_to_valide = trim($this->data['username']);

        if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $username_to_valide)) {
            $this->addErorrs('username', 'Username must be 6-12 charachters, and cant contain special charachters!');
        }
    }

    private function validatePassword () {
        $password_to_validate = trim($this->data['password']);
        $password_confirmation = trim($this->data['confirmedpass']);

        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', $password_to_validate)) {
            $this->addErorrs('password', 'Password must be atleast 8 chars, and contain 1 upparcase char, and 1 number!');
        } else if($password_to_validate != $password_confirmation) {
            $this->addErorrs('confirmedpass', 'Passwords must match!');
        }
    }

    private function addErorrs ($key, $value) {
        $this->errors[$key] = $value;
    }
}