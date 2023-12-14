<?php 
include('includes/db_config.php');
include('includes/header.php');
include('includes/functions.php');

// Get the entity type from the URL
$entity = $_GET['entity'] ?? 'doctor'; // Default to 'doctor' if no entity is specified

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
        case 'medical_record':
            return ['RecordID', 'PatientID', 'DoctorID', 'Diagnosis', 'Prescription', 'RecordDate'];
        default:
            return [];
    }
}

$headers = generateTableHeaders($entity);
$records = getAllRecords($entity);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main class="container mt-5">
        <h2>View <?php echo ucfirst($entity); ?> Records</h2>
        <?php if (!empty($records)): ?>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <?php foreach ($headers as $header): ?>
                            <th><?php echo htmlspecialchars($header); ?></th>
                        <?php endforeach; ?>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $record): ?>
                        <tr>
                            <?php foreach ($record as $value): ?>
                                <td><?php echo htmlspecialchars($value); ?></td>
                            <?php endforeach; ?>
                            <td>
                                <a href="edit_record.php?entity=<?php echo $entity; ?>&id=<?php echo $record['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete_record.php?entity=<?php echo $entity; ?>&id=<?php echo $record['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>
    </main>
    <?php include('includes/footer.php'); ?>
</body>
</html>
