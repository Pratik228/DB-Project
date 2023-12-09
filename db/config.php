<?php
// db/config.php: Database connection configuration
$dbHost = 'elvis.rowan.edu';
$dbUsername = 'nallau92';
$dbPassword = '1PurpLe3truCk!';
$dbName = 'nallau92';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
