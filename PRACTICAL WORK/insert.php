<?php
// Database connection parameters
$servername = "localhost";
$db_username = "root"; 
$db_password = "";      
$dbname = "bank_account";  

//
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind the SQL statement
$sql = "INSERT INTO users (username, password) VALUES ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);

// Execute the statement and check for success
if ($stmt->execute()) {
  echo "Registration successful!";
} else {
  echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
