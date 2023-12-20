<?php
include('db_config.php'); // Ensure this path is correct

// Function to determine the ID column name based on the table
function getIdColumnName($table) {
    $idColumnNames = [
        'Doctor' => 'DoctorID',
        'Patient' => 'PatientID',
        'Appointment' => 'AppointmentID',
        'Billing' => 'BillingID',
        'Symptom' => 'SymptomID',
        'Prescription' => 'PrescriptionID',
        'Pharmacist' => 'PharmacistID',
        'Administrator' => 'AdminID',
        'Receptionist' => 'ReceptionistID',
        'Room' => 'RoomID',
        'MedicalRecord' => 'RecordID'
    ];

    return $idColumnNames[$table] ?? 'id';
}

// Function to get all records from a specific table
function getAllRecords($table) {
    global $conn;
    $query = "SELECT * FROM `$table`";
    $result = $conn->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Function to get a single record by ID from a specific table
function getRecordById($table, $id) {
    global $conn;
    $idColumn = getIdColumnName($table);
    $stmt = $conn->prepare("SELECT * FROM `$table` WHERE `$idColumn` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Function to insert a new record into a specific table
function createRecord($table, $data) {
    global $conn;
    
    switch ($table) {
        case 'doctor':
            $stmt = $conn->prepare("INSERT INTO Doctor (FirstName, LastName, Specialization, ContactNumber, Email) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $data['FirstName'], $data['LastName'], $data['Specialization'], $data['ContactNumber'], $data['Email']);
            break;
        case 'patient':
            $stmt = $conn->prepare("INSERT INTO Patient (FirstName, LastName, DateOfBirth, Gender, ContactNumber, Email, Address) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $data['FirstName'], $data['LastName'], $data['DateOfBirth'], $data['Gender'], $data['ContactNumber'], $data['Email'], $data['Address']);
            break;
        case 'appointment':
            $stmt = $conn->prepare("INSERT INTO Appointment (PatientID, DoctorID, AppointmentDate, AppointmentTime, Status) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("iisss", $data['PatientID'], $data['DoctorID'], $data['AppointmentDate'], $data['AppointmentTime'], $data['Status']);
            break;
        case 'billing':
            $stmt = $conn->prepare("INSERT INTO Billing (PatientID, Amount) VALUES (?, ?)");
            $stmt->bind_param("id", $data['PatientID'], $data['Amount']);
            break;
        case 'Symptom':
            $stmt = $conn->prepare("INSERT INTO Symptom (Name) VALUES (?)");
            $stmt->bind_param("s", $data['Name']);
            break;
        case 'Prescription':
            $stmt = $conn->prepare("INSERT INTO Prescription (DoctorID, PatientID, Dosage, Frequency) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("iiss", $data['DoctorID'], $data['PatientID'], $data['Dosage'], $data['Frequency']);
            break;
        case 'Pharmacist':
            $stmt = $conn->prepare("INSERT INTO Pharmacist (Email) VALUES (?)");
            $stmt->bind_param("s", $data['Email']);
            break;
        case 'Administrator':
            $stmt = $conn->prepare("INSERT INTO Administrator (Password) VALUES (?)");
            $stmt->bind_param("s", $data['Password']);
            break;
        case 'Receptionist':
            $stmt = $conn->prepare("INSERT INTO Receptionist (Password) VALUES (?)");
            $stmt->bind_param("s", $data['Password']);
            break;
        case 'Room':
            $stmt = $conn->prepare("INSERT INTO Room (DoctorID) VALUES (?)");
            $stmt->bind_param("i", $data['DoctorID']);
            break;
        case 'MedicalRecord':
            $stmt = $conn->prepare("INSERT INTO MedicalRecord (PatientID, DoctorID, Diagnosis, Prescription, RecordDate) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("iisss", $data['PatientID'], $data['DoctorID'], $data['Diagnosis'], $data['Prescription'], $data['RecordDate']);
            break;
        default:
            return false; // Table not found
    }

    $stmt->execute();
    $stmt->close();
    return true;
}


function updateRecord($table, $data, $id) {
    global $conn;
    $idColumn = getIdColumnName($table);

    switch ($table) {
        case 'Doctor':
            $stmt = $conn->prepare("UPDATE Doctor SET FirstName=?, LastName=?, Specialization=?, ContactNumber=?, Email=? WHERE $idColumn=?");
            $stmt->bind_param("sssssi", $data['FirstName'], $data['LastName'], $data['Specialization'], $data['ContactNumber'], $data['Email'], $id);
            break;
        case 'Patient':
            $stmt = $conn->prepare("UPDATE Patient SET FirstName=?, LastName=?, DateOfBirth=?, Gender=?, ContactNumber=?, Email=?, Address=? WHERE $idColumn=?");
            $stmt->bind_param("sssssssi", $data['FirstName'], $data['LastName'], $data['DateOfBirth'], $data['Gender'], $data['ContactNumber'], $data['Email'], $data['Address'], $id);
            break;
        case 'Appointment':
            $stmt = $conn->prepare("UPDATE Appointment SET PatientID=?, DoctorID=?, AppointmentDate=?, AppointmentTime=?, Status=? WHERE $idColumn=?");
            $stmt->bind_param("iisssi", $data['PatientID'], $data['DoctorID'], $data['AppointmentDate'], $data['AppointmentTime'], $data['Status'], $id);
            break;
        case 'Billing':
            $stmt = $conn->prepare("UPDATE Billing SET PatientID=?, Amount=? WHERE $idColumn=?");
            $stmt->bind_param("idi", $data['PatientID'], $data['Amount'], $id);
            break;
        case 'Symptom':
            $stmt = $conn->prepare("UPDATE Symptom SET Name=? WHERE $idColumn=?");
            $stmt->bind_param("si", $data['Name'], $id);
            break;
        case 'Prescription':
            $stmt = $conn->prepare("UPDATE Prescription SET DoctorID=?, PatientID=?, Dosage=?, Frequency=? WHERE $idColumn=?");
            $stmt->bind_param("iissi", $data['DoctorID'], $data['PatientID'], $data['Dosage'], $data['Frequency'], $id);
            break;
        case 'Pharmacist':
            $stmt = $conn->prepare("UPDATE Pharmacist SET Email=? WHERE $idColumn=?");
            $stmt->bind_param("si", $data['Email'], $id);
            break;
        case 'Administrator':
            $stmt = $conn->prepare("UPDATE Administrator SET Password=? WHERE $idColumn=?");
            $stmt->bind_param("si", $data['Password'], $id);
            break;
        case 'Receptionist':
            $stmt = $conn->prepare("UPDATE Receptionist SET Password=? WHERE $idColumn=?");
            $stmt->bind_param("si", $data['Password'], $id);
            break;
        case 'Room':
            $stmt = $conn->prepare("UPDATE Room SET DoctorID=? WHERE $idColumn=?");
            $stmt->bind_param("ii", $data['DoctorID'], $id);
            break;
        case 'MedicalRecord':
            $stmt = $conn->prepare("UPDATE MedicalRecord SET PatientID=?, DoctorID=?, Diagnosis=?, Prescription=?, RecordDate=? WHERE $idColumn=?");
            $stmt->bind_param("iisssi", $data['PatientID'], $data['DoctorID'], $data['Diagnosis'], $data['Prescription'], $data['RecordDate'], $id);
            break;
        default:
            return false; // Table not found
    }

    $stmt->execute();
    $stmt->close();
    return true;
}

// Helper function to get the ID column name based on the table
function getPrimaryKeyColumnName($table) {
    switch ($table) {
        case 'Doctor':
            return 'DoctorID';
        case 'Patient':
            return 'PatientID';
        case 'Appointment':
            return 'AppointmentID';
        case 'Billing':
            return 'BillingID';
        case 'Symptom':
            return 'SymptomID';
        case 'Prescription':
            return 'PrescriptionID';
        case 'Pharmacist':
            return 'PharmacistID';
        case 'Administrator':
            return 'AdminID';
        case 'Receptionist':
            return 'ReceptionistID';
        case 'Room':
            return 'RoomID';
        case 'MedicalRecord':
            return 'RecordID';
        default:
            return 'id'; // default ID column name for tables not explicitly listed
    }
}



// Function to delete a record from a specific table
function deleteRecord($table, $id) {
    global $conn;
    $idColumn = getIdColumnName($table);
    $stmt = $conn->prepare("DELETE FROM `$table` WHERE `$idColumn` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

// Add any additional utility functions below
?>
