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



    

    <!-- Page Title -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">About Us</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Dedicated to providing the best care for your beloved pets through innovative services and quality products.
            </p>
        </div>
    </div>

    <!-- Mission Section -->
    <section class="hero-overlay py-20 bg-gradient-to-b from-white to-">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-accent mb-8">OUR MISSION</h2>
                </div>
                <div class="space-y-6">
                    <p class="text-accent text-lg leading-relaxed">
                        Collaboratively administrate empowered markets via plug-and-play networks. 
                        Dynamically procrastinate B2C users after installed base benefits. Dramatically 
                        visualize customer directed convergence without revolutionary ROI.
                    </p>
                    <p class="text-grey text-lg leading-relaxed">
                        Efficiently unleash cross-media information without cross-media value. Quickly 
                        maximize timely deliverables for real-time schemas. Dramatically maintain 
                        clicks-and-mortar solutions without functional solutions.
                    </p>
                    <p class="text-accent text-lg leading-relaxed">
                        We strive to make pet care accessible, convenient, and reliable for every pet owner, 
                        whether you have dogs, cats, parrots, or other beloved birds. Our platform connects 
                        you with trusted services and premium pet food tailored to your pet's specific needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="relative py-20 bg-cover bg-center" style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 1200 600%22><rect fill=%22%23f3f4f6%22 width=%221200%22 height=%22600%22/><rect fill=%22%23e5e7eb%22 x=%22100%22 y=%22100%22 width=%22200%22 height=%22150%22 rx=%2210%22/><rect fill=%22%23d1d5db%22 x=%22350%22 y=%22200%22 width=%22180%22 height=%22120%22 rx=%2210%22/><rect fill=%22%23e5e7eb%22 x=%22580%22 y=%22150%22 width=%22160%22 height=%22180%22 rx=%2210%22/><rect fill=%22%23d1d5db%22 x=%22800%22 y=%22180%22 width=%22140%22 height=%22140%22 rx=%2210%22/><circle fill=%22%23f59e0b%22 cx=%22200%22 cy=%22400%22 r=%2230%22/><circle fill=%22%23ef4444%22 cx=%22450%22 cy=%22450%22 r=%2225%22/><circle fill=%22%2310b981%22 cx=%22650%22 cy=%22380%22 r=%2228%22/></svg>');">
        <div class="vision-overlay absolute inset-0 bg-gradient-to-b from-light to-primary"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-8">OUR VISION</h2>
                </div>
                <div class="space-y-6">
                    <p class="text-white text-lg leading-relaxed">
                        Collaboratively administrate empowered markets via plug-and-play networks. 
                        Dynamically procrastinate B2C users after installed base benefits. Dramatically 
                        visualize customer directed convergence without revolutionary ROI.
                    </p>
                    <p class="text-white text-lg leading-relaxed">
                        Efficiently unleash cross-media information without cross-media value. Quickly 
                        maximize timely deliverables for real-time schemas. Dramatically maintain 
                        clicks-and-mortar solutions without functional solutions.
                    </p>
                    <p class="text-white text-lg leading-relaxed">
                        To become the leading digital platform for pet care services, creating a world 
                        where every pet receives the love, care, and attention they deserve through 
                        innovative technology and passionate service.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gradient-to-b from-primary to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">OUR VALUES</h2>
                </div>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mt-3 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">
                            <strong>Pet-First Approach:</strong> Every decision we make prioritizes the health, 
                            safety, and happiness of pets across all categories - dogs, cats, parrots, and birds.
                        </p>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mt-3 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">
                            <strong>Quality Assurance:</strong> We partner only with certified professionals 
                            and premium brands to ensure the highest standards of care and nutrition.
                        </p>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mt-3 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">
                            <strong>Convenience & Accessibility:</strong> Making pet care services and quality 
                            food easily accessible through our user-friendly platform.
                        </p>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-2 h-2 bg-blue-600 rounded-full mt-3 flex-shrink-0"></div>
                        <p class="text-gray-700 text-lg">
                            <strong>Community Building:</strong> Fostering a supportive community of pet 
                            owners who share knowledge, experiences, and love for their animal companions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Passionate pet lovers and industry experts dedicated to revolutionizing pet care services.
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 mx-auto bg-gray-300 rounded-lg overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <span class="text-white text-6xl">👨‍💼</span>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-white bg-gray-800 py-2 px-4 rounded-lg inline-block">
                        Raymond Bell
                    </h3>
                    <p class="text-gray-600 mt-2">CEO & Founder</p>
                </div>

                <!-- Team Member 2 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 mx-auto bg-gray-300 rounded-lg overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                                <span class="text-white text-6xl">👩‍💻</span>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-white bg-gray-800 py-2 px-4 rounded-lg inline-block">
                        Janet Weaver
                    </h3>
                    <p class="text-gray-600 mt-2">Lead Veterinarian</p>
                </div>

                <!-- Team Member 3 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 mx-auto bg-gray-300 rounded-lg overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                                <span class="text-white text-6xl">👨‍🔬</span>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-white bg-gray-800 py-2 px-4 rounded-lg inline-block">
                        Louis Smith
                    </h3>
                    <p class="text-gray-600 mt-2">Pet Nutrition Specialist</p>
                </div>

                <!-- Team Member 4 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 mx-auto bg-gray-300 rounded-lg overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center">
                                <span class="text-white text-6xl">👩‍💼</span>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-xl font-semibold text-white bg-gray-800 py-2 px-4 rounded-lg inline-block">
                        Grace Dunbar
                    </h3>
                    <p class="text-gray-600 mt-2">Customer Experience Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-blue-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Give Your Pet the Best Care?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Join thousands of pet owners who trust PetCare Pro for their pet's health, happiness, and nutrition needs.
            </p>
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