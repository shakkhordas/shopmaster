<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S H O P M A S T E R</title>
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
</head>
<body class="font-roboto">
    <!-- Navbar -->
    <nav class="relative container mx-auto p-6">
        <!-- Flex Container -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="">
                <div class="flex flex-row items-start">
                    <p class="text-4xl text-red-600 font-guerilla">SHOP</p>
                    <p class="text-4xl font-guerilla">MASTER</p>
                </div>
            </a>
            <!-- Menu Items -->
            <div class="menu hidden space-x-8 md:flex">
                <a href="#about" class="hover:text-gray-500">About</a>
                <a href="#services" class="hover:text-gray-500">Features</a>
                <a href="#" class="hover:text-gray-500">FAQ</a>
                <a href="#" class="hover:text-gray-500">Contact</a>
            </div>
            <!-- Buttons -->
            <div class="flex flex-row space-x-4">
                <a href="" class="hidden p-3 px-6 text-white bg-black rounded-full baseline hover:bg-gray-700 md:block">
                    Sign Up
                </a>
                <a href="" class="hidden p-3 px-6 text-white bg-red-500 rounded-full baseline hover:bg-red-400 md:block">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <section id="about">
        <!-- Flex Container -->
        <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
            <!-- Left Item -->
            <div class="flex flex-col mb-32 my-auto space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                    The Goto Place For Your Daily Needs
                </h1>
                <p class="max-w-md text-justify text-gray-500 md:text-justify">
                    At our e-commerce store, we strive to bring you an unparalleled shopping experience where convenience meets quality. 
                    With a vast array of products spanning various categories, we cater to your every need, whether it's fashion, electronics, 
                    home essentials, or beyond. Our user-friendly platform ensures seamless navigation, allowing you to browse, compare, and purchase with ease.
                <div class="flex justify-center space-x-4 md:justify-start">
                    <a href="" class="p-3 px-6 pt-2 text-white bg-black rounded-full baseline hover:bg-gray-500">
                        Sign Up
                    </a>
                    <a href="" class="p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300">
                        Login
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ asset('img/hero1.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <!-- Flex Container -->
        <div class="container flex flex-col mb-16 p-6 mx-auto space-y-24">
            <!-- Explore -->
            <div class="flex flex-col-reverse space-y-12 mx-auto md:flex-row-reverse md:justify-between md:space-x-6">
                <!-- Heading and Description -->
                <div class="flex flex-col items-center md:items-start md:my-auto">
                    <h1 class="max-w-md text-3xl font-bold text-center md:text-4xl md:text-left">
                        Explore Limitless Possibilities
                    </h1>
                    <p class="max-w-md text-justify text-gray-500 md:text-justify">
                        Dive into a world of endless possibilities as you explore our diverse range of products. 
                        From the latest trends in fashion to cutting-edge gadgets, we handpick each item to ensure 
                        supreme quality and style. Whether you're shopping for yourself or searching for the perfect gift, 
                        our curated selection guarantees something for everyone.
                    </p>
                </div>
                <!-- Image -->
                <div class="md:w-1/2">
                    <img src="{{ asset('img/feature1.png') }}" alt="">
                </div>
            </div>
            <!-- Confidence -->
            <div class="flex flex-col-reverse space-y-12 mx-auto md:flex-row md:justify-between md:space-x-6">
                <!-- Heading and Description -->
                <div class="flex flex-col items-center md:items-start md:my-auto">
                    <h1 class="max-w-md text-3xl font-bold text-center md:text-4xl md:text-left">
                        Shop with Confidence
                    </h1>
                    <p class="max-w-md text-justify text-gray-500 md:text-justify">
                        At our e-commerce store, your satisfaction is our top priority. We prioritize transparency and 
                        reliability, providing detailed product descriptions, customer reviews, and secure payment options. 
                        Rest assured, every purchase you make is backed by our commitment to excellence, ensuring a seamless 
                        shopping experience from start to finish.
                    </p>
                </div>
                <!-- Image -->
                <div class="md:w-1/2">
                    <img src="{{ asset('img/feature2.png') }}" alt="">
                </div>
            </div>
            <!-- Connected -->
            <div class="flex flex-col-reverse space-y-12 mx-auto md:flex-row-reverse md:justify-between md:space-x-6">
                <!-- Heading and Description -->
                <div class="flex flex-col items-center md:items-start md:my-auto">
                    <h1 class="max-w-md text-3xl font-bold text-center md:text-4xl md:text-left">
                        Stay Connected
                    </h1>
                    <p class="max-w-md text-justify text-gray-500 md:text-justify">
                        Join our vibrant online community and stay connected with the latest updates, exclusive offers, and 
                        exciting promotions. Subscribe to our newsletter and follow us on social media to be the first to know 
                        about new arrivals, sales events, and more. Let's embark on this shopping journey together, where every 
                        click brings you closer to discovering something extraordinary.
                    </p>
                </div>
                <!-- Image -->
                <div class="md:w-1/2">
                    <img src="{{ asset('img/feature3.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>