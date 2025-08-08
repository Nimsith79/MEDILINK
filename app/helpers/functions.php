<?php
function view($path, $data = []) {
    $viewFile = __DIR__ . '/../views/' . $path . '.php';
    if (!file_exists($viewFile)) {
        throw new Exception('View not found: ' . $viewFile);
    }
    extract($data, EXTR_SKIP);
    include $viewFile;
}
