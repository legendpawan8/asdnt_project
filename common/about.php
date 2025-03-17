<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Company</title>
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'company-blue': '#3b82f6',
                        'company-dark-blue': '#1d4ed8',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 p-4">
    <div class="max-w-6xl mx-auto p-6 bg-white border border-blue-100 rounded-lg">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <!-- Left Column - Text Content -->
            <div class="space-y-4">
                <h2 class="text-company-blue text-xl font-medium uppercase tracking-wide">
                    ABOUT OUR COMPANY
                </h2>
                
                <h3 class="text-company-dark-blue text-2xl md:text-3xl font-medium leading-tight">
                    We are committed to providing our customers with exceptional.
                </h3>
                
                <p class="text-gray-600 text-sm leading-relaxed">
                    A team of passionate professionals with more than 50 years of 
                    industry experience got together with a visionary leadership to form 
                    professional vision technologies. We have partnered with some of 
                    the most acclaimed manufacturers and providers in the field to bring 
                    a world class service to the local market.
                </p>
                
                <div>
                    <button class="bg-company-blue hover:bg-company-dark-blue text-white font-medium py-2 px-6 rounded-md transition duration-300">
                        Know more
                    </button>
                </div>
            </div>
            
            <!-- Right Column - Images -->
            <div class="relative h-[400px] md:h-[500px]">
                <!-- Top right image with rounded corners -->
                <div class="absolute right-0 top-0 w-[70%] h-[55%] rounded-3xl overflow-hidden border-4 border-white shadow-lg">
                    <img 
                        src="images/t1.jpg"
                        alt="Team collaboration meeting" 
                        class="w-full h-full object-cover"
                    />
                </div>
                
                <!-- Bottom left image with rounded corners -->
                <div class="absolute left-0 bottom-10 w-[65%] h-[45%] rounded-3xl overflow-hidden border-4 border-white shadow-lg">
                    <img 
                    src="images/t2.jpg"
                    alt="Business professionals" 
                        class="w-full h-full object-cover object-top"
                    />
                </div>
                
                <!-- Bottom right circular image -->
                <div class="absolute right-5 bottom-0 w-[40%] aspect-square rounded-full overflow-hidden border-4 border-white shadow-lg">
                    <img 
                    src="images/t3.jpg"
                    alt="Team working together" 
                        class="w-full h-full object-cover"
                    />
                </div>
            </div>
        </div>
    </div>

    <?php
    // PHP functionality can be added here
    // Example of how you might handle the "Know more" button action:
    
    $knowMoreUrl = "about-details.php"; // URL to navigate to when button is clicked
    
    // Example of how you might fetch content from a database:
    /*
    function getCompanyInfo() {
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
        $sql = "SELECT heading, subheading, description FROM company_info WHERE id = 1";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return [
                "heading" => "ABOUT OUR COMPANY",
                "subheading" => "We are committed to providing our customers with exceptional.",
                "description" => "A team of passionate professionals with more than 50 years of industry experience..."
            ];
        }
        
        $conn->close();
    }
    
    $companyInfo = getCompanyInfo();
    */
    ?>
</body>
</html>