<?php
if(!session_id()) session_start();
$user = $_SESSION['user'] ?? null;
if (!$user) {
    header('Location: ?r=auth/login');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?? 'TeleDoc Flow' ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <h1>MEDILINK</h1>
            <nav>
                <?php if(isset($_SESSION['user'])): ?>
                    <a href="?r=<?= $_SESSION['user']['role'] ?>/dashboard">Dashboard</a>
                    <a href="?r=auth/logout">Logout</a>
                <?php else: ?>
                    <a href="?r=home/index">Home</a>
                    <a href="?r=auth/login">Login</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
</body>
</html>