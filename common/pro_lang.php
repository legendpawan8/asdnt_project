<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Languages</title>
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-blue': '#3b5998',
                        'brand-light-blue': '#e6f0ff',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white p-4">
    <div class="max-w-6xl mx-auto py-8">
        <!-- Header Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Text Content -->
            <div class="md:col-span-2">
                <h4 class="text-brand-blue text-sm font-medium uppercase tracking-wider mb-2">TECHNOLOGIES</h4>
                <h2 class="text-brand-blue text-3xl font-bold mb-4">Programming Languages</h2>
                <p class="text-gray-600 leading-relaxed">
                    A programming language is a way for programmers (developers) to 
                    communicate with computers. Programming languages consist of a set of rules 
                    that allows string values to be converted into various ways of generating 
                    machine code, or, in the case of visual programming languages, graphical 
                    elements.
                </p>
            </div>
            
            <!-- Main Image -->
            <div class="relative">
                <div class="rounded-tr-[80px] rounded-bl-[80px] overflow-hidden h-full">
                    <img 
                    src="../images/pl.jpg"
                    alt="Programming concept with laptop" 
                        class="w-full h-full object-cover"
                    />
                </div>
            </div>
        </div>
        
        <!-- Programming Languages Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Dot Net -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="text-white text-6xl font-bold">
                        .NET
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Dot Net</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
            
            <!-- C# -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="bg-purple-600 rounded-lg p-4 w-32 h-32 flex items-center justify-center">
                        <span class="text-white text-5xl font-bold">C#</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">C#</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
            
            <!-- Java -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="w-32 h-32">
                        <svg viewBox="0 0 128 128" class="w-full h-full">
                            <path fill="#EA2D2E" d="M47.617 98.12s-4.767 2.774 3.397 3.71c9.892 1.13 14.947.968 25.845-1.092 0 0 2.871 1.795 6.873 3.351-24.439 10.47-55.308-.607-36.115-5.969zm-2.988-13.665s-5.348 3.959 2.823 4.805c10.567 1.091 18.91 1.18 33.354-1.6 0 0 1.993 2.025 5.132 3.131-29.542 8.64-62.446.68-41.309-6.336z"></path>
                            <path fill="#EA2D2E" d="M69.802 61.271c6.025 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.792 15.635-29.58 0 .001-42.731 10.67-22.324 34.187z"></path>
                            <path fill="#EA2D2E" d="M102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.094.171-4.451-1.938 3.899-4.625 6.526-5.192 2.739-.593 4.303-.485 4.303-.485-4.953-3.487-32.013 6.85-13.743 9.815 49.821 8.076 90.817-3.637 77.896-9.468zM49.912 70.294s-22.686 5.389-8.033 7.348c6.188.828 18.518.638 30.011-.326 9.39-.789 18.813-2.474 18.813-2.474s-3.308 1.419-5.704 3.053c-23.042 6.061-67.544 3.238-54.731-2.958 10.832-5.239 19.644-4.643 19.644-4.643zm40.697 22.747c23.421-12.167 12.591-23.86 5.032-22.285-1.848.385-2.677.72-2.677.72s.688-1.079 2-1.543c14.953-5.255 26.451 15.503-4.823 23.725 0-.002.359-.327.468-.617z"></path>
                            <path fill="#EA2D2E" d="M76.491 1.587S89.459 14.563 64.188 34.51c-20.266 16.006-4.621 25.13-.007 35.559-11.831-10.673-20.509-20.07-14.688-28.815C58.041 28.42 81.722 22.195 76.491 1.587z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Java</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
            
            <!-- Python -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="w-32 h-32">
                        <svg viewBox="0 0 128 128" class="w-full h-full">
                            <linearGradient id="python-original-a" gradientUnits="userSpaceOnUse" x1="70.252" y1="1237.476" x2="170.659" y2="1151.089" gradientTransform="matrix(.563 0 0 -.568 -29.215 707.817)">
                                <stop offset="0" stop-color="#5A9FD4"></stop>
                                <stop offset="1" stop-color="#306998"></stop>
                            </linearGradient>
                            <linearGradient id="python-original-b" gradientUnits="userSpaceOnUse" x1="209.474" y1="1098.811" x2="173.62" y2="1149.537" gradientTransform="matrix(.563 0 0 -.568 -29.215 707.817)">
                                <stop offset="0" stop-color="#FFD43B"></stop>
                                <stop offset="1" stop-color="#FFE873"></stop>
                            </linearGradient>
                            <path fill="url(#python-original-a)" d="M63.391 1.988c-4.222.02-8.252.379-11.8 1.007-10.45 1.846-12.346 5.71-12.346 12.837v9.411h24.693v3.137H29.977c-7.176 0-13.46 4.313-15.426 12.521-2.268 9.405-2.368 15.275 0 25.096 1.755 7.311 5.947 12.519 13.124 12.519h8.491V67.234c0-8.151 7.051-15.34 15.426-15.34h24.665c6.866 0 12.346-5.654 12.346-12.548V15.833c0-6.693-5.646-11.72-12.346-12.837-4.244-.706-8.645-1.027-12.866-1.008zM50.037 9.557c2.55 0 4.634 2.117 4.634 4.721 0 2.593-2.083 4.69-4.634 4.69-2.56 0-4.633-2.097-4.633-4.69-.001-2.604 2.073-4.721 4.633-4.721z" transform="translate(0 10.26)"></path>
                            <path fill="url(#python-original-b)" d="M91.682 28.38v10.966c0 8.5-7.208 15.655-15.426 15.655H51.591c-6.756 0-12.346 5.783-12.346 12.549v23.515c0 6.691 5.818 10.628 12.346 12.547 7.816 2.297 15.312 2.713 24.665 0 6.216-1.801 12.346-5.423 12.346-12.547v-9.412H63.938v-3.138h37.012c7.176 0 9.852-5.005 12.348-12.519 2.578-7.735 2.467-15.174 0-25.096-1.774-7.145-5.161-12.521-12.348-12.521h-9.268zM77.809 87.927c2.561 0 4.634 2.097 4.634 4.692 0 2.602-2.074 4.719-4.634 4.719-2.55 0-4.633-2.117-4.633-4.719 0-2.595 2.083-4.692 4.633-4.692z" transform="translate(0 10.26)"></path>
                            <radialGradient id="python-original-c" cx="1825.678" cy="444.45" r="26.743" gradientTransform="matrix(0 -.24 -1.055 0 532.979 557.576)" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#B8B8B8" stop-opacity=".498"></stop>
                                <stop offset="1" stop-color="#7F7F7F" stop-opacity="0"></stop>
                            </radialGradient>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Python</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
            
            <!-- C++ -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="w-32 h-32">
                        <svg viewBox="0 0 128 128" class="w-full h-full">
                            <path fill="#00599C" d="M117.5 33.5l.3-.2c-.6-1.1-1.5-2.1-2.4-2.6L67.1 2.9c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-3.4 3.5-3.4 5.6v55.7c0 2.1 1.7 4.6 3.4 5.6l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 3.4-3.5 3.4-5.6V36.1c.1-.8-.2-1.7-.5-2.6zM64 88.5c13.5 0 24.5-11 24.5-24.5S77.5 39.5 64 39.5c-13.5 0-24.5 11-24.5 24.5s11 24.5 24.5 24.5zm0-43.5c10.5 0 19 8.5 19 19s-8.5 19-19 19-19-8.5-19-19 8.5-19 19-19z"></path>
                            <path fill="#00599C" d="M91.8 44.2l10.9 6.3c.8-.5 1.6-1.1 2.4-1.6l-10.9-6.3c-.8.5-1.6 1-2.4 1.6zM93.3 36.5l10.9 6.3c.8-.5 1.6-1.1 2.4-1.6l-10.9-6.3c-.8.5-1.6 1-2.4 1.6z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">C++</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
            
            <!-- JavaScript -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="w-32 h-32 bg-yellow-400 flex items-center justify-center">
                        <span class="text-black text-5xl font-bold">JS</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">JavaScript</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
            
            <!-- Ruby -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="w-32 h-32">
                        <svg viewBox="0 0 128 128" class="w-full h-full">
                            <path fill="#CC342D" d="M20.53 55.687c-3.4 6.466-6.8 12.932-10.172 19.426 7.537 4.713 15.088 9.435 22.665 14.126-4.16-11.197-8.32-22.393-12.493-33.552zM23.833 51.998c4.236 11.167 8.47 22.333 12.726 33.488 9.554-5.86 19.16-11.642 28.768-17.435-13.87-5.32-27.837-10.543-41.494-16.053zM109.622 55.687c-4.148 11.185-8.296 22.37-12.444 33.552 7.537-4.713 15.088-9.435 22.665-14.126-3.4-6.466-6.8-12.932-10.22-19.426zM105.628 51.998c-13.87 5.32-27.837 10.543-41.494 16.053 9.554 5.86 19.16 11.642 28.768 17.435 4.236-11.167 8.47-22.333 12.726-33.488zM65.27 39.026c-9.45 0-18.9 0-28.35.047 3.4 6.466 6.8 12.932 10.22 19.426 6.02-6.537 12.066-13.05 18.13-19.473zM65.27 35.013c-6.14 6.63-12.28 13.26-18.396 19.92 6.75 2.6 13.5 5.2 20.25 7.8 6.75-2.6 13.5-5.2 20.25-7.8-6.14-6.63-12.28-13.26-18.396-19.92h-3.708zM65.27 39.026c6.02 6.537 12.066 13.05 18.13 19.473 3.4-6.466 6.8-12.932 10.22-19.426-9.45-.047-18.9-.047-28.35-.047zM65.27 0c-3.4 6.466-6.8 12.932-10.172 19.426 6.75 2.6 13.5 5.2 20.25 7.8 6.75-2.6 13.5-5.2 20.25-7.8-3.4-6.466-6.8-12.932-10.172-19.426H65.27zM69.073 31.033c6.14-6.63 12.28-13.26 18.396-19.92-9.554-5.86-19.16-11.642-28.768-17.435-9.554 5.86-19.16 11.642-28.768 17.435 6.14 6.63 12.28 13.26 18.396 19.92h20.744zM61.562 31.033c-6.14-6.63-12.28-13.26-18.396-19.92-4.236 11.167-8.47 22.333-12.726 33.488 13.87-5.32 27.837-10.543 41.494-16.053-3.458.73-6.916 1.412-10.372 2.485zM69.073 31.033c13.87 5.32 27.837 10.543 41.494 16.053-4.236-11.167-8.47-22.333-12.726-33.488-6.14 6.63-12.28 13.26-18.396 19.92-3.458-.73-6.916-1.412-10.372-2.485zM65.27 128c3.4-6.466 6.8-12.932 10.172-19.426-6.75-2.6-13.5-5.2-20.25-7.8-6.75 2.6-13.5 5.2-20.25 7.8 3.4 6.466 6.8 12.932 10.172 19.426H65.27zM61.562 96.967c-6.14 6.63-12.28 13.26-18.396 19.92 9.554 5.86 19.16 11.642 28.768 17.435 9.554-5.86 19.16-11.642 28.768-17.435-6.14-6.63-12.28-13.26-18.396-19.92H61.562zM69.073 96.967c6.14 6.63 12.28 13.26 18.396 19.92 4.236-11.167 8.47-22.333 12.726-33.488-13.87 5.32-27.837 10.543-41.494 16.053 3.458-.73 6.916-1.412 10.372-2.485zM61.562 96.967c-13.87-5.32-27.837-10.543-41.494-16.053 4.236 11.167 8.47 22.333 12.726 33.488 6.14-6.63 12.28-13.26 18.396-19.92 3.458.73 6.916 1.412 10.372 2.485z"></path>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">Ruby</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
            
            <!-- R -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">
                <div class="h-48 bg-blue-900 flex items-center justify-center p-4">
                    <div class="w-32 h-32 bg-gray-200 rounded-full flex items-center justify-center">
                        <span class="text-blue-600 text-6xl font-bold">R</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-gray-800 font-medium mb-2">R</h3>
                    <a href="#" class="text-brand-blue text-sm hover:underline">Enroll now!</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    // PHP functionality can be added here
    // Example of how you might fetch programming languages from a database:
    /*
    function getProgrammingLanguages() {
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
        $sql = "SELECT id, name, description, icon_svg, learn_more_url FROM programming_languages ORDER BY id ASC";
        $result = $conn->query($sql);
        
        $languages = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $languages[] = $row;
            }
        }
        
        $conn->close();
        return $languages;
    }
    
    $languages = getProgrammingLanguages();
    
    // Then you could loop through the languages to generate the cards dynamically:
    // foreach ($languages as $lang) {
    //     echo '<div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100">';
    //     echo '<div class="h-48 bg-blue-900 flex items-center justify-center p-4">';
    //     echo '<div class="w-32 h-32">' . $lang['icon_svg'] . '</div>';
    //     echo '</div>';
    //     echo '<div class="p-4">';
    //     echo '<h3 class="text-gray-800 font-medium mb-2">' . $lang['name'] . '</h3>';
    //     echo '<a href="' . $lang['learn_more_url'] . '" class="text-brand-blue text-sm hover:underline">Enroll now!</a>';
    //     echo '</div>';
    //     echo '</div>';
    // }
    */
    ?>
</body>
</html>