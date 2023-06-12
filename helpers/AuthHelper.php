<?php
class AuthHelper {

    public function __construct() {}

    public function login($user) {
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->username;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: login');
            die();
        }
    }

    public function thereIsSession() {
        session_start();
        return isset($_SESSION['ID_USER']);
    }
}