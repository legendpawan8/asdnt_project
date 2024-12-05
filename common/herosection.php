    <!-- Hero Section -->
    <header class="relative bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 text-white min-h-screen flex items-center">
        <div class="container mx-auto px-6 lg:px-20 flex flex-col md:flex-row items-center justify-center">
            <!-- Hero Content -->
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Empowering Businesses with <span class="text-yellow-400">Innovative Software</span>
                </h1>
                <p class="mt-6 text-lg text-gray-200">
                    We specialize in cutting-edge solutions for web, mobile, and cloud platforms. Let's build the future together.
                </p>
                <div class="mt-8">
                    <a href="services.php" class="bg-gradient-to-r from-yellow-400 to-orange-500 text-gray-900 px-6 py-3 rounded-full font-semibold hover:from-yellow-300 hover:to-orange-400 transition">
                        Explore Services
                    </a>
                    <a href="contact.php" class="ml-4 border border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-gray-900 transition">
                        Contact Us
                    </a>
                </div>
            </div>
            <!-- Hero Image -->
            <div class="flex-1 mt-5 md:mt-0">
                <img src="../images/hero-image.png" alt="Hero Image" class="w-full h-auto">
            </div>
        </div>
        
        <!-- Modal Overlay -->
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" id="modal-overlay">
            <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg max-w-lg w-full text-center">
                <h2 class="text-3xl font-bold mb-4">Limited Time Offer!</h2>
                <p class="mb-6 text-lg">Unlock amazing discounts and exclusive features for your business. Don't miss out!</p>
                <div class="flex justify-center gap-4">
                    <a href="services.php" class="bg-gradient-to-r from-yellow-400 to-orange-500 text-gray-900 px-6 py-3 rounded-full font-semibold hover:from-yellow-300 hover:to-orange-400 transition">
                        Explore Now
                    </a>
                    <button class="border border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-gray-900 transition" id="close-modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Decorative Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                <path fill="#ffffff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,176C384,171,480,149,576,160C672,171,768,213,864,202.7C960,192,1056,128,1152,96C1248,64,1344,64,1392,64L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </header>
    

    <script>
        // JavaScript to handle modal visibility
        const modalOverlay = document.getElementById('modal-overlay');
        const closeModal = document.getElementById('close-modal');

        // To show the modal (You can trigger this based on your condition)
        setTimeout(() => {
            modalOverlay.style.display = 'flex';
        }, 1000);  // Show modal after 1 second, you can adjust as needed

        // To close the modal
        closeModal.addEventListener('click', () => {
            modalOverlay.style.display = 'none';
        });
    </script>