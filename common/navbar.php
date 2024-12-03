<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <a href="index.php" class="text-white hover:text-gray-300">YourLogo</a>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex space-x-6">
                <?php
                $menuItems = [
                    "About Us" => "about.php",
                    "Services" => "services.php",
                    "For Companies" => "companies.php",
                    "For Teachers" => "teachers.php",
                    "For Students" => "students.php",
                    "Careers" => "careers.php",
                    "Contact" => "contact.php"
                ];
                foreach ($menuItems as $name => $link) {
                    echo "<a href='$link' class='text-white hover:text-gray-300'>$name</a>";
                }
                ?>
            </nav>
        </div>
    </header>
</body>
</html>
