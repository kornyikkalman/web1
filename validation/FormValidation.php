<?php

class FormValidation {

    private $data = [];
    private $errors = [];

    public function __construct ($form_data) {
        $this->data = $form_data;
    }

    public function validateRegisterForm () {
        $this->validateEmail();
        $this->validateUsername();
        $this->validatePassword();
        return $this->errors;
    }

    public function validateContactForm () {
        $this->validateMessage();
        return $this->errors;
    }

    private function validateEmail () {
        $email_to_validate = trim($this->data['email']);

        if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email_to_validate)) {
            $this->addErrors('email', 'Field entry must be an email adress');
        }
    }

    private function validateUsername () {
        $username_to_valide = trim($this->data['username']);

        if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $username_to_valide)) {
            $this->addErrors('username', 'Username can be maximum 12 charachters and cant contain special charachters!');
        }
    }

    private function validatePassword () {
        $password_to_validate = trim($this->data['password']);
        $password_confirmation = trim($this->data['confirmedpassword']);

        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', $password_to_validate)) {
            $this->addErrors('password', 'Password must contain 1 upparcase char, and 1 number!');
        } else if($password_to_validate != $password_confirmation) {
            $this->addErrors('confirmedpassword', 'Passwords must match!');
        }
    }

    private function validateMessage () {
        $msg_to_validate = trim($this->data['message']);
        if(! preg_match('/{1,255}/', $msg_to_validate)) {
            $this->addErrors('message', 'Message can be maximum 255 charachters long.');
        }

    }

    private function addErrors ($key, $value) {
        $this->errors[$key] = $value;
    }
}