<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'service-blue': '#3b82f6',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 p-4">
    <div class="max-w-6xl mx-auto py-12">
        <h2 class="text-service-blue text-2xl font-medium text-center mb-10">Our Services</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Service Card 1 -->
            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">Software Development</h3>
                <p class="text-gray-600 text-sm">
                    Designing and developing tailor-made software applications to meet specific business requirements.
                </p>
            </div>
            
            <!-- Service Card 2 -->
            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">Software Maintenance</h3>
                <p class="text-gray-600 text-sm">
                    Providing ongoing support, updates, and enhancements for existing software applications.
                </p>
            </div>
            
            <!-- Service Card 3 -->
            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">Mobile App Development</h3>
                <p class="text-gray-600 text-sm">
                    Building mobile applications for various platforms such as iOS and Android.
                </p>
            </div>
            
            <!-- Service Card 4 -->
            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">Web Application</h3>
                <p class="text-gray-600 text-sm">
                    Developing web based industrial applications using front-end and back-end technologies.
                </p>
            </div>
            
            <!-- Service Card 5 -->
            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">UI/UX Design</h3>
                <p class="text-gray-600 text-sm">
                    Focusing on user interface and user experience design to create intuitive and visually appealing software interfaces.
                </p>
            </div>
            
            <!-- Service Card 6 -->
            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">Software Testing</h3>
                <p class="text-gray-600 text-sm">
                    Ensuring the reliability, functionality, and performance of software through rigorous testing processes.
                </p>
            </div>
            
            <!-- Service Card 7 -->
            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">GIS</h3>
                <p class="text-gray-600 text-sm">
                    Integrating spatial information and geographic information for the analyzing, interpreting, and visualizing data in a geographic context.
                </p>
            </div>

            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
        d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m-6-6v6m12-6v6" />
</svg>

                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">Online IT Course</h3>
                <p class="text-gray-600 text-sm">
                    Integrating spatial information and geographic information for the analyzing, interpreting, and visualizing data in a geographic context.
                </p>
            </div>

            <div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center hover:shadow-md transition duration-300">
                <div class="text-service-blue mb-4">
                    
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
        d="M3 17h18M5 4h14a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2zm8 10h3m-6 0h.01M8 8h8m-8 4h8" />
</svg>

                </div>
                <h3 class="text-service-blue text-lg font-medium mb-3">e-Tech</h3>
                <p class="text-gray-600 text-sm">
                    Integrating spatial information and geographic information for the analyzing, interpreting, and visualizing data in a geographic context.
                </p>
            </div>
        </div>
    </div>

    <?php
    // PHP functionality can be added here
    // Example of how you might fetch services from a database:
    /*
    function getServices() {
        // Database connection
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "database";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Fetch data
        $sql = "SELECT id, title, description, icon FROM services ORDER BY id ASC";
        $result = $conn->query($sql);
        
        $services = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        
        $conn->close();
        return $services;
    }
    
    $services = getServices();
    
    // Then you could loop through the services to generate the cards dynamically:
    // foreach ($services as $service) {
    //     echo '<div class="border border-gray-200 rounded-lg p-6 flex flex-col items-center text-center">';
    //     echo '<div class="text-service-blue mb-4">' . $service['icon'] . '</div>';
    //     echo '<h3 class="text-service-blue text-lg font-medium mb-3">' . $service['title'] . '</h3>';
    //     echo '<p class="text-gray-600 text-sm">' . $service['description'] . '</p>';
    //     echo '</div>';
    // }
    */
    ?>
</body>
</html>