<?php
// Database connection parameters
$servername = "localhost";
$db_username = "root"; // 
$db_password = "";     // Replace with your MySQL password
$dbname = "bank_account"; // Replace with your database name

// Create a new MySQLi connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Function to create a new user
function createUser($conn, $username, $password) {
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $hashed_password);
  if ($stmt->execute()) {
    echo "User created successfully.<br>";
  } else {
    echo "Error: " . $stmt->error . "<br>";
  }
  $stmt->close();
}
