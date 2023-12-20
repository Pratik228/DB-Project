<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Healthcare Management System</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://www.shutterstock.com/shutterstock/photos/582465904/display_1500/stock-vector-medicine-concept-with-doctor-and-patient-in-flat-style-isolated-on-white-background-practitioner-582465904.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .welcome-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 350px;
        }

        .card-body {
            margin: 0;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card-text {
            margin-bottom: 25px;
        }

        .btn {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #28a745;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Welcome to Healthcare Management System</h2>
                <p class="card-text">A comprehensive solution for managing medical records, appointments, and billing.</p>
                <div class="buttons">
                    <button onclick="location.href='login.php'" class="btn">Login</button>
                    <button onclick="location.href='register.php'" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
