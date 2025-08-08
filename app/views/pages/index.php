<?php if(!session_id()) session_start(); ?>
<!doctype html>
<html><head><meta charset="utf-8"><title><?=htmlspecialchars($title ?? 'Home')?></title>
<link rel="stylesheet" href="/assets/css/style.css"></head>
<body>
<div class="container">
  <header class="header">
    <h2>Tele Doc Flow</h2>
    <nav class="nav">
      <a href="?r=home/index">Home</a>
      <a href="?r=auth/login">Login</a>
    </nav>
  </header>

  <div style="display:flex;gap:20px;flex-wrap:wrap">
    <div class="card" style="flex:1;min-width:240px">
      <h3>Quick Actions</h3>
      <p>Appointment booking, messages, video consults — simplified.</p>
      <a class="btn" href="?r=auth/login">Get Started</a>
    </div>
    <div class="card" style="flex:2;min-width:320px">
      <h3>About</h3>
      <p>This is a server-rendered PHP version converted from the original React app. Many interactive components have been replaced by vanilla JS and server routes.</p>
    </div>
  </div>

  <div class="footer">Converted to PHP MVC — demo content.</div>
</div>
</body></html>
