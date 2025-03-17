<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technologies</title>
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tech-blue': '#3b5998',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 p-4">
    <div class="max-w-6xl mx-auto py-12">
        <h2 class="text-tech-blue text-2xl font-medium text-center mb-10">Technologies</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Technology Card 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                <div class="h-48 overflow-hidden">
                    <img 
                    src="images/pl.jpg"
                    alt="Programming Languages" 
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Programming Languages</h3>
                    <a href="common/pro_lang.php" class="text-tech-blue text-sm hover:underline">Learn more</a>
                </div>
            </div>
            
            <!-- Technology Card 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                <div class="h-48 overflow-hidden">
                    <img 
                    src="images/df.png"
                    alt="Development Frameworks" 
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Development Frameworks</h3>
                    <a href="#" class="text-tech-blue text-sm hover:underline">Learn more</a>
                </div>
            </div>
            
            <!-- Technology Card 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                <div class="h-48 overflow-hidden">
                    <img 
                    src="images/md.png"
                    alt="Mobile Development" 
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Mobile Development</h3>
                    <a href="#" class="text-tech-blue text-sm hover:underline">Learn more</a>
                </div>
            </div>
            
            <!-- Technology Card 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                <div class="h-48 overflow-hidden">
                    <img 
                    src="images/am.png"
                    alt="Agile Methodologies" 
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Agile Methodologies</h3>
                    <a href="#" class="text-tech-blue text-sm hover:underline">Learn more</a>
                </div>
            </div>
            
            <!-- Technology Card 5 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                <div class="h-48 overflow-hidden">
                    <img 
                    src="images/dv.png"
                    alt="Visualizations" 
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Visualizations</h3>
                    <a href="#" class="text-tech-blue text-sm hover:underline">Learn more</a>
                </div>
            </div>
            
            <!-- Technology Card 6 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                <div class="h-48 overflow-hidden">
                    <img 
                    src="images/gis.jpg"
                    alt="Geographical Information System" 
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Geographical Information System</h3>
                    <a href="#" class="text-tech-blue text-sm hover:underline">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    // PHP functionality can be added here
    // Example of how you might fetch technologies from a database:
    /*
    function getTechnologies() {
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
        $sql = "SELECT id, title, image_url, link_url FROM technologies ORDER BY id ASC";
        $result = $conn->query($sql);
        
        $technologies = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $technologies[] = $row;
            }
        }
        
        $conn->close();
        return $technologies;
    }
    
    $technologies = getTechnologies();
    
    // Then you could loop through the technologies to generate the cards dynamically:
    // foreach ($technologies as $tech) {
    //     echo '<div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">';
    //     echo '<div class="h-48 overflow-hidden">';
    //     echo '<img src="' . $tech['image_url'] . '" alt="' . $tech['title'] . '" class="w-full h-full object-cover" />';
    //     echo '</div>';
    //     echo '<div class="p-4">';
    //     echo '<h3 class="text-gray-800 font-medium mb-2">' . $tech['title'] . '</h3>';
    //     echo '<a href="' . $tech['link_url'] . '" class="text-tech-blue text-sm hover:underline">Learn more</a>';
    //     echo '</div>';
    //     echo '</div>';
    // }
    */
    ?>
</body>
</html>