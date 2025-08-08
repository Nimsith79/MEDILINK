<?php
namespace App\Controllers;
class AdminController {
    public function dashboard() {
        session_start();
        view('pages/admin_dashboard');
    }
}
