<?php
include_once('./views/login.view.php');
include_once('./models/user.model.php');
include_once('./helpers/AuthHelper.php');

class LoginController {

    private $view;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin() {
        $this->view->showLogin();
    }

    public function verifyUser() {
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->model->getByUsername($username);
        }

        if (!empty($user) && password_verify($password, $user->password)) {
            $this->authHelper->login($user);

            header('Location: ./rooms');
        } else {
            $this->view->showLogin("Login incorrecto");
        }
    }

    public function logout() {
        $this->authHelper->logout();
        header('Location: rooms');
    }
}
