<?php
namespace App\Controllers;
class DoctorController {
    public function dashboard() {
        session_start();
        $user = $_SESSION['user'] ?? null;
        if (!$user || $user['role'] !== 'doctor') {
            header('Location: ?r=auth/login');
            exit;
        }
        view('pages/doctor_dashboard');
    }
}
