<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "database-1.cudo4qi8wweh.us-east-1.rds.amazonaws.com";      // example: database-xyz.ap-south-1.rds.amazonaws.com
$user = "admin";      // example: admin
$pass = "aayuaayu";      // RDS password
$db   = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB CONNECTION FAILED: " . $conn->connect_error);
}

$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

if ($name === '' || $email === '' || $phone === '' || $message === '') {
    die("ALL FIELDS ARE REQUIRED");
}

$stmt = $conn->prepare(
    "INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)"
);

if (!$stmt) {
    die("PREPARE FAILED: " . $conn->error);
}

$stmt->bind_param("ssss", $name, $email, $phone, $message);

if ($stmt->execute()) {
    echo "Message sent successfully!";
} else {
    echo "INSERT ERROR: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
