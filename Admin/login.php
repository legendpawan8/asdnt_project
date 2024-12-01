<?php
// Start the session to keep track of the user's login status
session_start();

// Database connection details
$servername = "localhost";
$username = "root";  // default MySQL username
$password = "";      // default MySQL password (empty for XAMPP)
$dbname = "kalu";    // database name

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to fetch the admin from the database
    $sql = "SELECT * FROM admins WHERE username = ? AND password = MD5(?)";  // MD5 hashing for comparison
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching admin is found
    if ($result->num_rows > 0) {
        // Successful login
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        $errorMessage = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-80">
        <h2 class="text-2xl font-semibold text-center mb-6">Admin Login</h2>
        <form method="POST" action="login.php">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username:</label>
                <input type="text" id="username" name="username" class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-600">Password:</label>
                <input type="password" id="password" name="password" class="w-full p-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Login</button>

            <?php if (isset($errorMessage)): ?>
                <p class="text-red-500 text-sm text-center mt-3"><?php echo $errorMessage; ?></p>
            <?php endif; ?>
        </form>
    </div>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
