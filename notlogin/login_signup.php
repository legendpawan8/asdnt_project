<?php
session_start();
// Include necessary files (e.g., database connection if needed)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .role-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100px; /* Fixed width */
            height: 100px; /* Fixed height */
            padding: 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .role-button:hover {
            transform: scale(1.05);
            border-color: #3b82f6;
        }

        .role-button.active {
            border-color: #3b82f6;
            background-color: #ebf8ff;
            box-shadow: 0 4px 6px rgba(59, 130, 246, 0.1);
        }

        .role-button span {
            color: #374151;
            font-weight: bold;
            margin-top: 4px;
        }

        .role-button.active span {
            color: #2563eb;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Main Container with Image and Form -->
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="container mx-auto flex bg-white rounded-lg shadow-lg w-4/5 lg:w-2/3">

            <!-- Left side: Image -->
            <div class="w-1/2 hidden lg:block">
                <img src="../images/2.jpg" alt="Login Image" class="w-full h-full object-cover rounded-l-lg">
            </div>

            <!-- Right side: Form (Login / Sign Up) -->
            <div class="w-full lg:w-1/2 p-8">
                <!-- Login Form -->
                <form id="loginForm" method="POST" action="login.php" class="space-y-6">
                    <h2 class="text-2xl font-bold text-center">Login</h2>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-gray-700 mb-2">Select Role</label>
                        <div class="flex justify-around space-x-2">
                            <div id="companyRole" class="role-button">
                                <i class="fas fa-building text-2xl"></i>
                                <span class="text-sm mt-2">Company</span>
                            </div>
                            <div id="adminRole" class="role-button">
                                <i class="fas fa-user-shield text-2xl"></i>
                                <span class="text-sm mt-2">Admin</span>
                            </div>
                            <div id="developerRole" class="role-button">
                                <i class="fas fa-laptop-code text-2xl"></i>
                                <span class="text-sm mt-2">Developer</span>
                            </div>
                        </div>
                        <input type="hidden" name="role" id="selectedRole" required>
                    </div>
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md">Login</button>

                    <!-- Bottom Text Links -->
                    <div class="mt-4 text-center text-sm text-gray-600">
                        <span>Don't have an account?</span>
                        <button type="button" id="signupTabFromLogin" class="text-blue-500 hover:underline">Create one</button>
                    </div>
                </form>

                <!-- Sign Up Form -->
                <form id="signupForm" method="POST" action="signup.php" class="space-y-6 hidden">
                    <h2 class="text-2xl font-bold text-center">Sign Up</h2>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-gray-700 mb-2">Select Role</label>
                        <div class="flex justify-around space-x-2">
                            <div id="companyRoleSignup" class="role-button">
                                <i class="fas fa-building text-2xl"></i>
                                <span class="text-sm mt-2">Company</span>
                            </div>
                            <div id="adminRoleSignup" class="role-button">
                                <i class="fas fa-user-shield text-2xl"></i>
                                <span class="text-sm mt-2">Admin</span>
                            </div>
                            <div id="developerRoleSignup" class="role-button">
                                <i class="fas fa-laptop-code text-2xl"></i>
                                <span class="text-sm mt-2">Developer</span>
                            </div>
                        </div>
                        <input type="hidden" name="role" id="selectedRoleSignup" required>
                    </div>
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md">Sign Up</button>

                    <!-- Bottom Text Links -->
                    <div class="mt-4 text-center text-sm text-gray-600">
                        <span>Already have an account?</span>
                        <button type="button" id="loginTabFromSignup" class="text-blue-500 hover:underline">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Handle Role Selection
        const roleButtons = document.querySelectorAll('.role-button');
        roleButtons.forEach(button => {
            button.addEventListener('click', function () {
                roleButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                const input = this.closest('form').querySelector('input[name="role"]');
                input.value = this.querySelector('span').innerText.toLowerCase();
            });
        });

        // Handle Form Switching
        document.getElementById('signupTabFromLogin').onclick = function () {
            document.getElementById('signupForm').classList.remove('hidden');
            document.getElementById('loginForm').classList.add('hidden');
        }

        document.getElementById('loginTabFromSignup').onclick = function () {
            document.getElementById('loginForm').classList.remove('hidden');
            document.getElementById('signupForm').classList.add('hidden');
        }
    </script>

</body>
</html>
