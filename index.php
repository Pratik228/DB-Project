<?php 
include('includes/db_config.php'); 
include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Healthcare Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Ensure this path is correct -->
</head>
<body>
    <?php include('includes/header.php'); // This will display the header content ?>

    <main class="container mt-4">
        <h1 class="text-center mb-4">Welcome to the Healthcare Management System</h1>
        <p class="lead text-center">This system provides comprehensive management of medical records, appointments, billing, and more.</p>
        
        <!-- Quick navigation links -->
        <section>
            <h2 class="text-center mb-3">Quick Access</h2>
            <div class="list-group text-center">
                <a href="list_records.php?entity=doctor" class="list-group-item list-group-item-action">View Doctors</a>
                <a href="list_records.php?entity=patient" class="list-group-item list-group-item-action">View Patients</a>
                <a href="list_records.php?entity=appointment" class="list-group-item list-group-item-action">View Appointments</a>
                <a href="list_records.php?entity=billing" class="list-group-item list-group-item-action">View Billing Records</a>
                <a href="list_records.php?entity=prescription" class="list-group-item list-group-item-action">View Prescriptions</a>
                <a href="list_records.php?entity=medicalRecord" class="list-group-item list-group-item-action">View Medical Records</a>
                <a href="list_records.php?entity=symptom" class="list-group-item list-group-item-action">View Symptoms</a>
                <a href="list_records.php?entity=room" class="list-group-item list-group-item-action">View Rooms</a>
                <a href="list_records.php?entity=pharmacist" class="list-group-item list-group-item-action">View Pharmacists</a>
                <a href="list_records.php?entity=administrator" class="list-group-item list-group-item-action">View Administrators</a>
                <a href="list_records.php?entity=receptionist" class="list-group-item list-group-item-action">View Receptionists</a>
            </div>
        </section>

        <!-- Additional content sections -->
        <section class="my-5">
            <h2 class="text-center">About Our System</h2>
            <p class="text-center">Learn more about how our system can help in managing healthcare facilities efficiently.</p>
        </section>

        <section class="mb-5">
            <h2 class="text-center">Contact Information</h2>
            <p class="text-center">Have questions? Contact our support team.</p>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
