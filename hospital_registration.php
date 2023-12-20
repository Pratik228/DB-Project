<?php 
include('includes/db_config.php'); 
include('includes/header.php'); 
include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Registration</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Hospital Registration</h2>
        <form action="manage_records.php?entity=hospitalRegistration" method="post">
            <!-- Add hospital-specific input fields here -->
            <!-- Example input fields -->
            <input type="text" name="HospitalName" placeholder="Hospital Name" required class="form-control mb-2">
            <textarea name="Address" placeholder="Address" required class="form-control mb-2"></textarea>
            <input type="text" name="ContactNumber" placeholder="Contact Number" required class="form-control mb-2">
            <input type="email" name="Email" placeholder="Email" required class="form-control mb-2">
            <button type="submit" class="btn btn-primary">Register Hospital</button>
        </form>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
