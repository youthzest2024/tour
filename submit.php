<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "cont";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO contacts (name, phone, email, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $message);

// Set parameters and execute
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
