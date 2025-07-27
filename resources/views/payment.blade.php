<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | PetCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Progress Bar -->
        <div class="flex justify-between items-center mb-8 relative">
            <div class="absolute top-1/2 left-0 right-0 h-1 bg-gray-200 -z-10"></div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold">✓</div>
                <span class="mt-2 text-sm font-medium text-indigo-600">Cart</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold">✓</div>
                <span class="mt-2 text-sm font-medium text-indigo-600">Shipping</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold">3</div>
                <span class="mt-2 text-sm font-medium text-indigo-600">Payment</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">4</div>
                <span class="mt-2 text-sm font-medium text-gray-500">Confirm</span>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Payment Form -->
            <div class="md:w-2/3">
                <div class="bg-gray-200 rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold mb-6">Payment Method</h2>
                    
                    <div class="flex mb-6 border-b">
                        <button class="px-4 py-2 font-medium text-indigo-600 border-b-2 border-indigo-600">Credit Card</button>
                        <button class="px-4 py-2 font-medium text-gray-500">PayPal</button>
                    </div>
                    
                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Cardholder Name</label>
                            <input type="text" class="w-full px-3 py-2 border rounded-md">
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Card Number</label>
                            <div class="relative">
                                <input type="text" class="w-full px-3 py-2 border rounded-md" placeholder="1234 5678 9012 3456">
                                <div class="absolute right-3 top-2">
                                    <i class="fab fa-cc-visa text-2xl text-blue-800"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div>
                                <label class="block text-gray-700 mb-2">Expiration Date</label>
                                <input type="text" class="w-full px-3 py-2 border rounded-md" placeholder="MM/YY">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">CVC</label>
                                <input type="text" class="w-full px-3 py-2 border rounded-md" placeholder="123">
                            </div>
                        </div>
                        
                        <div class="flex justify-between">
                            <a href="/shipping" class="text-indigo-600 font-medium">← Return to Shipping</a>
                            <a href="/confirmation" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-6 rounded-md transition duration-200">
                                Pay Now
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="md:w-1/3">
                <div class="bg-gray-200 rounded-lg shadow-md p-6 sticky top-4">
                    <h3 class="text-lg font-semibold mb-4">Order Summary</h3>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span>$200</span>
                        </div>
                        <div class="flex justify-between text-green-600">
                            <span>Discount</span>
                            <span>-$30</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Shipping</span>
                            <span>FREE</span>
                        </div>
                        <div class="border-t border-gray-200 pt-3 flex justify-between font-bold text-lg">
                            <span>Total</span>
                            <span class="text-indigo-600">$170</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>
</html>