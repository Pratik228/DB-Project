<?php 
$entity = $_GET['entity'] ?? 'default';
include('includes/db_config.php');
include('includes/header.php');
include('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Record - <?= ucfirst($entity) ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Add New <?= ucfirst($entity) ?></h2>
        <form action="manage_records.php?entity=<?= $entity ?>&operation=add" method="post">
            <div class="form-row">
                <?php if ($entity == 'doctor'): ?>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="FirstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="LastName" placeholder="Last Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="Specialization" placeholder="Specialization" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="ContactNumber" placeholder="Contact Number" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" name="Email" placeholder="Email" required>
                    </div>
                <?php elseif ($entity == 'patient'): ?>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="FirstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="LastName" placeholder="Last Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" class="form-control" name="DateOfBirth" placeholder="Date of Birth" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="Gender" placeholder="Gender" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="ContactNumber" placeholder="Contact Number" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" name="Email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="Address" placeholder="Address" required></textarea>
                    </div>
                <?php elseif ($entity == 'appointment'): ?>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" name="PatientID" placeholder="Patient ID" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" name="DoctorID" placeholder="Doctor ID" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" class="form-control" name="AppointmentDate" placeholder="Appointment Date" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="time" class="form-control" name="AppointmentTime" placeholder="Appointment Time" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="Status" placeholder="Status" required>
                    </div>
                    <!-- Continue with form fields for other entities -->
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Add Record</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.11
