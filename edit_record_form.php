<form action="manage_records.php?entity=<?php echo $entity; ?>&operation=edit&id=<?php echo $record['id']; ?>" method="post">
    <?php if ($entity == 'doctor'): ?>
        <input type="text" name="FirstName" value="<?php echo $record['FirstName']; ?>" required>
        <input type="text" name="LastName" value="<?php echo $record['LastName']; ?>" required>
        <input type="text" name="Specialization" value="<?php echo $record['Specialization']; ?>" required>
        <input type="text" name="ContactNumber" value="<?php echo $record['ContactNumber']; ?>" required>
        <input type="email" name="Email" value="<?php echo $record['Email']; ?>" required>
    <?php elseif ($entity == 'patient'): ?>
        <input type="text" name="FirstName" value="<?php echo $record['FirstName']; ?>" required>
        <input type="text" name="LastName" value="<?php echo $record['LastName']; ?>" required>
        <input type="date" name="DateOfBirth" value="<?php echo $record['DateOfBirth']; ?>" required>
        <input type="text" name="Gender" value="<?php echo $record['Gender']; ?>" required>
        <input type="text" name="ContactNumber" value="<?php echo $record['ContactNumber']; ?>" required>
        <input type="email" name="Email" value="<?php echo $record['Email']; ?>" required>
        <textarea name="Address" required><?php echo $record['Address']; ?></textarea>
    <?php elseif ($entity == 'appointment'): ?>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" required>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" required>
        <input type="date" name="AppointmentDate" value="<?php echo $record['AppointmentDate']; ?>" required>
        <input type="time" name="AppointmentTime" value="<?php echo $record['AppointmentTime']; ?>" required>
        <input type="text" name="Status" value="<?php echo $record['Status']; ?>" required>
    <?php elseif ($entity == 'billing'): ?>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" required>
        <input type="text" name="Amount" value="<?php echo $record['Amount']; ?>" required>
    <?php elseif ($entity == 'symptom'): ?>
        <input type="text" name="Name" value="<?php echo $record['Name']; ?>" required>
    <?php elseif ($entity == 'prescription'): ?>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" required>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" required>
        <input type="text" name="Dosage" value="<?php echo $record['Dosage']; ?>" required>
        <input type="text" name="Frequency" value="<?php echo $record['Frequency']; ?>" required>
    <?php elseif ($entity == 'pharmacist'): ?>
        <input type="email" name="Email" value="<?php echo $record['Email']; ?>" required>
    <?php elseif ($entity == 'administrator'): ?>
        <input type="password" name="Password" value="<?php echo $record['Password']; ?>" required>
    <?php elseif ($entity == 'receptionist'): ?>
        <input type="password" name="Password" value="<?php echo $record['Password']; ?>" required>
    <?php elseif ($entity == 'room'): ?>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" required>
    <?php elseif ($entity == 'medical_record'): ?>
        <input type="number" name="PatientID" value="<?php echo $record['PatientID']; ?>" required>
        <input type="number" name="DoctorID" value="<?php echo $record['DoctorID']; ?>" required>
        <textarea name="Diagnosis" required><?php echo $record['Diagnosis']; ?></textarea>
        <textarea name="Prescription" required><?php echo $record['Prescription']; ?></textarea>
        <input type="date" name="RecordDate" value="<?php echo $record['RecordDate']; ?>" required>
    <?php endif; ?>

    <input type="submit" value="Update Record">
</form>
