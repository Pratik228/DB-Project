<?php include('../db/db_config.php'); // Ensure this path is correct ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Application</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Database Frontend Application</h1>
    </header>

    <nav>
        <ul>
            <li><a href="display_records.php">View Records</a></li>
            <li><a href="add_form.php">Add New Record</a></li>
            <li><a href="delete_record.php">Delete Record</a></li>
            <li><a href="edit_record.php">Edit Record</a></li>
            <li><a href="insert_record.php">Insert New Record</a></li>
            <li><a href="update_record.php">Update Record</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Welcome to the Application</h2>
            <p>This is your main homepage content area.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Application Name</p>
    </footer>
</body>
</html>
