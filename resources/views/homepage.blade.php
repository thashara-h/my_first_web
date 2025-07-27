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
            primary: '#5a058f', 
            accent: '#8d9494',   
            light: '#07a6a6',
            dark: '#1F1A36',
            
                        
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
  
        .paw-pattern {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M20 30c0-3.3-2.7-6-6-6s-6 2.7-6 6c0 1.3.4 2.5 1.1 3.5l3.9 5.4c.3.4.8.6 1.3.6s1-.2 1.3-.6l3.9-5.4c.7-1 1.1-2.2 1.1-3.5zm-6-2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z'/%3E%3C/g%3E%3C/svg%3E");
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-animation-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: -3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .bounce-in {
            animation: bounceIn 1s ease-out;
        }
        
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
        
        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }
        
        @keyframes pulse-ring {
            0% { transform: scale(0.8); opacity: 1; }
            100% { transform: scale(2.4); opacity: 0; }
        }
    
  </style>
</head>
<body class="bg-light text-dark font-sans">

<header class="bg-light shadow-lg sticky top-0 z-50  bg-opacity-4">
  <div class="max-w-8xl mx-auto px-6 py-3 flex justify-between items-center">
    <!-- Logo -->
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
          <a href="#" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Home</span>
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-purple-500 transition-all group-hover:w-full"></span>
          </a>
        </li>
        <li>
          <a href="/products" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Products</span>
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
        <!-- Login-->
        <a href="/login" class="relative px-4 py-2 text-purple-600 font-medium group transition-all">
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



  <!-- Hero Section -->
   
  
