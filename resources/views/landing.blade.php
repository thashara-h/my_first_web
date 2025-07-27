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
<body class="bg-gray-50">
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
          <a href="/homepage" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
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
        <li>
          <a href="/dashboard" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Dashboard</span>
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
    <section id="home" class="hero-gradient text-white py-20 md:py-32 fade-in bg-gradient-to-br from-light to-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Premium Care for Your Furry Friends
                    </h1>
                    <p class="text-xl mb-8 opacity-90">
                        We provide exceptional pet care services to keep your pets happy, healthy, and thriving.
                    </p>
                    
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('images/wall4.jpeg') }}" 
                         alt="Happy dog with caretaker" 
                         class="rounded-xl shadow-2xl w-full max-w-md border-4 border-white">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold text-purple-600 mb-2">2,500+</div>
                    <div class="text-gray-600">Happy Pets</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-blue-500 mb-2">150+</div>
                    <div class="text-gray-600">Qualified Staff</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-purple-600 mb-2">10+</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-blue-500 mb-2">24/7</div>
                    <div class="text-gray-600">Emergency Care</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gradient-to-br from-light to-accent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Premium Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We offer a wide range of services to meet all your pet's needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden feature-card transition duration-300">
                    <div class="h-48 bg-purple-100 flex items-center justify-center">
                        <i class="fas fa-stethoscope text-purple-600 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Veterinary Care</h3>
                        <p class="text-gray-600 mb-4">
                            Comprehensive medical services including checkups, vaccinations, and emergency care.
                        </p>
                        <a href="#" class="text-purple-600 font-medium hover:text-purple-700 flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden feature-card transition duration-300">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-cut text-blue-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Grooming</h3>
                        <p class="text-gray-600 mb-4">
                            Professional grooming services to keep your pet looking and feeling their best.
                        </p>
                        <a href="#" class="text-blue-500 font-medium hover:text-blue-600 flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden feature-card transition duration-300">
                    <div class="h-48 bg-yellow-100 flex items-center justify-center">
                        <i class="fas fa-home text-yellow-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pet Boarding</h3>
                        <p class="text-gray-600 mb-4">
                            Safe and comfortable boarding facilities for when you're away.
                        </p>
                        <a href="#" class="text-yellow-500 font-medium hover:text-yellow-600 flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden feature-card transition duration-300">
                    <div class="h-48 bg-green-100 flex items-center justify-center">
                        <i class="fas fa-bone text-green-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Training</h3>
                        <p class="text-gray-600 mb-4">
                            Professional training programs to help your pet learn good behavior.
                        </p>
                        <a href="#" class="text-green-500 font-medium hover:text-green-600 flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden feature-card transition duration-300">
                    <div class="h-48 bg-red-100 flex items-center justify-center">
                        <i class="fas fa-ambulance text-red-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Emergency Care</h3>
                        <p class="text-gray-600 mb-4">
                            24/7 emergency services for when your pet needs immediate attention.
                        </p>
                        <a href="#" class="text-red-500 font-medium hover:text-red-600 flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden feature-card transition duration-300">
                    <div class="h-48 bg-indigo-100 flex items-center justify-center">
                        <i class="fas fa-paw text-indigo-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Day Care</h3>
                        <p class="text-gray-600 mb-4">
                            Fun and safe daytime care with socialization and activities.
                        </p>
                        <a href="#" class="text-indigo-500 font-medium hover:text-indigo-600 flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-accent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <img src="https://images.unsplash.com/photo-1594149929911-78975a43d4f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Our team with pets" 
                         class="rounded-xl shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">About PawCare</h2>
                    <p class="text-gray-600 mb-6">
                        Founded in 2012, PawCare has grown from a small local pet service to one of the most trusted names in comprehensive pet care. Our mission is to provide exceptional care that pets deserve and owners can trust.
                    </p>
                    <p class="text-gray-600 mb-6">
                        All our staff are certified professionals who undergo rigorous training in animal care and first aid. We treat every pet as if they were our own.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 rounded-full bg-purple-100 flex items-center justify-center">
                                    <i class="fas fa-check text-purple-600 text-xs"></i>
                                </div>
                            </div>
                            <p class="ml-3 text-gray-600">
                                <span class="font-medium">Certified Professionals:</span> All staff are trained and certified in pet care.
                            </p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-check text-blue-500 text-xs"></i>
                                </div>
                            </div>
                            <p class="ml-3 text-gray-600">
                                <span class="font-medium">Premium Facilities:</span> State-of-the-art equipment and comfortable spaces.
                            </p>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center">
                                    <i class="fas fa-check text-green-500 text-xs"></i>
                                </div>
                            </div>
                            <p class="ml-3 text-gray-600">
                                <span class="font-medium">Personalized Care:</span> Customized plans for each pet's unique needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-accent to-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Get In Touch</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Have questions? We're here to help you and your pet.
                </p>
            </div>

            <div class="md:flex">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <i class="fas fa-map-marker-alt text-purple-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-medium text-gray-800">Address</h4>
                                    <p class="text-gray-600">123 Pet Care Avenue, New York, NY 10001</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <i class="fas fa-phone-alt text-blue-500"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-medium text-gray-800">Phone</h4>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <i class="fas fa-envelope text-green-500"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-medium text-gray-800">Email</h4>
                                    <p class="text-gray-600">hello@pawcare.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <i class="fas fa-clock text-yellow-500"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-medium text-gray-800">Hours</h4>
                                    <p class="text-gray-600">Monday - Friday: 8AM - 8PM<br>Saturday: 9AM - 5PM<br>Emergency: 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <form class="bg-gray-50 p-8 rounded-xl">
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <select id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500">
                                    <option>General Inquiry</option>
                                    <option>Appointment Request</option>
                                    <option>Emergency</option>
                                    <option>Feedback</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full px-6 py-3 bg-purple-600 text-white rounded-lg font-semibold hover:bg-purple-700 transition duration-300">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-sm">🐾</span>
                        </div>
                        <span class="text-xl font-bold">PawCare</span>
                    </div>
                    <p class="text-gray-400">
                        Your trusted partner in pet care, serving dogs, cats, and other pets with love and expertise.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#home" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#testimonials" class="hover:text-white transition-colors">Testimonials</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Veterinary Care</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Grooming</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pet Boarding</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Training</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Emergency Care</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                    <p class="text-gray-400">
                        Subscribe to our newsletter for pet care tips and special offers.
                    </p>
                    <div class="mt-4 flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg w-full focus:outline-none text-gray-800">
                        <button class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 PawCare. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>
</html>