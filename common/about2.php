<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Vision</title>
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'company-blue': '#3b5998',
                        'company-blue-light': '#4267b2',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 p-4">
    <div class="max-w-6xl mx-auto bg-white rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <!-- Left Column - Image with curved edge -->
            <div class="md:w-1/2 relative">
                <div class="h-full">
                    <div class="absolute inset-0 bg-white" style="border-radius: 0 100% 100% 0 / 50%"></div>
                    <div class="relative h-full">
                        <img 
                        src="images/v1.jpg"
                            alt="Person with telescope on arrow above clouds" 
                            class="w-full h-full object-cover rounded-r-[40%]"
                        />
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Text Content -->
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <h3 class="text-company-blue text-lg font-medium mb-2">
                    Your Success
                </h3>
                
                <h2 class="text-company-blue text-3xl md:text-4xl font-bold mb-6">
                    Our Vision
                </h2>
                
                <p class="text-company-blue mb-8 leading-relaxed">
                    To set the global standard for incident management through our innovative and 
                    technology driven solutions To set the global standard for incident 
                    management through our innovative and technology driven solutions To set the 
                    global standard for incident management through our innovative and 
                    technology driven solutions
                </p>
                
                <div>
                    <button class="bg-company-blue hover:bg-company-blue-light text-white font-medium py-2 px-6 rounded-md transition duration-300">
                        Learn more
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php
    // PHP functionality can be added here
    // Example of how you might handle the "Learn more" button action:
    
    $learnMoreUrl = "vision-details.php"; // URL to navigate to when button is clicked
    
    // Example of how you might fetch content from a database:
    /*
    function getVisionContent() {
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
        $sql = "SELECT subtitle, title, description FROM vision_content WHERE id = 1";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return [
                "subtitle" => "Your Success",
                "title" => "Our Vision",
                "description" => "To set the global standard for incident management through our innovative and technology driven solutions..."
            ];
        }
        
        $conn->close();
    }
    
    $visionContent = getVisionContent();
    */
    ?>
</body>
</html>