<?php
// This file would handle inserting the new record into the database.
// You would grab data from the $_POST superglobal and then perform the insert.
// After insertion, redirect to display_records.php or show an error.
?>
<?php
include('../db/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Grab data from the form
    $name = $conn->real_escape_string($_POST['name']);
    
    $stmt = $conn->prepare("INSERT INTO YourTable (name, ...) VALUES (?, ...)");
    $stmt->bind_param("s", $name); // 's' specifies the variable type => 'string'

    if ($stmt->execute()) {
        // Redirect to display_records.php with a success message
        header("Location: display_records.php?success=Record added successfully");
        exit();
    } else {
        // Redirect back to add_form.php with an error message
        header("Location: add_form.php?error=Failed to add record");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>