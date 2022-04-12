<?php

class RegisterController {

    public function __construct () {
        require_once 'model/EmailModel.php';
        $this->view = new View();
        $this->emailModel = new EmailModel();
    }

    public function renderMessagesView() {
        $this->view->render('messagesview.php', null);
    }
}