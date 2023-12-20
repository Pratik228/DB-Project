<?php
// db/config.php: Database connection configuration
$dbHost = '127.0.0.1';
$dbUsername = 'root';
$dbPassword = 'Pra123890';
$dbName = 'nallau92';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
