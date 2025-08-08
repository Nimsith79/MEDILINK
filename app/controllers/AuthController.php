<?php
namespace App\Controllers;
class AuthController {
    public function login() {
        session_start();
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $role = $_POST['role'] ?? '';

            // Very simple demo auth: username should match the role
            if($username === $role) {
                $_SESSION['user'] = [
                    'username' => $username,
                    'role' => $role
                ];
                header('Location: ?r=' . $role . '/dashboard');
                exit;
            } else {
                $error = 'Invalid credentials. Try admin / doctor / patient as username and select the corresponding role.';
                view('auth/login', ['error' => $error]);
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
