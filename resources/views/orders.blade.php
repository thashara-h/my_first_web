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
<body class="bg-gradient-to-br from-light to-white">
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
        <!-- Page Heading -->
        <div class="text-center mb-12 fade-in ">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">My Orders</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                View your past and current pet product orders
            </p>
        </div>

        <!-- Orders Section -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden slide-up">
            <!-- Order Tabs -->
            <div class="border-b border-gray-200">
                <nav class="flex -mb-px">
                    <a href="#" class="border-b-2 border-purple-500 py-4 px-6 text-sm font-medium text-purple-600">
                        All Orders
                    </a>
                    
                </nav>
            </div>

            <!-- Orders List -->
            <div class="divide-y divide-gray-200">
                <!-- Order 1 -->
                <div class="p-6 hover:bg-gray-300 transition">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                        <!-- Order Info -->
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center space-x-4">
                                <div class="bg-purple-100 p-3 rounded-lg">
                                    <i class="fas fa-box-open text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">Order #PM-1001</h3>
                                    <p class="text-sm text-gray-500">Placed on Jun 15, 2023</p>
                                </div>
                            </div>
                        </div>

                        <!-- Order Status -->
                        <div class="mb-4 md:mb-0">
                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                Delivered
                            </span>
                        </div>

                        <!-- Order Total -->
                        <div class="mb-4 md:mb-0">
                            <p class="text-lg font-medium text-gray-800">$48.75</p>
                        </div>

                        <!-- Order Actions -->
                        <div>
                            <button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 view-order-btn">
                                <i class="fas fa-eye mr-2"></i> View Details
                            </button>
                        </div>
                    </div>

                    <!-- Order Items Preview -->
                    <div class="mt-4">
                        <h4 class="text-sm font-medium text-gray-500 mb-2">Items:</h4>
                        <div class="flex space-x-4 overflow-x-auto pb-2">
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1581888227599-779811939961?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Dog Food" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1591769225440-811ad7d6eab2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cat Toy" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Pet Shampoo" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order 2 -->
                <div class="p-6 hover:bg-gray-300 transition">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                        <!-- Order Info -->
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center space-x-4">
                                <div class="bg-purple-100 p-3 rounded-lg">
                                    <i class="fas fa-box-open text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">Order #PM-1002</h3>
                                    <p class="text-sm text-gray-500">Placed on Jun 10, 2023</p>
                                </div>
                            </div>
                        </div>

                        <!-- Order Status -->
                        <div class="mb-4 md:mb-0">
                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                Shipped
                            </span>
                        </div>

                        <!-- Order Total -->
                        <div class="mb-4 md:mb-0">
                            <p class="text-lg font-medium text-gray-800">$32.99</p>
                        </div>

                        <!-- Order Actions -->
                        <div>
                            <button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 view-order-btn">
                                <i class="fas fa-eye mr-2"></i> View Details
                            </button>
                        </div>
                    </div>

                    <!-- Order Items Preview -->
                    <div class="mt-4">
                        <h4 class="text-sm font-medium text-gray-500 mb-2">Items:</h4>
                        <div class="flex space-x-4 overflow-x-auto pb-2">
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Dog Collar" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1591946614720-90a587da4a36?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cat Bed" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order 3 -->
                <div class="p-6 hover:bg-gray-300 transition">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                        <!-- Order Info -->
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center space-x-4">
                                <div class="bg-purple-100 p-3 rounded-lg">
                                    <i class="fas fa-box-open text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">Order #PM-1003</h3>
                                    <p class="text-sm text-gray-500">Placed on Jun 5, 2023</p>
                                </div>
                            </div>
                        </div>

                        <!-- Order Status -->
                        <div class="mb-4 md:mb-0">
                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                                Processing
                            </span>
                        </div>

                        <!-- Order Total -->
                        <div class="mb-4 md:mb-0">
                            <p class="text-lg font-medium text-gray-800">$65.20</p>
                        </div>

                        <!-- Order Actions -->
                        <div>
                            <button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 view-order-btn">
                                <i class="fas fa-eye mr-2"></i> View Details
                            </button>
                        </div>
                    </div>

                    <!-- Order Items Preview -->
                    <div class="mt-4">
                        <h4 class="text-sm font-medium text-gray-500 mb-2">Items:</h4>
                        <div class="flex space-x-4 overflow-x-auto pb-2">
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Pet Carrier" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1591769225440-811ad7d6eab2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cat Toy" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Pet Shampoo" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 bg-gray-50 flex items-center justify-between">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Next
                    </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">8</span> orders
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-purple-50 border-purple-500 text-purple-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                1
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                2
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                3
                            </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Order Detail Modal -->
    <div id="orderModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                    Order Details
                                </h3>
                                <button type="button" class="close-modal text-gray-400 hover:text-gray-500">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="mt-2">
                                <!-- Order Details Content -->
                                <div class="bg-gray-50 p-4 rounded-lg mb-4">
                                    <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div>
                                            <p class="text-sm text-gray-500">Order Number</p>
                                            <p class="font-medium">PM-1001</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-500">Date Placed</p>
                                            <p class="font-medium">Jun 15, 2023</p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-500">Status</p>
                                            <p class="font-medium"><span class="px-2 py-1 rounded-full text-xs bg-green-100 text-green-800">Delivered</span></p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-500">Total Amount</p>
                                            <p class="font-medium">$48.75</p>
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-200 pt-4">
                                        <p class="text-sm text-gray-500 mb-2">Shipping Address</p>
                                        <p class="font-medium">123 Pet Lover Lane<br>New York, NY 10001<br>United States</p>
                                    </div>
                                </div>

                                <!-- Order Items -->
                                <div class="mb-6">
                                    <h4 class="text-lg font-medium text-gray-900 mb-3">Order Items</h4>
                                    <div class="space-y-4">
                                        <!-- Item 1 -->
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Pet Carrier" class="w-full h-full object-cover">
                                            </div>
                                            <div class="ml-4 flex-1">
                                                <div class="flex justify-between">
                                                    <p class="text-sm font-medium text-gray-900">Premium Pet Carrier</p>
                                                    <p class="text-sm font-medium text-gray-900">$29.99</p>
                                                </div>
                                                <p class="text-sm text-gray-500">Quantity: 1</p>
                                            </div>
                                        </div>
                                        <!-- Item 2 -->
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1591769225440-811ad7d6eab2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="Cat Toy" class="w-full h-full object-cover">
                                            </div>
                                            <div class="ml-4 flex-1">
                                                <div class="flex justify-between">
                                                    <p class="text-sm font-medium text-gray-900">Interactive Cat Toy</p>
                                                    <p class="text-sm font-medium text-gray-900">$12.99</p>
                                                </div>
                                                <p class="text-sm text-gray-500">Quantity: 2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Order Summary -->
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                                        <span>Subtotal</span>
                                        <span>$55.97</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                                        <span>Shipping</span>
                                        <span>$5.99</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600 mb-1">
                                        <span>Tax</span>
                                        <span>$4.79</span>
                                    </div>
                                    <div class="flex justify-between text-base font-medium text-gray-900 mt-3 pt-3 border-t border-gray-200">
                                        <span>Total</span>
                                        <span>$66.75</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Track Order
                    </button>
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm close-modal">
                        Close
                    </button>
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

    <script>
        // Order modal functionality
        document.querySelectorAll('.view-order-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('orderModal').classList.remove('hidden');
            });
        });

        document.querySelectorAll('.close-modal').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('orderModal').classList.add('hidden');
            });
        });

        // Close modal when clicking outside
        document.getElementById('orderModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>
</body>
</html>