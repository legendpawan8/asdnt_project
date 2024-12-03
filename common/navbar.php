<header class="bg-gray-800 text-white">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo (Image + Text) -->
        <div class="relative">
    <a href="index.php" class="flex items-center">
        <!-- Logo -->
        <img src="../images/logo.png" alt="YourLogo" class="h-20 w-20 rounded-full border-4 border-white shadow-lg">

        <!-- Text -->
        <span class="ml-4 text-3xl font-extrabold text-white font-serif">ASDNT</span>
    </a>
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
