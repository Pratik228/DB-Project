<form action="manage_records.php?entity=<?php echo $entity; ?>&operation=add" method="post">
<form action="manage_records.php?entity=<?php echo $entity; ?>&operation=add" method="post">
    <?php if ($entity == 'doctor'): ?>
        <input type="text" name="FirstName" placeholder="First Name" required>
        <input type="text" name="LastName" placeholder="Last Name" required>
        <input type="text" name="Specialization" placeholder="Specialization" required>
        <input type="text" name="ContactNumber" placeholder="Contact Number" required>
        <input type="email" name="Email" placeholder="Email" required>
    <?php elseif ($entity == 'patient'): ?>
        <input type="text" name="FirstName" placeholder="First Name" required>
        <input type="text" name="LastName" placeholder="Last Name" required>
        <input type="date" name="DateOfBirth" placeholder="Date of Birth" required>
        <input type="text" name="Gender" placeholder="Gender" required>
        <input type="text" name="ContactNumber" placeholder="Contact Number" required>
        <input type="email" name="Email" placeholder="Email" required>
        <textarea name="Address" placeholder="Address" required></textarea>
    <?php elseif ($entity == 'appointment'): ?>
        <input type="number" name="PatientID" placeholder="Patient ID" required>
        <input type="number" name="DoctorID" placeholder="Doctor ID" required>
        <input type="date" name="AppointmentDate" placeholder="Date" required>
        <input type="time" name="AppointmentTime" placeholder="Time" required>
        <input type="text" name="Status" placeholder="Status" required>
    <?php elseif ($entity == 'billing'): ?>
        <input type="number" name="PatientID" placeholder="Patient ID" required>
        <input type="text" name="Amount" placeholder="Amount" required>
    <?php elseif ($entity == 'symptom'): ?>
        <input type="text" name="Name" placeholder="Symptom Name" required>
    <?php elseif ($entity == 'prescription'): ?>
        <input type="number" name="DoctorID" placeholder="Doctor ID" required>
        <input type="number" name="PatientID" placeholder="Patient ID" required>
        <input type="text" name="Dosage" placeholder="Dosage" required>
        <input type="text" name="Frequency" placeholder="Frequency" required>
    <?php elseif ($entity == 'pharmacist'): ?>
        <input type="email" name="Email" placeholder="Email" required>
    <?php elseif ($entity == 'administrator'): ?>
        <input type="password" name="Password" placeholder="Password" required>
    <?php elseif ($entity == 'receptionist'): ?>
        <input type="password" name="Password" placeholder="Password" required>
    <?php elseif ($entity == 'room'): ?>
        <input type="number" name="DoctorID" placeholder="Doctor ID" required>
    <?php elseif ($entity == 'medical_record'): ?>
        <input type="number" name="PatientID" placeholder="Patient ID" required>
        <input type="number" name="DoctorID" placeholder="Doctor ID" required>
        <textarea name="Diagnosis" placeholder="Diagnosis" required></textarea>
        <textarea name="Prescription" placeholder="Prescription" required></textarea>
        <input type="date" name="RecordDate" placeholder="Record Date" required>
    <?php endif; ?>

    <input type="submit" value="Add Record">
</form>


    <input type="submit" value="Add Record">
</form>
