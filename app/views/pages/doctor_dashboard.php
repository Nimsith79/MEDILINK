<?php if(!session_id()) session_start();
$user = $_SESSION['user'] ?? null;
if (!$user || $user['role'] !== 'doctor') {
    header('Location: ?r=auth/login');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard - MEDILINK</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <header class="welcome-banner">
        <h1>Good morning, Dr. Sarah Johnson!</h1>
        <p>Cardiology • License: MD12345</p>
        <p>You have 3 appointments today.</p>
    </header>

    <div class="dashboard-stats">
        <div class="stat-card">
            <i class="fas fa-calendar"></i>
            <h3>Today's Appointments</h3>
            <p class="stat-number">3</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-user-clock"></i>
            <h3>In Progress</h3>
            <p class="stat-number">1</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-users"></i>
            <h3>Total Patients</h3>
            <p class="stat-number">247</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-envelope"></i>
            <h3>New Messages</h3>
            <p class="stat-number">8</p>
        </div>
    </div>

    <nav class="dashboard-nav">
        <a href="#" class="active">Overview</a>
        <a href="#">Appointments</a>
        <a href="#">Patients</a>
        <a href="#">Prescriptions</a>
    </nav>

    <div class="dashboard-content">
        <div class="appointments-section">
            <h2><i class="fas fa-calendar-alt"></i> Today's Schedule</h2>
            <div class="appointment-card">
                <div class="appointment-info">
                    <h3>John Smith</h3>
                    <p>Regular checkup</p>
                    <p>10:00 AM</p>
                </div>
                <div class="appointment-actions">
                    <span class="appointment-status">scheduled</span>
                    <button class="btn btn-primary"><i class="fas fa-video"></i> Start</button>
                </div>
            </div>
            <div class="appointment-card">
                <div class="appointment-info">
                    <h3>Emily Davis</h3>
                    <p>Follow-up consultation</p>
                    <p>11:00 AM</p>
                </div>
                <div class="appointment-actions">
                    <span class="appointment-status">scheduled</span>
                    <button class="btn btn-primary"><i class="fas fa-video"></i> Start</button>
                </div>
            </div>
            <div class="appointment-card">
                <div class="appointment-info">
                    <h3>Michael Brown</h3>
                    <p>Symptoms review</p>
                    <p>2:00 PM</p>
                </div>
                <div class="appointment-actions">
                    <span class="appointment-status">in-progress</span>
                    <button class="btn btn-primary"><i class="fas fa-video"></i> Resume</button>
                </div>
            </div>
            <button class="btn btn-secondary">View Full Schedule</button>
        </div>

        <div class="quick-actions-section">
            <h2><i class="fas fa-bolt"></i> Quick Actions</h2>
            <div class="action-card">
                <h3>Create New Prescription</h3>
                <button class="btn btn-primary">Create</button>
            </div>
            <div class="action-card">
                <h3>View Patient History</h3>
                <button class="btn btn-secondary">View</button>
            </div>
            <div class="action-card">
                <h3>Update Availability</h3>
                <button class="btn btn-secondary">Update</button>
            </div>
            <div class="action-card">
                <h3>Send Message to Patient</h3>
                <button class="btn btn-secondary">Send</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>