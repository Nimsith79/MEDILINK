<?php if(!session_id()) session_start(); ?>
<?php 
$pageTitle = 'Admin Dashboard - TeleDoc Flow';
include __DIR__ . '/../partials/header.php';
?>
<div class="container">
  <header class="header"><h2>Admin Dashboard</h2><div><a href='?r=auth/logout'>Logout</a></div></header>
  <div class="grid grid-cols-3" style="margin-top:20px">
    <div class="card"><h4>Users</h4><p>Manage users</p></div>
    <div class="card"><h4>Appointments</h4><p>View all appointments</p></div>
    <div class="card"><h4>Reports</h4><p>System reports</p></div>
  </div>
  <?php include __DIR__ . '/../partials/footer.php'; ?>
  <div class="footer">Admin area — static content for now.</div>
</div></body></html>
