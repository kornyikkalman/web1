<?php

class RegisterController {

    public function __construct () {
        require_once 'model/UserModel.php';
        $this->view = new View();
        $this->userModel = new UserModel();
    }

    public function showRegisterView() {
        $this->view->show('view/registerView.php', null);
    }
}
