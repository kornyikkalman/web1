<?php

class LoginController {

    public function __construct () {
        require_once 'model/UserModel.php';
        $this->view = new View();
        $this->userModel = new UserModel();
    }

    public function renderLoginView () {
        $this->view->render('loginview.php', null);
    }
}