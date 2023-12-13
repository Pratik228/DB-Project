<?php 
include('includes/db_config.php'); 
include('includes/header.php'); 
include('includes/footer.php');
include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Healthcare Management System</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Ensure this path is correct -->
</head>
<body>
    <?php include('includes/header.php'); // This will display the header content ?>

    <main>
        <h1>Welcome to the Healthcare Management System</h1>
        <p>This system provides comprehensive management of medical records, appointments, billing, and more.</p>
        
        <!-- Quick navigation links -->
        <section>
            <h2>Quick Access</h2>
            <nav>
            <ul>
    <li><a href="list_records.php?entity=doctor">View Doctors</a></li>
    <li><a href="list_records.php?entity=patient">View Patients</a></li>
    <li><a href="list_records.php?entity=appointment">View Appointments</a></li>
    <li><a href="list_records.php?entity=billing">View Billing Records</a></li>
    <li><a href="list_records.php?entity=prescription">View Prescriptions</a></li>
    <li><a href="list_records.php?entity=medicalRecord">View Medical Records</a></li>
    <li><a href="list_records.php?entity=symptom">View Symptoms</a></li>
    <li><a href="list_records.php?entity=room">View Rooms</a></li>
    <li><a href="list_records.php?entity=pharmacist">View Pharmacists</a></li>
    <li><a href="list_records.php?entity=administrator">View Administrators</a></li>
    <li><a href="list_records.php?entity=receptionist">View Receptionists</a></li>
</ul>

            </nav>
        </section>

        <!-- Additional content sections -->
        <section>
            <h2>About Our System</h2>
            <p>Learn more about how our system can help in managing healthcare facilities efficiently.</p>
        </section>

        <section>
            <h2>Contact Information</h2>
            <p>Have questions? Contact our support team.</p>
        </section>
    </main>

    <?php include('includes/footer.php'); // This will display the footer content ?>
</body>
</html>
