<?php
require_once 'models/User.php';

class AuthController {
    private $model;

    public function __construct($db) { $this->model = new User($db); }

    public function login() {
        if (isset($_SESSION['user_login'])) {
            header("Location: index.php?page=dashboard");
            exit;
        }
        include 'views/auth/login.php';
    }

    public function proses_login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->model->getByUsername($username);
        
        // Cek username dan password biasa (tanpa hash agar mudah untuk tugas)
        if ($user && $password == $user['password']) {
            $_SESSION['user_login'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header("Location: index.php?page=dashboard");
        } else {
            header("Location: index.php?page=auth&aksi=login&pesan=gagal");
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?page=auth&aksi=login");
    }
}
?>