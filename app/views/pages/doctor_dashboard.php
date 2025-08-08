<?php if(!session_id()) session_start(); ?>
<!doctype html><html><head><meta charset="utf-8"><title>Doctor Dashboard</title>
<link rel="stylesheet" href="/assets/css/style.css"></head><body>
<div class="container">
  <header class="header"><h2>Doctor Dashboard</h2><div><a href='?r=auth/logout'>Logout</a></div></header>
  <div class="card" style="margin-top:20px">
    <h3>Today's Appointments</h3>
    <ul><li>Patient A — 10:00</li><li>Patient B — 11:00</li></ul>
  </div>
  <div class="footer">Doctor tools placeholder.</div>
</div></body></html>
