<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section with Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">

<header class="relative min-h-screen bg-cover bg-center flex items-start text-white" 
        style="background-image: url('../images/hero-background.jpg'); background-repeat: no-repeat; background-size: cover;">
    <!-- Ad Background -->
    <div class="absolute inset-0 bg-cover bg-center opacity-80" 
         style="background-image: url('./images/bg2.jpg');">
    </div>

    <!-- Hero Content -->
    <div class="relative w-full flex min-h-screen items-start">
        <!-- Left Section: Portrait Content -->
        <div class="flex-1 px-6 lg:px-20 pt-2 lg:pt-20">
            <div class="bg-white/20 backdrop-blur-md p-8 rounded-lg shadow-lg max-w-md w-full z-10 relative">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Empowering Businesses with <span class="text-yellow-400">Innovative Software</span>
                </h1>
                <p class="mt-6 text-lg text-black">
                    We specialize in cutting-edge solutions for web, mobile, and cloud platforms. Let's build the future together.
                </p>
                <div class="mt-8">
                    <a href="services.php" class="bg-gradient-to-r from-yellow-400 to-orange-500 text-gray-900 px-6 py-3 rounded-full font-semibold hover:from-yellow-300 hover:to-orange-400 transition">
                        Explore Services
                    </a>
                    <a href="login_signup.php" class="ml-4 border border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-gray-900 transition">
                        Join Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Section (Optional Background or Image) -->
        <div class="flex-1 hidden md:block"></div>
    </div>
</header>

<!-- Modal Overlay -->
<div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="modal-overlay">
    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg max-w-lg w-full text-center relative">
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
        <!-- Close icon -->
        <button class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl" id="close-modal-icon">&times;</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modalOverlay = document.getElementById("modal-overlay");
        const closeModal = document.getElementById("close-modal");
        const closeModalIcon = document.getElementById("close-modal-icon");

        // Show modal after 1 second
        setTimeout(() => {
            modalOverlay.classList.remove("hidden");
        }, 1000);

        // Close modal on button click
        function hideModal() {
            modalOverlay.classList.add("hidden");
        }

        closeModal.addEventListener("click", hideModal);
        closeModalIcon.addEventListener("click", hideModal);

        // Close modal on outside click
        modalOverlay.addEventListener("click", (e) => {
            if (e.target === modalOverlay) hideModal();
        });

        // Close modal on Escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") hideModal();
        });
    });
</script>

</body>
</html>
