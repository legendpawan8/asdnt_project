<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "";
$password = "";
$dbname = "kalu";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Fetch dashboard data
function getFeeCollection($conn) {
    $stmt = $conn->prepare("SELECT 
        SUM(CASE WHEN payment_status = 'paid' THEN amount ELSE 0 END) as collected,
        SUM(CASE WHEN payment_status = 'pending' THEN amount ELSE 0 END) as outstanding
        FROM fees_collection 
        WHERE DATE(created_at) = CURDATE()");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAttendanceStatus($conn) {
    $stmt = $conn->prepare("SELECT 
        SUM(CASE WHEN status = 'present' THEN 1 ELSE 0 END) as present,
        SUM(CASE WHEN status = 'absent' THEN 1 ELSE 0 END) as absent,
        SUM(CASE WHEN status = 'leave' THEN 1 ELSE 0 END) as onleave
        FROM attendance 
        WHERE DATE(date) = CURDATE()");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getHighestContributors($conn) {
    $stmt = $conn->prepare("SELECT users.name, users.role, users.image, 
        SUM(contributions.amount) as total_contribution 
        FROM users 
        JOIN contributions ON users.id = contributions.user_id 
        GROUP BY users.id 
        ORDER BY total_contribution DESC 
        LIMIT 5");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAbsentEmployees($conn) {
    $stmt = $conn->prepare("SELECT users.name, users.role, users.image 
        FROM users 
        JOIN attendance ON users.id = attendance.user_id 
        WHERE attendance.status = 'absent' 
        AND DATE(attendance.date) = CURDATE() 
        AND users.type = 'employee'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Get dashboard data
$feeCollection = getFeeCollection($conn);
$attendanceStatus = getAttendanceStatus($conn);
$highestContributors = getHighestContributors($conn);
$absentEmployees = getAbsentEmployees($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white border-r border-gray-200">
            <div class="p-4 border-b border-gray-200">
                <h1 class="text-xl font-bold">School Management</h1>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-violet-600 bg-violet-50 rounded-md">
                            <span class="mr-3">📊</span>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-md">
                            <span class="mr-3">📚</span>
                            Academics
                        </a>
                    </li>
                    <!-- Add other menu items -->
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white border-b border-gray-200 p-4 flex items-center justify-between">
                <div class="relative w-64">
                    <input type="text" placeholder="Search Modules" 
                           class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300">
                </div>
                <div class="flex items-center space-x-4">
                    <button class="relative p-2">
                        <span class="text-xl">🔔</span>
                    </button>
                    <div class="flex items-center space-x-2">
                        <img src="<?php echo htmlspecialchars($_SESSION['user_image'] ?? 'default.png'); ?>" 
                             alt="Admin" class="w-10 h-10 rounded-full">
                        <div>
                            <p class="text-xs text-gray-500">Select Admin</p>
                            <p class="text-sm font-medium"><?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Admin'); ?></p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4">
                <div class="grid grid-cols-12 gap-4">
                    <!-- Today's Fees Collection -->
                    <div class="col-span-12 md:col-span-8">
                        <div class="bg-violet-600 rounded-lg p-4 text-white">
                            <h2 class="text-lg font-medium mb-4">Today's Fees Collection:</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm opacity-80">Total Fees Collected</p>
                                    <p class="text-2xl font-bold">
                                        ₹<?php echo number_format($feeCollection['collected'] ?? 0); ?>
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm opacity-80">Total Fees Outstanding</p>
                                    <p class="text-2xl font-bold">
                                        ₹<?php echo number_format($feeCollection['outstanding'] ?? 0); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="col-span-12 md:col-span-4">
                        <div class="bg-white rounded-lg p-4">
                            <h2 class="text-lg font-medium mb-4">Status</h2>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="bg-gray-100 p-3 rounded-lg text-center">
                                    <p class="text-xl font-bold text-green-500">
                                        <?php echo $attendanceStatus['present'] ?? 0; ?>
                                    </p>
                                    <p class="text-xs text-gray-500">Present</p>
                                </div>
                                <div class="bg-orange-50 p-3 rounded-lg text-center">
                                    <p class="text-xl font-bold text-orange-500">
                                        <?php echo $attendanceStatus['absent'] ?? 0; ?>
                                    </p>
                                    <p class="text-xs text-gray-500">Absent</p>
                                </div>
                                <div class="bg-red-50 p-3 rounded-lg text-center">
                                    <p class="text-xl font-bold text-red-500">
                                        <?php echo $attendanceStatus['onleave'] ?? 0; ?>
                                    </p>
                                    <p class="text-xs text-gray-500">Leave</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Highest Contributors -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <div class="bg-white rounded-lg p-4">
                            <h2 class="text-lg font-medium mb-4">Highest Contribution</h2>
                            <div class="space-y-3">
                                <?php foreach ($highestContributors as $contributor): ?>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="<?php echo htmlspecialchars($contributor['image']); ?>" 
                                             alt="<?php echo htmlspecialchars($contributor['name']); ?>"
                                             class="w-10 h-10 rounded-full mr-3">
                                        <div>
                                            <p class="text-sm font-medium">
                                                <?php echo htmlspecialchars($contributor['name']); ?>
                                            </p>
                                            <p class="text-xs text-gray-500">
                                                <?php echo htmlspecialchars($contributor['role']); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <span class="text-xs font-medium bg-green-100 text-green-800 py-1 px-2 rounded">
                                        ₹<?php echo number_format($contributor['total_contribution']); ?>
                                    </span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="w-full mt-4 bg-violet-600 text-white py-2 rounded-md text-sm font-medium">
                                View Details
                            </button>
                        </div>
                    </div>

                    <!-- Add other sections similarly -->

                </div>
            </main>
        </div>
    </div>

    <script>
        // Add any JavaScript functionality here
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize notifications
            const notificationButton = document.querySelector('.notifications-button');
            if (notificationButton) {
                notificationButton.addEventListener('click', function() {
                    // Handle notifications
                });
            }
        });
    </script>
</body>
</html>