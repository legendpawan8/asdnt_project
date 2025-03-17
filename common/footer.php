<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'footer-dark': '#0a192f',
                        'footer-text': '#e2e8f0',
                    }
                }
            }
        }
    </script>
</head>
<body>
    <footer class="bg-footer-dark text-footer-text relative">
        <!-- Background overlay with tech pattern -->
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: ../images/foot.jpg"></div>
        
        <!-- Footer content -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Services Column -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition duration-300">Software Development</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Geographical Information System</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Mobile App Development</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Web Application</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Software Testing</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Software Maintenance</a></li>
                    </ul>
                </div>
                
                <!-- Resources Column -->
                <div>
                    <!-- <h3 class="text-xl font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition duration-300">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Blog</a></li>
                    </ul> -->
                </div>
                
                <!-- About Column -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">About</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition duration-300">About US</a></li>
                    </ul>
                </div>
                
                <!-- Contact Us Column -->
                <div>
                    <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                    <div class="mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-red-600 rounded flex items-center justify-center mr-2">
                                <span class="text-white font-bold">O</span>
                            </div>
                            <span class="text-xl font-bold">Anamol Software development and technologies Pvt. Ltd.</span>
                        </div>
                    </div>
                    <p class="text-sm">
                         Golden Gate, Furniture line<br>
                        Damak-5, Jhapa, Koshi Pradesh<br>
                        Nepal

                    </p>
                    
                    <!-- Connect With Us -->
                    <div class="mt-8">
                        <h3 class="text-xl font-semibold mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/groups/1544236733141890" class="text-footer-text hover:text-white transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-footer-text hover:text-white transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/asdat_anamol_software/" class="text-footer-text hover:text-white transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-footer-text hover:text-white transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.youtube.com/@A.S.D.N.T" class="text-footer-text hover:text-white transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="mt-12 pt-8 border-t border-gray-700 text-center text-sm">
                <p>ASDNT . All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <?php
    // PHP functionality can be added here
    // Example of how you might fetch footer data from a database:
    /*
    function getFooterData() {
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
        
        // Fetch services
        $sql = "SELECT id, title, link FROM services ORDER BY id ASC";
        $result = $conn->query($sql);
        
        $services = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $services[] = $row;
            }
        }
        
        // Fetch company info
        $sql = "SELECT company_name, address, copyright FROM company_info WHERE id = 1";
        $result = $conn->query($sql);
        $companyInfo = $result->fetch_assoc();
        
        // Fetch social links
        $sql = "SELECT platform, url FROM social_links";
        $result = $conn->query($sql);
        
        $socialLinks = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $socialLinks[] = $row;
            }
        }
        
        $conn->close();
        
        return [
            'services' => $services,
            'companyInfo' => $companyInfo,
            'socialLinks' => $socialLinks
        ];
    }
    
    $footerData = getFooterData();
    
    // Then you could use the data to dynamically generate the footer content
    */
    ?>
</body>
</html>