<?php
session_start(); // Start the session at the beginning of the script
include('includes/db_config.php'); // Replace with your actual database configuration file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']); // 'doctor' or 'patient'

    // Insert into the users table
    $query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";

    if (mysqli_query($conn, $query)) {
        $_SESSION['user_name'] = $name; // Save the username in a session variable
        $_SESSION['success_message'] = "Registration successful!"; // Save a success message in session
        header('Location: index.php'); // Redirect to index.php
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <style>
        body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f7f7f7; /* Example background color */
}

.container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 300px; /* Or any other width */
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

input[type=text],
input[type=email],
input[type=password],
select {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

    </style>
    </style>
</head>
<body>
    <?php
    // Display the notification message if it's set
    if (isset($_SESSION['success_message'])) {
        echo "<div class='notification'>" . $_SESSION['success_message'] . "</div>";
        // Remove the message after displaying it
        unset($_SESSION['success_message']);
    }
    ?>
    <div class="container">
        <h2>User Registration</h2>
        <form action="register.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="role">Register As:</label>
            <select id="role" name="role">
                <option value="doctor">Doctor</option>
                <option value="patient">Patient</option>
            </select><br><br>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>






