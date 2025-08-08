<?php if(!session_id()) session_start();
$user = $_SESSION['user'] ?? null;
if (!$user || $user['role'] !== 'patient') {
    header('Location: ?r=auth/login');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard - MEDILINK</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/patient_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .nav-left, .nav-right {
            display: flex;
            align-items: center;
        }
        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #0080ff;
            text-decoration: none;
            margin-right: 2rem;
        }
        .logo svg {
            margin-right: 0.5rem;
        }
        .icon-button {
            color: #333;
            margin-left: 1rem;
        }
        .user-info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-left: 1rem;
        }
        .user-role {
            font-size: 0.8rem;
            color: #666;
        }
        .logout {
            margin-left: 1rem;
        }
    </style>
</head>
<body>
<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
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