<form action="manage_records.php?entity=<?php echo $entity; ?>&operation=edit&id=<?php echo $record['id']; ?>" method="post">
    <?php if ($entity == 'doctor'): ?>
        <input type="text" name="FirstName" value="<?php echo $record['FirstName']; ?>" placeholder="First Name" required>
        <input type="text" name="LastName" value="<?php echo $record['LastName']; ?>" placeholder="Last Name" required>
        <input type="text" name="Specialization" value="<?php echo $record['Specialization']; ?>" placeholder="Specialization" required>
        <input type="text" name="ContactNumber" value="<?php echo $record['ContactNumber']; ?>" placeholder="Contact Number" required>
        <input type="email" name="Email" value="<?php echo $record['Email']; ?>" placeholder="Email" required>
    <?php elseif ($entity == 'patient'): ?>
        <input type="text" name="FirstName" value="<?php echo $record['FirstName']; ?>" placeholder="First Name" required>
        <input type="text" name="LastName" value="<?php echo $record['LastName']; ?>" placeholder="Last Name" required>
        <input type="date" name="DateOfBirth" value="<?php echo $record['DateOfBirth']; ?>" placeholder="Date of Birth" required>
        <input type="text" name="Gender" value="<?php echo $record['Gender']; ?>" placeholder="Gender" required>
        <input type="text" name="ContactNumber" value="<?php echo $record['ContactNumber']; ?>" placeholder="Contact Number" required>
        <input type="email" name="Email" value="<?php echo $record['Email']; ?>" placeholder="Email" required>
        <textarea name="Address" placeholder="Address" required><?php echo $record['Address']; ?></textarea>
        <?php elseif ($entity == 'appointment'): ?>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" placeholder="Patient ID" required>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" placeholder="Doctor ID" required>
        <input type="date" name="AppointmentDate" value="<?php echo $record['AppointmentDate']; ?>" placeholder="Appointment Date" required>
        <input type="time" name="AppointmentTime" value="<?php echo $record['AppointmentTime']; ?>" placeholder="Appointment Time" required>
        <input type="text" name="Status" value="<?php echo $record['Status']; ?>" placeholder="Status" required>
    <?php elseif ($entity == 'billing'): ?>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" placeholder="Patient ID" required>
        <input type="text" name="Amount" value="<?php echo $record['Amount']; ?>" placeholder="Billing Amount" required>
    <?php elseif ($entity == 'symptom'): ?>
        <input type="text" name="Name" value="<?php echo $record['Name']; ?>" placeholder="Symptom Name" required>
    <?php elseif ($entity == 'prescription'): ?>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" placeholder="Doctor ID" required>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" placeholder="Patient ID" required>
        <input type="text" name="Dosage" value="<?php echo $record['Dosage']; ?>" placeholder="Dosage" required>
        <input type="text" name="Frequency" value="<?php echo $record['Frequency']; ?>" placeholder="Frequency" required>
    <?php elseif ($entity == 'pharmacist'): ?>
        <input type="email" name="Email" value="<?php echo $record['Email']; ?>" placeholder="Email" required>
    <?php elseif ($entity == 'administrator'): ?>
        <input type="password" name="Password" value="<?php echo $record['Password']; ?>" placeholder="Password" required>
    <?php elseif ($entity == 'receptionist'): ?>
        <input type="password" name="Password" value="<?php echo $record['Password']; ?>" placeholder="Password" required>
    <?php elseif ($entity == 'room'): ?>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" placeholder="Doctor ID" required>
    <?php elseif ($entity == 'medical_record'): ?>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" placeholder="Patient ID" required>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" placeholder="Doctor ID" required>
        <textarea name="Diagnosis" placeholder="Diagnosis" required><?php echo $record['Diagnosis']; ?></textarea>
        <textarea name="Prescription" placeholder="Prescription" required><?php echo $record['Prescription']; ?></textarea>
        <input type="date" name="RecordDate" value="<?php echo $record['RecordDate']; ?>" placeholder="Record Date" required>
    <?php endif; ?>

    <input type="submit" value="Update Record">
</form>
