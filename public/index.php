<?php
require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../app/helpers/functions.php';
$route = $_GET['r'] ?? 'home/index';
$parts = explode('/', $route);
$controller = $parts[0] ?? 'home';
$action = $parts[1] ?? 'index';

// Map routes
switch($controller) {
    case 'home':
        require_once __DIR__ . '/../app/controllers/HomeController.php';
        $c = new \App\Controllers\HomeController(); $c->index(); break;
    case 'auth':
        require_once __DIR__ . '/../app/controllers/AuthController.php';
        $c = new \App\Controllers\AuthController();
        if($action === 'login') $c->login();
        elseif($action === 'logout') $c->logout();
        else { http_response_code(404); echo 'Auth action not found.'; }
        break;
    case 'admin':
        require_once __DIR__ . '/../app/controllers/AdminController.php';
        (new \App\Controllers\AdminController())->dashboard(); break;
    case 'doctor':
        require_once __DIR__ . '/../app/controllers/DoctorController.php';
        (new \App\Controllers\DoctorController())->dashboard(); break;
    case 'patient':
        require_once __DIR__ . '/../app/controllers/PatientController.php';
        (new \App\Controllers\PatientController())->dashboard(); break;
    default:
        http_response_code(404);
        require_once __DIR__ . '/../app/views/pages/404.php';
}
