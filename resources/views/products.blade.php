<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PawMart – Premium Pet Care</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#5a058f',  // Deep Purple
            accent: '#8d9494',   // Vibrant Pink
            light: '#07a6a6',
            dark: '#1F1A36'
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            display: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@700;800&display=swap');
  </style>
<body class="bg-light text-dark font-sans">
<!-- Whimsical Pet Shop Navigation with Auth Buttons -->
<header class="bg-light shadow-sm sticky top-0 z-50  bg-opacity-7">
  <div class="max-w-8xl mx-auto px-6 py-3 flex justify-between items-center">
    <!-- Logo with animated paw -->
    <div class="flex items-center space-x-3 group">
      <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-400 to-blue-500 flex items-center justify-center shadow-md transform group-hover:rotate-12 transition duration-300">
        <span class="text-white text-2xl animate-bounce">🐾</span>
      </div>
      <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-600 font-serif tracking-tight">
        PawMart
      </h1>
    </div>

    <!-- Navigation with hover effects -->
    <nav class="hidden lg:block">
      <ul class="flex space-x-10">
        <li>
          <a href="/homepage" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Home</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-500 transition-all group-hover:w-full"></span>
          </a>
        </li>
        
        <li>
          <a href="/services" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Services</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-500 transition-all group-hover:w-full"></span>
          </a>
        </li>
        <li>
          <a href="/about" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>About</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-500 transition-all group-hover:w-full"></span>
          </a>
        </li>
        <li>
          <a href="/contact" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Contact us</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-500 transition-all group-hover:w-full"></span>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Right side elements -->
    <div class="flex items-center space-x-6">
      <!-- Search bar -->
      <div class="relative hidden md:block transform transition hover:scale-105">
        <input 
          type="text" 
          placeholder="Find pet goodies..." 
          class="py-2 pl-5 pr-10 rounded-full border-2 border-purple-100 focus:outline-none focus:border-purple-300 focus:ring-2 focus:ring-purple-200 transition-all w-64 shadow-sm"
        >
        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-400 hover:text-purple-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
      </div>

      <!-- Auth Buttons - Creative Pet Bowl Inspired -->
      <div class="hidden md:flex items-center space-x-3">
        <!-- Login - Fish Bone Button -->
        <a href="#" class="relative px-4 py-2 text-purple-600 font-medium group transition-all">
          <span class="relative z-10 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
            
          </span>
          <span class="absolute inset-0 rounded-full bg-purple-50 border border-purple-200 transform scale-x-90 group-hover:scale-x-100 transition-transform"></span>
        </a>

        
      </div>

      <!-- Mobile menu button -->
      <button class="lg:hidden p-2 rounded-full bg-purple-50 hover:bg-purple-100 transition focus:outline-none focus:ring-2 focus:ring-purple-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>
</header>
<!-- Product Categories -->
  <section class="py-16 bg-gradient-to-br from-accent to-light">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 text-white" data-aos="fade-up">
        <h3 class="text-3xl font-display font-bold mb-4">Shop By Pet</h3>
        <p class="text-gray-200 max-w-2xl mx-auto">Everything you need for every type of pet</p>
      </div>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <!-- Category 1 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/dog.png" alt="Dog" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Dogs</h4>
            <a href="dogfood.html" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
        
        <!-- Category 2 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="100">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/cat.png" alt="Cat" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Cats</h4>
            <a href="catfood.html" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
        
        <!-- Category 3 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="200">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/rabbit.png" alt="Rabbit" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Small Pets</h4>
            <a href="smallpets.html" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
        
        <!-- Category 4 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="300">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/parrot.png" alt="Bird" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Birds</h4>
            <a href="birds.html" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="bg-dark text-gray-400 py-12">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Column 1 -->
      <div>
        <div class="flex items-center space-x-2 mb-4">
          <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center">
            <span class="text-white text-sm">🐾</span>
          </div>
          <h4 class="text-white font-display font-bold text-lg">PawMart</h4>
        </div>
        <p class="text-sm mb-4">Premium pet care products and services for your furry family members.</p>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white transition">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748 1.15.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Column 2 -->
      <div>
        <h5 class="text-white font-semibold mb-4">Shop</h5>
        <ul class="space-y-2">
          <li><a href="#" class="text-sm hover:text-white transition">Dog Supplies</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Cat Supplies</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Small Pets</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Bird Supplies</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">New Arrivals</a></li>
        </ul>
      </div>
      
      <!-- Column 3 -->
      <div>
        <h5 class="text-white font-semibold mb-4">Services</h5>
        <ul class="space-y-2">
          <li><a href="#" class="text-sm hover:text-white transition">Grooming</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Veterinary</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Training</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Pet Sitting</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Nutrition Plans</a></li>
        </ul>
      </div>
      
      <!-- Column 4 -->
      <div>
        <h5 class="text-white font-semibold mb-4">Company</h5>
        <ul class="space-y-2">
          <li><a href="#" class="text-sm hover:text-white transition">About Us</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Careers</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Blog</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">Contact</a></li>
          <li><a href="#" class="text-sm hover:text-white transition">FAQ</a></li>
        </ul>
      </div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 pt-8 mt-8 border-t border-gray-800">
      <p class="text-sm text-center">&copy; 2025 PawMart. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
</html>


