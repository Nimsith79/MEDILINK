<?php
namespace App\Controllers;
class HomeController {
    public function index() {
        session_start();
        view('pages/index', ['title'=>'Tele Doc Flow']);
    }
}
