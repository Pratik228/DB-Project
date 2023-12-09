<?php
// This file would display a list of all records in the database.
?>
<!-- Include necessary PHP files -->
<?php include('../db/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Records</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Record List</h1>
    <!-- Display any messages -->
    <?php if(isset($_GET['success'])): ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php endif; ?>
    <?php if(isset($_GET['error'])): ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php endif; ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM YourTable");
        while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <a href="edit_record.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <form action="delete_record.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
