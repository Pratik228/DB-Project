<!-- Include necessary PHP files -->
<?php include('../db/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Record</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Add New Record</h1>
    <form action="insert_record.php" method="post">
        <div class="form-input">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
