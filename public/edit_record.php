<?php
include('db_config.php');

$id = $_GET['id'] ?? ''; // Replace with your parameter through GET request

// Retrieve the record's information 
$sql = "SELECT * FROM your_table_name WHERE id = ?";
if($stmt = $conn->prepare($sql)){
    $stmt->bind_param("i", $param_id);
    $param_id = $id;

    if($stmt->execute()){
        $result = $stmt->get_result();
        
        if($result->num_rows == 1){
            /* Fetch result row as an associative array. */
            $row = $result->fetch_array(MYSQLI_ASSOC);
            // Retrieve individual field value
            $name = $row["name"]; // Example field
            $description = $row["description"]; // Example field
        } else{
            // URL doesn't contain valid id. Redirect to error page
            header("location: error.php");
            exit();
        }
        
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}

// Close statement
$stmt->close();

// Close connection
$conn->close();
?>
<!-- HTML form for editing the record -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="update_record.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description"><?php echo $description; ?></textarea>
        </div>
        <div>
            <input type="submit" value="Update">
            <a href="index.php">Cancel</a>
        </div>
    </form>
</body>
</html>
