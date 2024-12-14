<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page</title>
    <!-- Link to Google Fonts for a techno-style font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-black shadow-lg text-white">
    <div class="container mx-auto flex items-center justify-between py-5 px-2">
        <!-- Logo (Image + Text) -->
        <div class="relative">
            <a href="index.php" class="flex items-center">
                <!-- Logo -->
                <img src="../images/l4.png" alt="YourLogo" class="h-10 w-100">
                <!-- Text after the logo -->
                <span class="ml-3 text-2xl font-bold text-white" style="font-family: 'Orbitron', sans-serif;">ASDNT</span>

            </a>
        </div>


       <!-- Navigation Menu -->
       <nav class="flex space-x-6 text-gray-800 font-orbiton">
    <?php
    $menuItems = [
        "Home" => "index.php",
        "Services" => "#", // Use "#" for the main Services item which will show the dropdown
        "About us" => "aboutus.php",       
        "Careers" => "careers.php",
        "Contact" => "contact.php"
    ];

    foreach ($menuItems as $name => $link) {
        if ($name == "Services") {
            // For the "Services" menu, create a dropdown with an icon that rotates on hover
            echo "
            <div class='relative group'>
                <a href='#' class='flex items-center text-gray-400 text-xl hover:text-gray-200 font-bold' style='font-family: \"Orbitron\", sans-serif;'>$name
                    <svg xmlns='http://www.w3.org/2000/svg' class='ml-2 w-4 h-4 transform transition-transform duration-300 group-hover:rotate-180' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                        <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7' />
                    </svg>
                </a>
                <div class='dropdown-content absolute hidden group-hover:block bg-gray-800 text-white py-2 px-4 rounded-lg shadow-lg z-50'>
                    <a href='service1.php' class='block py-2 px-4 glow-effect whitespace-nowrap' style='font-family: \"Orbitron\", sans-serif;'>Creative  Design</a>
                    <a href='web-development.php' class='block py-2 px-4 glow-effect whitespace-nowrap' style='font-family: \"Orbitron\", sans-serif;'>Web  Development</a>
                    <a href='seo.php' class='block py-2 px-4 glow-effect whitespace-nowrap' style='font-family: \"Orbitron\", sans-serif;'>SEO</a>
                    <a href='e-commerce.php' class='block py-2 px-4 glow-effect whitespace-nowrap' style='font-family: \"Orbitron\", sans-serif;'>E-Commerce</a>
                    <a href='digital-marketing.php' class='block py-2 px-4 glow-effect whitespace-nowrap' style='font-family: \"Orbitron\", sans-serif;'>Digital Marketing</a>
                    <a href='app-development.php' class='block py-2 px-4 glow-effect whitespace-nowrap' style='font-family: \"Orbitron\", sans-serif;'>App Development</a>
                    <a href='online-courses.php' class='block py-2 px-4 glow-effect whitespace-nowrap' style='font-family: \"Orbitron\", sans-serif;'>Online Courses</a>
                </div>
            </div>
            ";
        } else {
            // For other menu items, regular links with glow effect
            echo "<a href='$link' class='text-gray-400 text-xl glow-effect font-bold' style='font-family: \"Orbitron\", sans-serif;'>$name</a>";
        }
    }
    ?>
</nav>

<!-- Custom CSS for glowing effect -->
<style>
    /* Glow effect on hover */
    .glow-effect:hover {
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.8), 0 0 30px rgba(255, 255, 255, 0.8);
        color: white; /* Optional: Change text color to white */
    }

    /* Ensure the dropdown content has proper positioning */
    .dropdown-content {
        display: none; /* Hide by default */
    }

    /* Show dropdown on hover */
    .group:hover .dropdown-content {
        display: block;
    }
</style>








    </div>
</header>
