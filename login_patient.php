<?php
include('./includes/db_config.php'); // Replace with your actual database configuration file
session_start();

// Check if the form is submitted
//nallau92
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND role = 'patient'";
    echo $query;
    $result = mysqli_query($conn, $query);
    $patient = mysqli_fetch_assoc($result);

    if ($patient) {
        // Verify the password
        if ($password == $patient['password']) {
            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['patient_id'] = $patient['id'];
            $_SESSION['username'] = $patient['name'];

            // Redirect to patient's dashboard or home page
            header("Location: patient_dashboard.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that email.";
    }
}
?>
<?php
// PHP code for handling patient's login logic goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Login</title>
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
</head>
<body>
    <div class="container">
        <h2>Patient Login</h2>
        <form action="login_patient.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

