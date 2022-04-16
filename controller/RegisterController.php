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

    public function redirectOnSuccess () {
        $this->view->render('indexview.php');
    }

    public function redirectIfFailed () {
        $this->view->render('registerview.php');
    }

    public function attemptRegister () {
        if(! empty($_POST)) {
            require_once 'validation/FormValidation.php';
            $validator = new FormValidation($_POST);
            $validation_errors = $validator->validateRegisterForm();
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $duplicate_check = $this->userModel->checkForDuplicate($username, $email);
            
            $errors = array_merge($validation_errors, $duplicate_check);

            if(! empty($errors)) {  
                foreach($errors as $key => $value) {
                    $this->view->set_errors($key, $value);
                }
                $this->redirectIfFailed();
            } else {
                session_start();
                $this->userModel->registerUser($username, $email, $password);
                $_SESSION['username'] = $username;
                $_SESSION['logged_in_to_peace_web'] = true;
                $this->redirectOnSuccess();
            }
            
        }
    }
}