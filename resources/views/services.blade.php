
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
</head>
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
          <a href="/products" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Products</span>
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
<!-- Services Section -->
<section class="py-16 bg-gradient-to-b from-white to-light">
  <div class="max-w-7xl mx-auto px-6">
    <!-- Section Header -->
    <div class="text-center mb-16" data-aos="fade-up">
      <span class="text-accent font-display font-bold tracking-wider">OUR SERVICES</span>
      <h2 class="text-4xl md:text-5xl font-display font-bold text-primary mt-4">
        <span class="relative inline-block">
          Paw-some Care
          <span class="absolute -bottom-2 left-0 w-full h-2 bg-accent/30 -z-10"></span>
        </span> 
        for Your Furry Family
      </h2>
      <p class="mt-6 text-lg max-w-3xl mx-auto">
        We go beyond pet supplies with specialized services to keep your companions happy, healthy, and full of life!
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Grooming Card -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 group" data-aos="fade-up">
        <div class="h-48 bg-gradient-to-r from-primary to-accent flex items-center justify-center">
          <span class="text-6xl group-hover:scale-110 transition-transform">🛁</span>
        </div>
        <div class="p-8">
          <h3 class="text-2xl font-display font-bold text-primary mb-3">Spa & Grooming</h3>
          <p class="mb-4">Luxurious baths, breed-specific haircuts, nail care, and more using hypoallergenic products.</p>
          <ul class="space-y-2 mb-6">
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              De-shedding treatments
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Teeth brushing
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Pawdicures
            </li>
          </ul>
          <a href="/spaandgrooming" class="inline-flex items-center text-accent font-semibold group-hover:text-primary transition">
            Book Appointment
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Veterinary Card -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 group" data-aos="fade-up" data-aos-delay="100">
        <div class="h-48 bg-gradient-to-r from-accent to-primary flex items-center justify-center">
          <span class="text-6xl group-hover:scale-110 transition-transform">🏥</span>
        </div>
        <div class="p-8">
          <h3 class="text-2xl font-display font-bold text-primary mb-3">Veterinary Care</h3>
          <p class="mb-4">Comprehensive health services from routine checkups to emergency care by licensed veterinarians.</p>
          <ul class="space-y-2 mb-6">
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Vaccinations & wellness exams
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Dental cleanings
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Microchipping
            </li>
          </ul>
          <a href="/veterinarycare" class="inline-flex items-center text-accent font-semibold group-hover:text-primary transition">
            Schedule Visit
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
      </div>

      
      <!-- Daycare Card -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 group" data-aos="fade-up">
        <div class="h-48 bg-gradient-to-r from-accent to-primary flex items-center justify-center">
          <span class="text-6xl group-hover:scale-110 transition-transform">🐶</span>
        </div>
        <div class="p-8">
          <h3 class="text-2xl font-display font-bold text-primary mb-3">Daycare & Boarding</h3>
          <p class="mb-4">A home-away-from-home with supervised play, cozy accommodations, and plenty of TLC.</p>
          <ul class="space-y-2 mb-6">
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Climate-controlled facilities
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Webcam access
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              Medication administration
            </li>
          </ul>
          <a href="/daycare" class="inline-flex items-center text-accent font-semibold group-hover:text-primary transition">
            Check Availability
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
      </div>

      
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-gradient-to-b from-light to-white">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-display font-bold text-primary text-center mb-12">
      Happy Pets, Happy Owners
    </h2>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-light/50 p-8 rounded-2xl" data-aos="fade-up">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xl mr-4">
            🐕
          </div>
          <div>
            <h4 class="font-bold">Sarah J.</h4>
            <div class="flex text-yellow-400">
              ★★★★★
            </div>
          </div>
        </div>
        <p>"The groomers are amazing with my anxious golden retriever! He actually gets excited to go now. Their deshedding treatment is worth every penny."</p>
      </div>
      
      <!-- Testimonial 2 -->
      <div class="bg-light/50 p-8 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xl mr-4">
            🐈
          </div>
          <div>
            <h4 class="font-bold">Michael T.</h4>
            <div class="flex text-yellow-400">
              ★★★★★
            </div>
          </div>
        </div>
        <p>"PawMart's auto-delivery saved me during kitten season at the shelter I run. Reliable, customizable, and the 10% discount helps stretch our budget further."</p>
      </div>
      
      <!-- Testimonial 3 -->
      <div class="bg-light/50 p-8 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xl mr-4">
            🐩
          </div>
          <div>
            <h4 class="font-bold">The Rodriguez Family</h4>
            <div class="flex text-yellow-400">
              ★★★★★
            </div>
          </div>
        </div>
        <p>"We use ALL their services - daycare while we work, boarding when traveling, and the membership gives us serious savings. Our poodle is basically a PawMart mascot!"</p>
      </div>
    </div>
  </div>
</section>
 <!-- Footer -->
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