<body class="bg-gray-50">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-light  to-primary pt-20 pb-32 text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 paw-pattern opacity-20"></div>
        
        <!-- Floating Decorative Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-yellow-300 rounded-full opacity-30 floating-animation"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-pink-300 rounded-full opacity-40 floating-animation-delayed"></div>
        <div class="absolute bottom-40 left-20 w-12 h-12 bg-white rounded-full opacity-20 floating-animation"></div>
        
        <!-- Large Paw Prints -->
        <div class="absolute top-20 left-32 text-orange-300 opacity-30 text-6xl transform -rotate-12">🐾</div>
        <div class="absolute bottom-20 right-40 text-orange-300 opacity-40 text-4xl transform rotate-45">🐾</div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-7xl mx-auto px-6 py-20 md:py-32 flex flex-col lg:flex-row items-center">
                
                <!-- Left Content -->
                <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold leading-tight mb-6 bounce-in">
                        HIGH QUALITY
                        <br>
                        <span class="text-white drop-shadow-lg">PET FOOD</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-orange-100 mb-8 max-w-lg mx-auto lg:mx-0">
                        Premium nutrition for dogs, cats, parrots, and birds
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6 justify-center lg:justify-start">
                        <a href="/shopnow" class="bg-white text-orange-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            SHOP NOW
                        </a>
                        
                    </div>
                </div>
                
                <!-- Right Content - Pet Images and Elements -->
                <div class="lg:w-1/2 relative">
                    <!-- Main Dog Image -->
                    <div class="relative z-20 mb-8">
                        <div class="w-80 h-80 mx-auto relative">
                            <!-- Dog placeholder with orange gradient background -->
                            <div class="w-full h-full bg-gradient-to-br from-orange-300 to-orange-400 rounded-full overflow-hidden shadow-2xl border-8 border-white">
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-amber-200 to-orange-300">
                                    <span class="text-8xl">🐕</span>
                                </div>
                            </div>
                            
                            <!-- Pulse Ring Animation -->
                            <div class="absolute inset-0 rounded-full border-4 border-white opacity-60 pulse-ring"></div>
                        </div>
                    </div>
                    
                    <!-- Floating Pet Food Elements -->
                    <div class="absolute top-10 right-10 floating-animation">
                        <div class="bg-white rounded-2xl p-4 shadow-lg transform rotate-12">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">🥫</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Discount Badge -->
                    <div class="absolute top-0 right-0 floating-animation-delayed">
                        <div class="bg-pink-500 text-white rounded-full w-20 h-20 flex items-center justify-center shadow-lg transform -rotate-12">
                            <div class="text-center">
                                <div class="text-lg font-bold">50%</div>
                                <div class="text-xs">OFF</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pet Food Bag -->
                    <div class="absolute bottom-0 left-0 floating-animation">
                        <div class="bg-white rounded-2xl p-3 shadow-lg transform -rotate-6">
                            <div class="w-14 h-20 bg-gradient-to-b from-red-500 to-red-600 rounded-lg flex items-center justify-center">
                                <span class="text-xl">🍖</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Rating Stars -->
                    <div class="absolute bottom-20 right-20 floating-animation-delayed">
                        <div class="bg-yellow-400 rounded-xl p-3 shadow-lg">
                            <div class="flex text-white text-lg">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                    </div>
                    
                    <!-- Scattered Elements -->
                    <div class="absolute -top-10 left-20">
                        <div class="w-8 h-8 bg-yellow-300 rounded-full opacity-70 floating-animation"></div>
                    </div>
                    <div class="absolute top-32 -left-5">
                        <div class="w-6 h-6 bg-pink-400 rounded-full opacity-60 floating-animation-delayed"></div>
                    </div>
                    <div class="absolute bottom-10 -right-5">
                        <div class="w-10 h-10 bg-white rounded-full opacity-50 floating-animation"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Melting Wave Effect at Bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg viewBox="0 0 1440 150" preserveAspectRatio="none" class="w-full h-[150px]">
                <path fill="#ffffff" d="M0,96 C240,160 320,0 480,64 C640,128 720,32 960,96 C1200,160 1280,0 1440,64 L1440,320 L0,320 Z"/>
            </svg>
        </div>
    </section>
    
    
    


  <!-- Features Grid -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16" data-aos="fade-up">
        <h3 class="text-3xl font-display font-bold mb-4">Why Pet Parents Choose Us</h3>
        <p class="text-gray-600 max-w-2xl mx-auto">Quality products, expert advice, and unconditional love for your pets</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="bg-light p-8 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="100">
          <div class="w-14 h-14 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
            <span class="text-primary text-2xl">🛒</span>
          </div>
          <h4 class="text-xl font-semibold mb-3">Curated Selection</h4>
          <p class="text-gray-600">We test every product so you only get the best for your pet.</p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-light p-8 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="200">
          <div class="w-14 h-14 bg-accent bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
            <span class="text-accent text-2xl">🚚</span>
          </div>
          <h4 class="text-xl font-semibold mb-3">Fast Delivery</h4>
          <p class="text-gray-600">Get your pet essentials delivered within 24 hours in metro cities.</p>
        </div>
        
        <!-- Feature 3 -->
        <div class="bg-light p-8 rounded-xl shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="300">
          <div class="w-14 h-14 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-6">
            <span class="text-primary text-2xl">📞</span>
          </div>
          <h4 class="text-xl font-semibold mb-3">Expert Support</h4>
          <p class="text-gray-600">Our pet care specialists are available 24/7 for any questions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Products -->
  <section class="py-16 bg-gradient-to-br from-primary to-accent">
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
            <a href="/dog" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
        
        <!-- Category 2 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="100">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/cat.png" alt="Cat" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Cats</h4>
            <a href="/cat" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
        
        <!-- Category 3 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="200">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/rabbit.png" alt="Rabbit" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Small Pets</h4>
            <a href="/smallpets" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
        
        <!-- Category 4 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="300">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/parrot.png" alt="Bird" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Birds</h4>
            <a href="/bird" class="text-sm text-gray-200 hover:text-white font-medium">Shop Now →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- banner-->
  <section class="py-16 bg-gradient-to-br from-light to-primary">
    <div class="max-w-7xl mx-auto px-6 py-20 md:py-32 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-12 md:mb-0" data-aos="fade-left">
        <h2 class="text-4xl md:text-5xl font-display font-bold leading-tight mb-6">
          we provide best services <span class="text-accent">For Your</span> Furry Friends
        </h2>
        <p class="text-lg text-gray-600 mb-8 max-w-lg">
          Discover handpicked products and services that keep tails wagging and purrs coming.
        </p>
        <h2 class="text-4xl md:text-5xl font-display font-bold leading-tight mb-6">
          <span class="text-accent">
          A vacation for your pet – complete with cuddles, playtime, and dreamy naps!
          </span>
        </h2>
        
      </div>
      
      <div class="md:w-1/2" data-aos="fade-left">
        <div class="relative">
          <div class="absolute -top-6 -left-6 w-64 h-64 bg-primary rounded-2xl opacity-20"></div>
          <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-primary rounded-2xl opacity-20"></div>
          <img src="{{ asset('images/wall7.png') }}"
               alt="wall5" 
               class="relative rounded-2xl shadow-xl w-full max-w-lg mx-auto" />
        </div>
      </div>
    </div>
    
  </section>

  <!-- parent1 -->
  <section class="py-20 bg-gradient-to-br from-light to-accent">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16"  data-aos="fade-up">
        <h3 class="text-3xl font-display font-bold mb-4">Happy Pets, Happy Parents</h3>
        <p class="text-light max-w-2xl mx-auto">What our customers say about us</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- p 1 -->
        <div class="bg-light p-8 rounded-xl" data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 rounded-full bg-primary bg-opacity-10 flex items-center justify-center mr-4">
              <span class="text-primary text-xl">👩</span>
            </div>
            <div>
              <h5 class="font-semibold">Priya M.</h5>
              <p class="text-sm text-gray-500">Dog Mom</p>
            </div>
          </div>
          <p class="text-gray-700 italic">"My golden retriever is obsessed with PawMart's organic treats. The subscription service saves me so much time!"</p>
          <div class="flex mt-4 text-yellow-400">
            ★★★★★
          </div>
        </div>
        
        <!-- p 2 -->
        <div class="bg-light p-8 rounded-xl" data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 rounded-full bg-accent bg-opacity-10 flex items-center justify-center mr-4">
              <span class="text-accent text-xl">👨</span>
            </div>
            <div>
              <h5 class="font-semibold">Rahul K.</h5>
              <p class="text-sm text-gray-500">Cat Dad</p>
            </div>
          </div>
          <p class="text-gray-700 italic">"The automatic litter box changed our lives! Excellent customer service when I had questions about setup."</p>
          <div class="flex mt-4 text-yellow-400">
            ★★★★★
          </div>
        </div>
        
        <!-- p 3 -->
        <div class="bg-light p-8 rounded-xl" data-aos="fade-up" data-aos-delay="300">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 rounded-full bg-primary bg-opacity-10 flex items-center justify-center mr-4">
              <span class="text-primary text-xl">👵</span>
            </div>
            <div>
              <h5 class="font-semibold">Mrs. Sharma</h5>
              <p class="text-sm text-gray-500">Bird Lover</p>
            </div>
          </div>
          <p class="text-gray-700 italic">"At 72, I appreciate how easy PawMart makes it to get quality food for my parrots delivered right to my door."</p>
          <div class="flex mt-4 text-yellow-400">
            ★★★★★
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- start shopping-->
  <section class="py-20 bg-gradient-to-br from-light to-primary text-white">
    <div class="md:w-1/2" data-aos="fade-left">
        <div class="relative">
          <div class="absolute -top-2 -left-6 w-64 h-64 bg-accent rounded-full opacity-20"></div>
          <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-light rounded-full opacity-20"></div>
          <img src="{{ asset('images/wall6.png') }}"
               alt="wall6" 
               class="relative rounded-2xl shadow-xl w-full max-w-lg mx-auto" />
        </div>
      </div>
    <div class="max-w-4xl mx-auto px-6 text-center" data-aos="zoom-out">
      <h3 class="text-4xl md:text-5xl font-display font-bold leading-tight mb-6">Ready to Pamper Your Pet?</h3>
      <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Join thousands of happy pets enjoying PawMart's premium care products</p>
      <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
        <a href="/products" class="bg-white text-primary hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold text-lg transition">
          Start Shopping
        </a>
        <a href="services" class="border-2 border-white text-white hover:bg-white hover:text-primary px-8 py-4 rounded-lg font-semibold text-lg transition">
          Book a Consultation
        </a>
      </div>
    </div>
  </section>

 
  <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">🐾</span>
                        </div>
                        <span class="text-xl font-bold">PawMart</span>
                    </div>
                    <p class="text-gray-400">
                        Your trusted partner in pet care, serving dogs, cats, parrots, and birds with love and expertise.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pet Food</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Pet Grooming</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Veterinary Care</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pet Sitting</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Training</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>📧 info@pawmart.com</li>
                        <li>📞 +94 414267844</li>
                        <li>📍 123 Pet Care Avenue</li>
                        <li>⏰ Mon-Fri: 8AM-8PM</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 PawMart. All rights reserved.</p>
            </div>
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


    
</body>