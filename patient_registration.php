<?php 
include('includes/db_config.php'); 
include('includes/header.php'); 
include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Patient Registration</h2>
        <form action="manage_records.php?entity=patientRegistration" method="post">
            <!-- Add patient-specific input fields here -->
            <!-- Example input fields -->
            <input type="text" name="FirstName" placeholder="First Name" required class="form-control mb-2">
            <input type="text" name="LastName" placeholder="Last Name" required class="form-control mb-2">
            <input type="date" name="DateOfBirth" placeholder="Date of Birth" required class="form-control mb-2">
            <input type="text" name="Gender" placeholder="Gender" required class="form-control mb-2">
            <input type="text" name="ContactNumber" placeholder="Contact Number" required class="form-control mb-2">
            <input type="email" name="Email" placeholder="Email" required class="form-control mb-2">
            <textarea name="Address" placeholder="Address" required class="form-control mb-2"></textarea>
            <button type="submit" class="btn btn-primary">Register Patient</button>
        </form>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
