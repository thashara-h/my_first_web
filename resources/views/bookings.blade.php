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
<body class="bg-gradient-to-b from-white to-light">
    
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
          <a href="/dashboard" class="relative px-2 py-1 text-gray-700 hover:text-purple-600 font-medium transition-all group">
            <span>Dashboard</span>
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

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 ">
        <!-- Page Heading with Animation -->
        <div class="text-center mb-12 fade-in">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Book Pet Services</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Schedule appointments for your furry friends with our certified pet care professionals.
            </p>
        </div>

        <!-- Booking Form with Animation -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden slide-up">
            <div class="md:flex">
                <!-- Form Section -->
                <div class="p-8 md:w-2/3">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Service Details</h2>
                    
                    <form class="space-y-6">
                        <!-- Pet Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Select Pet</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition">
                                <option>Max (Dog)</option>
                                <option>Luna (Cat)</option>
                                <option>Add New Pet...</option>
                            </select>
                        </div>
                        
                        <!-- Service Type -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Service Type</label>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                <!-- Service Options -->
                                <label class="service-option">
                                    <input type="radio" name="service" class="hidden peer" checked>
                                    <div class="p-4 border border-gray-200 rounded-lg peer-checked:border-purple-500 peer-checked:bg-purple-50 transition cursor-pointer hover:bg-gray-50">
                                        <i class="fas fa-stethoscope text-purple-600 text-xl mb-2"></i>
                                        <p class="font-medium">Vet Checkup</p>
                                    </div>
                                </label>
                                
                                <label class="service-option">
                                    <input type="radio" name="service" class="hidden peer">
                                    <div class="p-4 border border-gray-200 rounded-lg peer-checked:border-purple-500 peer-checked:bg-purple-50 transition cursor-pointer hover:bg-gray-50">
                                        <i class="fas fa-cut text-purple-600 text-xl mb-2"></i>
                                        <p class="font-medium">Grooming</p>
                                    </div>
                                </label>
                                
                                <label class="service-option">
                                    <input type="radio" name="service" class="hidden peer">
                                    <div class="p-4 border border-gray-200 rounded-lg peer-checked:border-purple-500 peer-checked:bg-purple-50 transition cursor-pointer hover:bg-gray-50">
                                        <i class="fas fa-bone text-purple-600 text-xl mb-2"></i>
                                        <p class="font-medium">Training</p>
                                    </div>
                                </label>
                                
                                <label class="service-option">
                                    <input type="radio" name="service" class="hidden peer">
                                    <div class="p-4 border border-gray-200 rounded-lg peer-checked:border-purple-500 peer-checked:bg-purple-50 transition cursor-pointer hover:bg-gray-50">
                                        <i class="fas fa-home text-purple-600 text-xl mb-2"></i>
                                        <p class="font-medium">Boarding</p>
                                    </div>
                                </label>
                                
                                <label class="service-option">
                                    <input type="radio" name="service" class="hidden peer">
                                    <div class="p-4 border border-gray-200 rounded-lg peer-checked:border-purple-500 peer-checked:bg-purple-50 transition cursor-pointer hover:bg-gray-50">
                                        <i class="fas fa-walking text-purple-600 text-xl mb-2"></i>
                                        <p class="font-medium">Walking</p>
                                    </div>
                                </label>
                                
                                <label class="service-option">
                                    <input type="radio" name="service" class="hidden peer">
                                    <div class="p-4 border border-gray-200 rounded-lg peer-checked:border-purple-500 peer-checked:bg-purple-50 transition cursor-pointer hover:bg-gray-50">
                                        <i class="fas fa-plus text-purple-600 text-xl mb-2"></i>
                                        <p class="font-medium">Other</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Date & Time -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition">
                                    <option>9:00 AM</option>
                                    <option>10:00 AM</option>
                                    <option>11:00 AM</option>
                                    <option>12:00 PM</option>
                                    <option>1:00 PM</option>
                                    <option>2:00 PM</option>
                                    <option>3:00 PM</option>
                                    <option>4:00 PM</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Notes -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Special Instructions</label>
                            <textarea rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" placeholder="Any special needs or instructions for your pet..."></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 px-4 rounded-lg font-medium transition transform hover:scale-105">
                            Confirm Booking
                        </button>
                    </form>
                </div>
                
                <!-- Summary Section -->
                <div class="bg-gray-50 p-8 md:w-1/3">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Booking Summary</h2>
                    
                    <div class="space-y-6">
                        <!-- Selected Service -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="font-medium text-gray-700 mb-2">Selected Service</h3>
                            <div class="flex items-center">
                                <i class="fas fa-stethoscope text-purple-600 mr-3"></i>
                                <p>Vet Checkup</p>
                            </div>
                        </div>
                        
                        <!-- Selected Pet -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="font-medium text-gray-700 mb-2">For Pet</h3>
                            <div class="flex items-center">
                                <img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Max" class="w-10 h-10 rounded-full object-cover mr-3">
                                <div>
                                    <p class="font-medium">Max</p>
                                    <p class="text-sm text-gray-500">Golden Retriever • 3 years</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Appointment Details -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="font-medium text-gray-700 mb-2">Appointment</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Date:</span>
                                    <span>June 15, 2024</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Time:</span>
                                    <span>10:00 AM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500">Duration:</span>
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Price Summary -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="font-medium text-gray-700 mb-2">Pricing</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span>Vet Checkup</span>
                                    <span>$45.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Tax</span>
                                    <span>$3.15</span>
                                </div>
                                <div class="flex justify-between border-t border-gray-200 pt-2 font-medium">
                                    <span>Total</span>
                                    <span>$48.15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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

    <script>
        // Simple animation trigger
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation class to form after short delay
            setTimeout(() => {
                const form = document.querySelector('form');
                if (form) {
                    form.classList.add('slide-up');
                }
            }, 100);
            
            // Update summary when form changes
            document.querySelectorAll('input, select, textarea').forEach(element => {
                element.addEventListener('change', updateSummary);
            });
            
            function updateSummary() {
                // In a real app, you would update the summary section
                // based on the selected options
                console.log('Form updated - would refresh summary here');
            }
        });
    </script>
</body>
</html>