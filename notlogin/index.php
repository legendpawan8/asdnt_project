<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles to make carousel full-screen */
        .carousel-wrapper {
            width: 100vw; /* Full width of the viewport */
            height: 100vh; /* Full height of the viewport */
            margin-left: 2cm; /* Left margin of 2cm */
            margin-right: 2cm; /* Right margin of 2cm */
        }

        /* Ensure carousel slides take full width and height */
        .carousel-slide {
            height: 100vh; /* Full height of the viewport */
            width: 100vw; /* Full width of the viewport */
        }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    <?php include '../common/navbar.php'; ?>

    <!-- Carousel Container -->
    <div class="flex items-center justify-center mt-2">
        <!-- Carousel Wrapper with Gradient -->
        <div class="relative carousel-wrapper bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 rounded-lg p-8">
            <!-- Carousel Slides -->
            <div class="carousel-container relative overflow-hidden">
                <div class="carousel-slides flex transition-transform duration-500 ease-in-out" id="carouselSlides">
                    <!-- Slide 1 -->
                    <div class="carousel-slide flex-none bg-cover bg-center rounded-lg" style="background-image: url('');">
                        <div class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold"></div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide flex-none bg-cover bg-center rounded-lg" style="background-image: url('');">
                        <div class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold"></div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide flex-none bg-cover bg-center rounded-lg" style="background-image: url('');">
                        <div class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold"></div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">
                    &lt;
                </button>
                <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">
                    &gt;
                </button>
            </div>
        </div>
    </div>

    <script>
        const carouselSlides = document.getElementById('carouselSlides');
        const nextBtn = document.getElementById('next');
        const prevBtn = document.getElementById('prev');
        let currentIndex = 0;

        const totalSlides = document.querySelectorAll('.carousel-slide').length;

        nextBtn.addEventListener('click', () => {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Loop back to the first slide
            }
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalSlides - 1; // Loop back to the last slide
            }
            updateCarousel();
        });

        function updateCarousel() {
            const offset = -currentIndex * 100; // Move the slides by 100% for each index
            carouselSlides.style.transform = `translateX(${offset}%)`;
        }

        // Optionally, add auto-slide functionality
        setInterval(() => {
            nextBtn.click();
        }, 5000); // Change slide every 5 seconds
    </script>

</body>
</html>
