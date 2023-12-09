<?php
include('db_config.php');

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate id
    $id = $_POST["id"];
    
    // Validate name
    $name = trim($_POST["name"]);
    
    // Validate description
    $description = trim($_POST["description"]);
    
    // Prepare an update statement
    $sql = "UPDATE your_table_name SET name=?, description=? WHERE id=?";
    
    if($stmt = $conn->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssi", $param_name, $param_description, $param_id);
        
        // Set parameters
        $param_name = $name;
        $param_description = $description;
        $param_id = $id;
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Records updated successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt->close();
    
    // Close connection
    $conn->close();
} else{
    // Check existence of id parameter before processing further
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
