<?php
namespace App\Controllers;
class PatientController {
    public function dashboard() {
        session_start();
        view('pages/patient_dashboard');
    }
}
