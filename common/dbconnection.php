<?php
// Database connection details
$servername = "localhost";
$username = "root";  // default username for XAMPP or MySQL
$password = "";      // default password for XAMPP or MySQL (empty in most cases)
$dbname = "kalu";    // replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// You can echo a message if needed to confirm the connection
// echo "Connected successfully";

// Close the connection after each page request or when no longer needed
// $conn->close();
?>
