<?php
session_start();

$servername = "localhost";  // Database server
$username = "root";  // Update with your database username
$password = "";  // Update with your database password
$dbname = "asdnt";  // Database name

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate input fields
    if (empty($email) || empty($password)) {
        $_SESSION['message'] = "Both email and password are required!";
    } else {
        // Check if email exists in the database
        $checkEmail = $conn->prepare("SELECT sn, name, email, password, role FROM users WHERE email = ?");
        if ($checkEmail === false) {
            $_SESSION['message'] = "Error preparing query: " . $conn->error;
        } else {
            $checkEmail->bind_param("s", $email);
            $checkEmail->execute();
            $result = $checkEmail->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Store user information in session
                    $_SESSION['user_id'] = $user['sn'];
                    $_SESSION['user_name'] = $user['name'];
                    $_SESSION['user_email'] = $user['email'];
                    $_SESSION['user_role'] = $user['role'];

                    // Redirect based on the role
                    switch ($user['role']) {
                        case 'new_registered':
                            header("Location: newregister/index.php");
                            exit();
                        case 'admin':
                            header("Location: company/index.php");
                            exit();
                        case 'teacher':
                            header("Location: teacher/index.php");
                            exit();
                        case 'student':
                            header("Location: student/index.php");
                            exit();
                        case 'developer':
                            header("Location: developer/index.php");
                            exit();
                        default:
                            $_SESSION['message'] = "Role not recognized!";
                            break;
                    }
                } else {
                    $_SESSION['message'] = "Invalid password.";
                }
            } else {
                $_SESSION['message'] = "No account found with that email.";
            }
            $checkEmail->close();
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<?php include 'common/navbar.php'; ?>

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="container mx-auto flex flex-col lg:flex-row bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-2/3">
        <div class="hidden lg:block lg:w-1/2">
            <img src="./images/3.png" alt="Login Image" class="w-full h-full object-cover rounded-l-lg">
        </div>
        <div class="w-full lg:w-1/2 p-8">
            <?php if (isset($_SESSION['message'])): ?>
                <div class="mb-4 p-3 text-center text-white bg-green-500 rounded-md">
                    <?= htmlspecialchars($_SESSION['message']); ?>
                </div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>

            <!-- Login Form -->
            <form id="loginForm" method="POST" action="" class="space-y-6">
                <h2 class="text-2xl font-bold text-center">Login</h2>
                <div>
                    <label for="login_email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="login_email" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div>
                    <label for="login_password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="login_password" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <input type="hidden" name="login" value="1">
                <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Login</button>
                <div class="text-center text-sm text-gray-600 mt-4">
                    <span>Don't have an account?</span>
                    <button type="button" id="showSignup" class="text-blue-500 hover:underline">Create one</button>
                </div>
            </form>

            <!-- Sign Up Form -->
            <form id="signupForm" method="POST" action="" class="space-y-6 hidden">
                <h2 class="text-2xl font-bold text-center">Sign Up</h2>
                <div>
                    <label for="signup_name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="signup_name" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div>
                    <label for="signup_email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="signup_email" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div>
                    <label for="signup_password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="signup_password" class="w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <input type="hidden" name="signup" value="1">
                <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Sign Up</button>
                <div class="text-center text-sm text-gray-600 mt-4">
                    <span>Already have an account?</span>
                    <button type="button" id="showLogin" class="text-blue-500 hover:underline">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('showSignup').onclick = function () {
        document.getElementById('signupForm').classList.remove('hidden');
        document.getElementById('loginForm').classList.add('hidden');
    }

    document.getElementById('showLogin').onclick = function () {
        document.getElementById('loginForm').classList.remove('hidden');
        document.getElementById('signupForm').classList.add('hidden');
    }
</script>

</body>
</html>
