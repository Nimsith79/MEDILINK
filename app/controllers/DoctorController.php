<?php
namespace App\Controllers;
class DoctorController {
    public function dashboard() {
        session_start();
        view('pages/doctor_dashboard');
    }
}
