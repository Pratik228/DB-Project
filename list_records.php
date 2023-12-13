<?php
include('includes/db_config.php');
include('includes/header.php');
include('includes/functions.php');

$entity = $_GET['entity'] ?? ''; // Get the entity from URL query parameter

// Fetch records based on the entity
$records = getAllRecords($entity);

// Define a function to generate table headers based on the entity
function generateTableHeaders($entity) {
    switch ($entity) {
        case 'doctor':
            return ['DoctorID', 'FirstName', 'LastName', 'Specialization', 'ContactNumber', 'Email'];
        case 'patient':
            return ['PatientID', 'FirstName', 'LastName', 'DateOfBirth', 'Gender', 'ContactNumber', 'Email', 'Address'];
        case 'appointment':
            return ['AppointmentID', 'PatientID', 'DoctorID', 'AppointmentDate', 'AppointmentTime', 'Status'];
        case 'billing':
            return ['BillingID', 'PatientID', 'Amount'];
        case 'symptom':
            return ['SymptomID', 'Name'];
        case 'prescription':
            return ['PrescriptionID', 'DoctorID', 'PatientID', 'Dosage', 'Frequency'];
        case 'pharmacist':
            return ['PharmacistID', 'Email'];
        case 'administrator':
            return ['AdminID', 'Password'];
        case 'receptionist':
            return ['ReceptionistID', 'Password'];
        case 'room':
            return ['RoomID', 'DoctorID'];
        case 'medicalrecord':
            return ['RecordID', 'PatientID', 'DoctorID', 'Diagnosis', 'Prescription', 'RecordDate'];
        default:
            return [];
    }
}


$headers = generateTableHeaders($entity);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Records - <?= ucfirst($entity) ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <h2>List of <?= ucfirst($entity) ?></h2>
        <table>
            <thead>
                <tr>
                    <?php foreach ($headers as $header): ?>
                        <th><?= htmlspecialchars($header) ?></th>
                    <?php endforeach; ?>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <?php foreach ($record as $field): ?>
                            <td><?= htmlspecialchars($field) ?></td>
                        <?php endforeach; ?>
                        <td>
                            <a href="edit_record.php?entity=<?= $entity ?>&id=<?= $record['id'] ?>">Edit</a>
                            <a href="delete_record.php?entity=<?= $entity ?>&id=<?= $record['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <?php include('includes/footer.php'); ?>
</body>
</html>
