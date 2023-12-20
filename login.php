<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>    
    body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f7f7f7; /* Example background color */
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    display: flex;
    justify-content: center;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 100%; /* Adjust width as needed */
    max-width: 320px; /* Maximum width of the container */
    margin: auto; /* Center the container */
    gap: 1rem;
}

.form-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
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
    width: 100%; /* Full width of the container */
}

button {
    padding: 10px 20px; /* Larger padding for better touch area */
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%; /* Full width buttons */
    box-sizing: border-box;
    padding-bottom: 1rem; /* Include padding and border in the element's total width and height */
}

button:hover {
    background-color: #4cae4c;
}

/* Add responsiveness to the login form */
@media (max-width: 576px) {
    .container {
        width: 90%; /* Full width on small screens */
        padding: 20px;
    }
}

/* Additional styles for other elements */
.title {
    text-align: center;
    margin-bottom: 20px;
}

.social-login {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.social-icon {
    padding: 10px;
    margin: 0 5px;
    border: 1px solid #ccc;
    border-radius: 50%;
    background-color: #fff;
    cursor: pointer;
}

.social-icon:hover {
    opacity: 0.7;
}
</style>
</head>
<body>
<div class="container">
        <div class="form-container">
            <h2 class="title">Login to Healthcare Management System</h2>
            <button onclick="window.location.href='login_doctor.php';">Login as Doctor</button>
            <button onclick="window.location.href='login_patient.php';">Login as Patient</button>
        </div>
    </div>

    <!-- Include any scripts for Bootstrap if you're using Bootstrap components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
