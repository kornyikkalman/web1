<?php

require '/validator/FomrValidation.php';
require '/utility/Mailer.php';

class RegisterController {

    public function __construct () {
        require_once 'model/EmailModel.php';
        $this->view = new View();
        $this->emailModel = new EmailModel();
    }

    public function renderContactView () {
        $this->view->render('contactview.php', null);
    }

    public function redirectIfFailed () {
        $this->view->render('contactview.php');
    }

    public function redirectOnSuccess () {
        $this->view->render('messagesview.php');
    }

    public function attemptToSendMail () {
        if(!empty($_POST)) {

            $validator = new FormValidation($_POST);
            $email_errors = $validator->validateContactForm();
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if(! empty($email_errors)) {
                foreach($email_errors as $key => $value) {
                    $this->view->set_errors($key, $value);
                }
                $this->redirectIfFailed();
            } else {
                $this->emailModel->saveEmail($username, $email, $message);
                $contact_message = new Mailer('zebikriszti@gmail.com', 'New message from your site.', $message);
                $contact_message->send();
                $this->redirectOnSuccess();
            }
        }
    }
}
