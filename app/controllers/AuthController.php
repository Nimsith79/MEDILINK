<?php
namespace App\Controllers;
class AuthController {
    public function login() {
        session_start();
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            // Very simple demo auth: username 'admin' -> role admin, 'doctor', 'patient'
            if($username === 'admin') {
                $_SESSION['user'] = ['username'=>'admin','role'=>'admin'];
                header('Location: ?r=admin/dashboard'); exit;
            } elseif($username === 'doctor') {
                $_SESSION['user'] = ['username'=>'doctor','role'=>'doctor'];
                header('Location: ?r=doctor/dashboard'); exit;
            } elseif($username === 'patient') {
                $_SESSION['user'] = ['username'=>'patient','role'=>'patient'];
                header('Location: ?r=patient/dashboard'); exit;
            } else {
                $error = 'Invalid credentials. Try admin / doctor / patient as username.';
                view('auth/login', ['error'=>$error]);
                return;
            }
        }
        view('auth/login');
    }
    public function logout() {
        session_start();
        session_destroy();
        header('Location: ?r=home/index');
    }
}
