<?php
// Start the session for user authentication, if not logged in, redirect to login page
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Lot Reservation System</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f7fb;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #202d44;
            color: white;
            position: fixed;
            padding-top: 20px;
        }
        .sidebar h2 {
            margin-left: 20px;
            font-size: 24px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px 20px;
            cursor: pointer;
        }
        .sidebar ul li:hover {
            background-color: #31415c;
        }
        .sidebar ul li i {
            margin-right: 10px;
        }
        .main {
            margin-left: 250px;
            padding: 20px;
        }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cards {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }
        .card {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            color: white;
        }
        .card-blue { background-color: #2196f3; }
        .card-green { background-color: #4caf50; }
        .card-purple { background-color: #9c27b0; }
        .card-red { background-color: #f44336; }
        .recent-activity table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }
        .recent-activity th, .recent-activity td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .recent-activity th {
            background-color: #eaeaea;
        }
        .chart-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Reservelt</h2>
        <ul>
            <li><i class="fas fa-tachometer-alt"></i> Dashboard</li>
            <li><i class="fas fa-calendar-check"></i> Reservations</li>
            <li><i class="fas fa-map-marked-alt"></i> Lots</li>
            <li><i class="fas fa-users"></i> Users</li>
            <li><i class="fas fa-cog"></i> Settings</li>
            <li><i class="fas fa-sign-out-alt"></i> Logout</li>
        </ul>
    </div>

    <div class="main">
        <div class="dashboard-header">
            <h1>Dashboard</h1>
            <div>Admin</div>
        </div>

        <div class="cards">
            <div class="card card-blue">
                <h2><?php echo $totalReservations; ?></h2>
                <p>Total Reservations</p>
            </div>
            <div class="card card-green">
                <h2><?php echo $approvedReservations; ?></h2>
                <p>Approved Reservations</p>
            </div>
            <div class="card card-purple">
                <h2><?php echo $totalUsers; ?></h2>
                <p>Total Users</p>
            </div>
            <div class="card card-red">
                <h2><?php echo $expiredReservations; ?></h2>
                <p>Expired Reservations</p>
            </div>
        </div>

        
        
    </div>
</body>
</html>
