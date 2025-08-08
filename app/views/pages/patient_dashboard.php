<?php if(!session_id()) session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/patient_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container">
    <header class="header"><h2>Doctor Dashboard</h2><div><a href='?r=auth/logout'>Logout</a></div></header>
    <header class="welcome-banner">
        <h1>Welcome back, John Smith!</h1>
        <p>Manage your appointments, prescriptions, and health records.</p>
    </header>

    <div class="dashboard-stats">
        <div class="stat-card">
            <i class="fas fa-calendar"></i>
            <h3>Upcoming</h3>
            <p class="stat-number">1</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-pills"></i>
            <h3>Active Meds</h3>
            <p class="stat-number">1</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-envelope"></i>
            <h3>Messages</h3>
            <p class="stat-number">3</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-file-medical"></i>
            <h3>Reports</h3>
            <p class="stat-number">5</p>
        </div>
    </div>

    <nav class="dashboard-nav">
        <a href="#" class="active">Overview</a>
        <a href="#">Appointments</a>
        <a href="#">Prescriptions</a>
        <a href="#">Messages</a>
    </nav>

    <div class="dashboard-content">
        <div class="appointments-section">
            <h2><i class="fas fa-calendar-alt"></i> Upcoming Appointments</h2>
            <div class="appointment-card">
                <div class="appointment-info">
                    <h3>Dr. Sarah Johnson</h3>
                    <p>2024-01-15 at 10:00 AM</p>
                </div>
                <div class="appointment-actions">
                    <span class="appointment-status">scheduled</span>
                    <button class="join-btn"><i class="fas fa-video"></i> Join</button>
                </div>
            </div>
            <button class="book-appointment-btn"><i class="fas fa-plus"></i> Book New Appointment</button>
        </div>

        <div class="medications-section">
            <h2><i class="fas fa-pills"></i> Current Medications</h2>
            <div class="medication-card">
                <h3>Hypertension</h3>
                <p class="medication-date">2024-01-10</p>
                <p class="medication-details">Lisinopril - 10mg, Once daily</p>
                <p class="medication-prescriber">Prescribed by Dr. Sarah Johnson</p>
            </div>
            <button class="view-all-btn">View All Prescriptions</button>
        </div>
    </div>
</div>
</body>
</html>