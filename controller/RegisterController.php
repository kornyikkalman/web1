<?php

class RegisterController {

    public function __construct () {
        require_once 'model/UserModel.php';
        $this->view = new View();
        $this->userModel = new UserModel();
    }

    public function renderRegisterView () {
        $this->view->render('registerview.php');
    }

    public function redirectAfterSuccess () {
        $this->view->render('indexview.php');
    }

    public function redirectIfFailed () {
        $this->view->render('registerview.php');
    }

    public function attemptRegister () {
        if(!empty($_POST)) {
            require_once 'validation/FormValidation.php';
            $validator = new FormValidation($_POST);
            $errors = $validator->validateRegisterForm();
            if(!empty($errors)) {
                foreach($errors as $key => $value) {
                    $this->view->set_errors($key, $value);
                }
                $this->redirectIfFailed();
            }
        }
    }
}