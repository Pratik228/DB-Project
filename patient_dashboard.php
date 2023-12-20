<?php
session_start();

// Patient's name from the session for personal greeting
$patient_name = $_SESSION['username'];

// Include your database configuration file
include('./includes/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Dashboard</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
       body, html {
    height: 100%;
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7; /* You can change this to any light color or even add a background image */
}

header {
    text-align: center;
    width: 100%;
    padding-top: 50px; /* Adjust this value as needed */
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: calc(100vh - 100px); /* Adjusting the height calculation based on header */
}

.card {
    margin: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 10px; /* Rounded corners for the card */
    overflow: hidden; /* Makes sure the content fits well */
    width: 100%;
    max-width: 400px; /* Set max width for the card */
}

.card-body {
    padding: 20px;
    text-align: center; /* Center the text */
}

.card-title {
    margin-bottom: 15px;
    font-weight: bold;
}

.card-text {
    margin-bottom: 20px;
}

.btn {
    padding: 10px 15px; /* Increase padding for larger buttons */
    margin: 5px; /* Adds space between buttons */
    width: 80%; /* Makes buttons larger */
    max-width: 300px; /* Maximum width for buttons */
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn:hover {
    opacity: 0.9; /* Slight effect on hover for buttons */
}

    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($patient_name); ?>!</h1>
    </header>

    <main class="container">
        <!-- Add a card with options -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Dashboard</h2>
                <p class="card-text">Manage your appointments and account details.</p>
                <a href="list_records.php?entity=appointment" class="btn btn-primary">View Appointments</a>
                <a href="add_appointment.php" class="btn btn-danger">Add Appointment</a>
                <a href="prescriptions.php" class="btn btn-primary">View Prescriptions</a>
                <a href="list_records.php?entity=view" class="btn btn-primary">View My Reports</a>
            </div>
        </div>
    </main>
</body>
</html>
