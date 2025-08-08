<?php if(!session_id()) session_start(); ?>
<!doctype html>
<html><head><meta charset="utf-8"><title>Login - Tele Doc Flow</title>
<link rel="stylesheet" href="/assets/css/style.css"></head>
<body>
<div class="container">
  <header class="header"><h2>Tele Doc Flow</h2><div></div></header>
  <div class="card" style="max-width:480px;margin:30px auto">
    <h3>Login</h3>
    <?php if(!empty($error)): ?><div style="color:#b91c1c;margin-bottom:12px;"><?=htmlspecialchars($error)?></div><?php endif; ?>
    <form method="post" action="?r=auth/login">
      <div class="form-group"><label>Username</label><input name="username" class="input" placeholder="admin, doctor, or patient" required></div>
      <div class="form-group"><label>Password</label><input name="password" type="password" class="input" placeholder="anything"></div>
      <button class="btn">Login</button>
    </form>
  </div>
  <div class="footer">Demo accounts: admin / doctor / patient (no password check)</div>
</div>
</body></html>
