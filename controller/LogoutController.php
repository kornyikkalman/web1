<?php

class LogoutController {

    public function __construct () {
        require_once 'model/UserModel.php';
        $this->view = new View();
        $this->userModel = new UserModel();
    }

    public function redirectOnSucess () {
        $this->view->render('indexview.php');
    }

    public function logOut () {
        $_SESSION['loggedIn'] = false;
        $this->redirectOnSucess();
    }
}