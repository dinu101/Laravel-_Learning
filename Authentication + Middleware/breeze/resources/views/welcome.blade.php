<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build Your Dream Online Business - SPI Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Define a custom green color similar to the source image */
        :root {
            --color-primary-green: #2ecc71; /* A shade close to the image's CTA green */
            --color-primary-dark: #27ae60;
            --color-light-green: #e6f7ef;
        }

        .bg-primary-green { background-color: var(--color-primary-green); }
        .hover\:bg-primary-dark { background-color: var(--color-primary-dark); }
        .text-primary-green { color: var(--color-primary-green); }
        .ring-primary-green { --tw-ring-color: var(--color-primary-green); }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: white;
            /* Prevent horizontal scroll issues due to absolute positioning on mobile */
            overflow-x: hidden; 
        }

        /* Custom styling for the logo to use an SVG and match the source image color */
        .spi-logo {
            font-weight: 800;
            font-size: 2rem;
            line-height: 1;
            color: #2c3e50; /* Dark gray for "sp" */
        }
        .spi-logo::after {
            content: "i";
            color: var(--color-primary-green); /* Green for "i" */
        }

        /* Custom placement for the overlapping images using absolute positioning */
        .image-cluster {
            /* Fixed height for cluster area on mobile to prevent content collapse */
            height: 500px; 
            margin-top: 4rem;
        }

        @media (min-width: 1024px) {
            .image-cluster {
                /* Remove fixed height on large screens where grid/flex handles placement */
                height: auto;
                margin-top: 0;
            }
        }
        
        /* Utility for the sliding mobile menu */
        .mobile-menu-open {
            transform: translateX(0) !important;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Mobile Menu Sidebar -->
    <div id="mobileMenu" class="fixed top-0 right-0 w-64 h-full bg-white shadow-2xl z-[100] transform translate-x-full transition-transform duration-300 ease-in-out p-6 overflow-y-auto">
        <div class="flex justify-end mb-8">
            <button onclick="toggleMobileMenu()" class="text-gray-500 hover:text-gray-900">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <nav class="flex flex-col space-y-4 text-gray-700 font-semibold text-lg">
            <a href="#" class="hover:text-primary-green transition duration-150 py-2 border-b border-gray-100">About</a>
            <a href="#" class="hover:text-primary-green transition duration-150 py-2 border-b border-gray-100">Learn</a>
            <a href="#" class="hover:text-primary-green transition duration-150 py-2 border-b border-gray-100">Listen</a>
            <a href="#" class="hover:text-primary-green transition duration-150 py-2 border-b border-gray-100">Connect</a>
            <a href="#" class="hover:text-primary-green transition duration-150 py-2 border-b border-gray-100">Resources</a>
            
            <a href="#" class="mt-6 text-sm font-semibold px-4 py-3 rounded-xl text-white bg-primary-green hover:bg-primary-dark text-center transition duration-200">
                SPI PRO
            </a>
            <a href="#" class="text-sm font-semibold px-4 py-3 rounded-xl border border-primary-green text-primary-green hover:bg-primary-green hover:text-white text-center transition duration-200">
                COURSES
            </a>
            <button class="text-gray-500 hover:text-gray-700 text-center py-2">LOGIN</button>
        </nav>
    </div>

    <!-- Mobile Menu Backdrop -->
    <div id="mobileMenuBackdrop" onclick="toggleMobileMenu()" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-[99] hidden"></div>

    <!-- Header / Navigation Bar -->
    <header class="shadow-sm border-b border-gray-100 sticky top-0 bg-white z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="spi-logo">sp</a>

            <!-- Desktop Links -->
            <nav class="hidden lg:flex space-x-8 text-gray-700 font-medium">
                <a href="#" class="hover:text-primary-green transition duration-150 py-1">About</a>
                <a href="#" class="hover:text-primary-green transition duration-150 py-1">Learn <span class="text-xs ml-1">&#9662;</span></a>
                <a href="#" class="hover:text-primary-green transition duration-150 py-1">Listen</a>
                <a href="#" class="hover:text-primary-green transition duration-150 py-1">Connect <span class="text-xs ml-1">&#9662;</span></a>
                <a href="#" class="hover:text-primary-green transition duration-150 py-1">Resources <span class="text-xs ml-1">&#9662;</span></a>
            </nav>

            <!-- Action Buttons & Search -->
            <div class="flex items-center space-x-3">
                <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700 hidden lg:block">LOGIN</a>

                <a href="" class="text-sm font-semibold px-4 py-2 rounded-full border border-primary-green text-white bg-primary-green hover:bg-primary-dark transition duration-200 hidden lg:inline-block">
                    SPI PRO
                </a>
                <a href="#" class="text-sm font-semibold px-4 py-2 rounded-full border border-primary-green text-primary-green bg-white hover:bg-primary-green hover:text-white transition duration-200 hidden lg:inline-block">
                    COURSES
                </a>
                <button class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                
                <!-- Mobile Menu Button - Added onclick handler -->
                <button onclick="toggleMobileMenu()" class="lg:hidden text-gray-500 hover:text-gray-700 p-2 rounded-lg hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-24">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">

            <!-- Left Content Area -->
            <div class="mb-12 lg:mb-0">
                <!-- Large Headline -->
                <h2 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-gray-900 leading-tight">
                    Build Your Dream <br>
                    <span class="text-gray-900">Online Business</span>
                </h2>

                <!-- Sub-Text -->
                <p class="mt-6 text-xl text-gray-600 max-w-lg">
                    Wherever you're going on your entrepreneurial journey, we're here to help you get there.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-10 flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <!-- Primary Button -->
                    <a href="#" class="bg-primary-green text-white font-bold text-lg px-8 py-4 rounded-xl shadow-lg hover:bg-primary-dark transition duration-300 transform hover:translate-y-[-2px] inline-flex items-center">
                        See Courses
                    </a>
                    
                    <!-- Secondary Link -->
                    <a href="#" class="text-gray-700 font-bold text-lg inline-flex items-center group hover:text-primary-green transition duration-300">
                        BECOME A PRO 
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Right Image Cluster (The visual focus) -->
            <div class="image-cluster relative w-full lg:max-w-none">
                
                <!-- Background Dots (simplified to a single area) -->
                <div class="absolute inset-0 opacity-10 hidden lg:block">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <defs><pattern id="dot-pattern" width="6" height="6" patternUnits="userSpaceOnUse"><circle cx="1" cy="1" r="1" fill="#2ecc71"/></pattern></defs>
                        <rect width="100%" height="100%" fill="url(#dot-pattern)"/>
                    </svg>
                </div>


                <!-- The 5 Overlapping Images - Updated with IDs -->
                
                <!-- Image 1: Maria (Top Center) -->
                <div class="absolute w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden top-8 left-1/2 -translate-x-1/2 lg:top-0 lg:left-[45%] shadow-2xl border-4 border-white z-20 transition-all duration-300 hover:scale-105">
                    <img id="img-maria" src="" alt="Maria, Podcaster" class="w-full h-full object-cover bg-gray-200">
                </div>
                <p class="absolute text-sm text-center font-semibold top-[200px] left-1/2 -translate-x-1/2 lg:top-[240px] lg:left-[45%] w-32 md:w-40 z-20">
                    <strong class="text-gray-900">Maria, Podcaster</strong><br>Turned her workflow from unorganized to a structured content calendar.
                </p>

                <!-- Image 2: Milnkay (Middle Left) -->
                <div class="absolute w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden top-40 left-10 md:left-[10%] lg:top-40 lg:left-0 shadow-xl border-4 border-white z-10 transition-all duration-300 hover:scale-105">
                    <img id="img-milnkay" src="" alt="Milnkay, Course Creator" class="w-full h-full object-cover bg-gray-200">
                </div>
                 <p class="absolute text-sm font-semibold top-[340px] left-10 md:left-[10%] lg:top-[400px] lg:left-0 w-32 md:w-40 z-10">
                    <strong class="text-gray-900">Milnkay, Course Creator</strong><br>Launched her first online platform.
                </p>

                <!-- Image 3: Deborah (Middle Right) -->
                <div class="absolute w-32 h-32 md:w-36 md:h-36 rounded-full overflow-hidden top-24 right-10 md:right-[10%] lg:top-12 lg:right-0 shadow-xl border-4 border-white z-10 transition-all duration-300 hover:scale-105">
                    <img id="img-deborah" src="" alt="Deborah, Author" class="w-full h-full object-cover bg-gray-200">
                </div>
                <p class="absolute text-sm font-semibold top-[300px] right-10 md:right-[10%] lg:top-[200px] lg:right-0 w-32 md:w-40 z-10">
                    <strong class="text-gray-900">Deborah, Author</strong><br>Launched her first podcast.
                </p>

                <!-- Image 4: Junaid (Bottom Center, Largest) -->
                <div class="absolute w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden bottom-0 left-1/2 -translate-x-1/2 lg:bottom-10 lg:left-[30%] shadow-2xl border-4 border-white z-30 transition-all duration-300 hover:scale-105">
                    <img id="img-junaid" src="" alt="Junaid, Podcaster" class="w-full h-full object-cover bg-gray-200">
                </div>
                <p class="absolute text-sm text-center font-semibold bottom-[-80px] left-1/2 -translate-x-1/2 lg:bottom-[-20px] lg:left-[30%] w-40 md:w-48 z-30">
                    <strong class="text-gray-900">Junaid, Podcaster</strong><br>Focused on his niche and grew his audience.
                </p>

                <!-- Image 5: Doug (Bottom Right) -->
                <div class="absolute w-28 h-28 md:w-32 md:h-32 rounded-full overflow-hidden bottom-10 right-10 md:right-[5%] lg:bottom-0 lg:right-0 shadow-xl border-4 border-white z-20 transition-all duration-300 hover:scale-105">
                    <img id="img-doug" src="" alt="Doug, Course Creator" class="w-full h-full object-cover bg-gray-200">
                </div>
                <p class="absolute text-sm font-semibold bottom-[-50px] right-10 md:right-[5%] lg:bottom-[-50px] lg:right-0 w-32 md:w-40 z-20">
                    <strong class="text-gray-900">Doug, Course Creator</strong><br>Launched a successful blog with $R$ users a day.
                </p>
                
            </div>
        </div>
    </main>

    <script>
        /**
         * Generates a random integer between min and max (inclusive).
         */
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        /**
         * Loads a set of unique random images into the hero cluster.
         */
        function loadRandomImages() {
            const imageElements = [
                { id: 'img-maria', size: 400 },
                { id: 'img-milnkay', size: 400 },
                { id: 'img-deborah', size: 400 },
                { id: 'img-junaid', size: 400 },
                { id: 'img-doug', size: 400 }
            ];

            const usedSeeds = new Set();
            
            imageElements.forEach(item => {
                const imgEl = document.getElementById(item.id);
                if (imgEl) {
                    let seed;
                    // Ensure the seed is unique for this set of images
                    do {
                        // Using a large range of random IDs for different images from picsum
                        seed = getRandomInt(100, 999); 
                    } while (usedSeeds.has(seed));
                    
                    usedSeeds.add(seed);

                    // Using Picsum for random, high-quality images
                    imgEl.src = `https://picsum.photos/id/${seed}/${item.size}/${item.size}`;
                    imgEl.onerror = function() {
                        // Fallback in case picsum ID is invalid or failed
                        this.src = `https://placehold.co/${item.size}x${item.size}/2ecc71/ffffff?text=${item.id.replace('img-', '').toUpperCase()}`;
                    };
                }
            });
        }

        /**
         * Toggles the visibility of the mobile menu and backdrop.
         */
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const backdrop = document.getElementById('mobileMenuBackdrop');
            const isOpen = menu.classList.toggle('mobile-menu-open');
            
            if (isOpen) {
                backdrop.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Disable scrolling on the main page
            } else {
                backdrop.classList.add('hidden');
                document.body.style.overflow = ''; // Re-enable scrolling
            }
        }

        // Initialize the random images when the page loads
        window.onload = loadRandomImages;

    </script>

</body>
</html>
