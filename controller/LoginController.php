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

    public function redirectOnSucess () {
        $this->view->render('indexview.php');
    }

    public function redirectIfFailed () {
        $this->view->render('loginview.php');
    }

    public function attemptLogin () {
        if(! empty($_POST)) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $check_for_errors = $this->userModel->checkIfUserExists($email, $password);
            
            if(!empty($check_for_errors)) {
                foreach($check_for_errors as $key => $value) {
                    $this->view->set_errors($key, $value);
                }
                $this->redirectIfFailed();
            } else {
                session_start();
                $userdata = $this->userModel->getUser($email, $password);
                $_SESSION['username'] = $userdata['username'];
                /**
                 * @var 'logged_it_to_peace_web' - ezzel a kulcsal különbséget tudunk tenni a
                 * mobil és web app közti sessionökkel, ha egy motort használnának.
                 */
                $_SESSION['logged_in_to_peace_web'] = true;
                $this->redirectOnSucess();
            }
        }
    }
}