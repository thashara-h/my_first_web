<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | PetCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        petgreen: '#6805b9ff',
                        petblue: '#02127bff',
                        petpurple: '#07a6a6',
                        primary: '#5a058f', 
                        accent: '#8d9494',   
                        light: '#07a6a6',
                        dark: '#1F1A36',
                    }
                }
            }
        }
    </script>
    <style>
        .scroll-animate {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .scroll-animate.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
    </style>
</head>
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
      </ul>
    </nav>

    <!-- Right side elements -->
    <div class="flex items-center space-x-6">
      

      

      
    </div>
  </div>
</header>
<body class="bg-gray-50 dark:bg-gray-900" x-data="adminDashboard">
    <div class="flex h-screen overflow-hidden">
        <!-- Mobile sidebar overlay -->
        <div x-show="mobileSidebarOpen" x-transition.opacity class="md:hidden fixed inset-0 bg-gray-900 bg-opacity-50 z-40"></div>

        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0 bg-gradient-to-br from-petpurple to-gray dark:from-dark dark:to-gray-800 border-r border-gray-200 dark:border-gray-700">
            <div class="flex flex-col w-full">
                <!-- Logo -->
                <div class="flex items-center justify-center h-16 px-4 border-b border-gray-700">
                    <div class="flex items-center group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-400 to-blue-500 flex items-center justify-center shadow-md transform group-hover:rotate-12 transition duration-300 mr-2">
                            <span class="text-white text-xl">🐾</span>
                        </div>
                        <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-600">PetCare Admin</span>
                    </div>
                </div>
                
                <!-- CRUD Navigation -->
                <div class="flex-1 overflow-y-auto py-4">
                    <nav>
                        <!-- Dashboard -->
                        <div class="px-4 py-2">
                            <a href="#" @click="activeCrudSection = ''" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg bg-petpurple text-white dark:bg-gray-700 dark:text-purple-300">
                                <i class="fas fa-tachometer-alt mr-3 text-white dark:text-purple-400"></i>
                                Dashboard 
                            </a>
                        </div>
                        
                        <!-- Pets CRUD -->
                        <div class="px-4 py-2">
                            <button @click="activeCrudSection = 'pets'" 
                                    :class="{'bg-petpurple text-white dark:bg-gray-700': activeCrudSection === 'pets'}"
                                    class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                <span><i class="fas fa-paw mr-3"></i> Manage Pets</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200" 
                                   :class="{'rotate-180': activeCrudSection === 'pets'}"></i>
                            </button>
                            <div x-show="activeCrudSection === 'pets'" class="mt-2 pl-8 space-y-1">
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-list mr-2"></i> View All Pets
                                </a>
                                <a href="#" @click="showAddPetModal = true" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-plus-circle mr-2"></i> Add New Pet
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-edit mr-2"></i> Edit Pets
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-trash-alt mr-2"></i> Delete Pets
                                </a>
                            </div>
                        </div>
                        
                        <!-- Users CRUD -->
                        <div class="px-4 py-2">
                            <button @click="activeCrudSection = 'users'" 
                                    :class="{'bg-petpurple text-white dark:bg-gray-700': activeCrudSection === 'users'}"
                                    class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                <span><i class="fas fa-users mr-3"></i> Manage Users</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200" 
                                   :class="{'rotate-180': activeCrudSection === 'users'}"></i>
                            </button>
                            <div x-show="activeCrudSection === 'users'" class="mt-2 pl-8 space-y-1">
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-list mr-2"></i> View All Users
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-user-plus mr-2"></i> Add New User
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-user-edit mr-2"></i> Edit Users
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-user-times mr-2"></i> Delete Users
                                </a>
                            </div>
                        </div>
                        
                        <!-- Appointments CRUD -->
                        <div class="px-4 py-2">
                            <button @click="activeCrudSection = 'appointments'" 
                                    :class="{'bg-petpurple text-white dark:bg-gray-700': activeCrudSection === 'appointments'}"
                                    class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                <span><i class="fas fa-calendar-alt mr-3"></i> Manage Appointments</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200" 
                                   :class="{'rotate-180': activeCrudSection === 'appointments'}"></i>
                            </button>
                            <div x-show="activeCrudSection === 'appointments'" class="mt-2 pl-8 space-y-1">
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-list mr-2"></i> View All Appointments
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-plus-circle mr-2"></i> Schedule Appointment
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-edit mr-2"></i> Edit Appointments
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-trash-alt mr-2"></i> Cancel Appointments
                                </a>
                            </div>
                        </div>
                        
                        <!-- Products CRUD -->
                        <div class="px-4 py-2">
                            <button @click="activeCrudSection = 'products'" 
                                    :class="{'bg-petpurple text-white dark:bg-gray-700': activeCrudSection === 'products'}"
                                    class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                <span><i class="fas fa-shopping-bag mr-3"></i> Manage Products</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200" 
                                   :class="{'rotate-180': activeCrudSection === 'products'}"></i>
                            </button>
                            <div x-show="activeCrudSection === 'products'" class="mt-2 pl-8 space-y-1">
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-list mr-2"></i> View All Products
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-plus-circle mr-2"></i> Add New Product
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-edit mr-2"></i> Edit Products
                                </a>
                                <a href="#" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                    <i class="fas fa-trash-alt mr-2"></i> Delete Products
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                
                <!-- Bottom section -->
                <div class="px-4 pt-4 mt-auto">
                    <div class="border-t border-gray-700 pt-4">
                        <!-- User profile -->
                        <div class="flex items-center px-2 mb-4">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Admin" class="w-10 h-10 rounded-full">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-white dark:text-gray-200">Admin User</p>
                                <a href="{{ route('profile.edit') }}" class="text-xs font-medium text-purple-300 hover:text-white">
                                    View profile
                                </a>
                            </div>
                        </div>
                        
                        <!-- Dark mode toggle -->
                        <button @click="toggleDarkMode()" class="flex items-center w-full px-2 py-2 text-sm font-medium rounded-lg text-white hover:bg-petpurple dark:hover:bg-gray-700">
                            <i x-show="!darkMode" class="fas fa-moon mr-3"></i>
                            <i x-show="darkMode" class="fas fa-sun mr-3"></i>
                            <span x-text="darkMode ? 'Light Mode' : 'Dark Mode'"></span>
                        </button>
                        
                        <!-- Logout -->
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center px-2 py-2 text-sm font-medium rounded-lg text-white hover:bg-petpurple dark:hover:bg-gray-700">
                            <i class="fas fa-sign-out-alt mr-3"></i>
                            Log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Mobile header -->
            <div class="md:hidden flex items-center justify-between px-4 py-3 border-b border-gray-200 bg-gradient-to-r from-petpurple to-petblue dark:from-dark dark:to-gray-800">
                <button @click="mobileSidebarOpen = true" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-blue-500 rounded-full flex items-center justify-center shadow-md mr-2">
                        <span class="text-white text-sm">🐾</span>
                    </div>
                    <span class="text-lg font-bold text-white">PetCare Admin</span>
                </div>
                <div class="w-6"></div>
            </div>
            
            <!-- Mobile sidebar -->
            <div x-show="mobileSidebarOpen" @click.away="mobileSidebarOpen = false" class="md:hidden fixed inset-y-0 left-0 z-50 w-64 bg-gradient-to-br from-petpurple to-petgreen shadow-lg transform transition-transform duration-300 ease-in-out" :class="{'translate-x-0': mobileSidebarOpen, '-translate-x-full': !mobileSidebarOpen}">
                <div class="flex items-center justify-between h-16 px-4 border-b border-gray-700">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-blue-500 rounded-full flex items-center justify-center shadow-md mr-2">
                            <span class="text-white text-sm">🐾</span>
                        </div>
                        <span class="text-lg font-bold text-white">PetCare Admin</span>
                    </div>
                    <button @click="mobileSidebarOpen = false" class="text-white focus:outline-none">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div class="h-full overflow-y-auto py-4">
                    <!-- Same navigation as desktop sidebar -->
                    <nav class="px-4 space-y-1">
                        <a href="#" @click="activeCrudSection = ''; mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg bg-petpurple text-white">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                        
                        <!-- Pets -->
                        <div>
                            <button @click="activeCrudSection = activeCrudSection === 'pets' ? '' : 'pets'" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                                <span><i class="fas fa-paw mr-3"></i> Manage Pets</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="{'rotate-180': activeCrudSection === 'pets'}"></i>
                            </button>
                            <div x-show="activeCrudSection === 'pets'" class="mt-2 pl-8 space-y-1">
                                <a href="#" @click="mobileSidebarOpen = false" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white">
                                    <i class="fas fa-list mr-2"></i> View All Pets
                                </a>
                                <a href="#" @click="showAddPetModal = true; mobileSidebarOpen = false" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white">
                                    <i class="fas fa-plus-circle mr-2"></i> Add New Pet
                                </a>
                                <a href="#" @click="mobileSidebarOpen = false" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white">
                                    <i class="fas fa-edit mr-2"></i> Edit Pets
                                </a>
                                <a href="#" @click="mobileSidebarOpen = false" class="block px-3 py-2 text-sm rounded-lg hover:bg-petpurple hover:text-white">
                                    <i class="fas fa-trash-alt mr-2"></i> Delete Pets
                                </a>
                            </div>
                        </div>
                        
                        <!-- Other mobile menu items... -->
                    </nav>
                </div>
            </div>

            <!-- Content Area -->
            <main class="p-6 bg-gradient-to-br from-petpurple to-petgreen dark:from-petpurple dark:to-gray-900">
                <div class="max-w-7xl mx-auto">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white" x-text="getActiveSectionTitle()"></h1>
                        <div class="flex space-x-3">
                            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 flex items-center">
                                <i class="fas fa-download mr-2"></i> Export
                            </button>
                            <template x-if="activeCrudSection === 'pets'">
                                <button @click="showAddPetModal = true" class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                    <i class="fas fa-plus mr-2"></i> Add New Pet
                                </button>
                            </template>
                            <template x-if="activeCrudSection === 'users'">
                                <button class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                    <i class="fas fa-user-plus mr-2"></i> Add New User
                                </button>
                            </template>
                        </div>
                    </div>

                    <!-- Dashboard Overview (Default) -->
                    <div x-show="activeCrudSection === ''" class="space-y-6 scroll-animate  ">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Stats Cards -->
                            <div class="bg-gradient-to-br from-primary to-light dark:from-dark dark:to-gray-700 rounded-lg shadow p-6">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-petgreen-100 text-petgreen mr-4">
                                        <i class="fas fa-paw text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-white">Total Pets</p>
                                        <p class="text-2xl font-semibold text-white">142</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-br from-primary to-light dark:from-dark dark:to-gray-700 rounded-lg shadow p-6">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                                        <i class="fas fa-users text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-white">Total Users</p>
                                        <p class="text-2xl font-semibold text-white">87</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-br from-primary to-light dark:from-dark dark:to-gray-700 rounded-lg shadow p-6">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                                        <i class="fas fa-calendar-alt text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-white">Today's Appointments</p>
                                        <p class="text-2xl font-semibold text-white">12</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-br from-primary to-light dark:from-dark dark:to-gray-700 rounded-lg shadow p-6">
                                <div class="flex items-center">
                                    <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                                        <i class="fas fa-shopping-bag text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-white">Products</p>
                                        <p class="text-2xl font-semibold text-white">56</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recent Activity -->
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                            <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Recent Activity</h2>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="p-2 bg-blue-100 text-blue-600 rounded-full mr-3">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800 dark:text-gray-200">New pet "Bella" added</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">2 hours ago by Dr. Smith</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="p-2 bg-green-100 text-green-600 rounded-full mr-3">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Appointment completed</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Today at 10:30 AM</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="p-2 bg-yellow-100 text-yellow-600 rounded-full mr-3">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-800 dark:text-gray-200">Low stock alert for Dog Food</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Yesterday at 4:15 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CRUD Content Sections -->
                    <!-- Pets Section -->
                    <div x-show="activeCrudSection === 'pets'" class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Manage Pets</h2>
                            <button @click="showAddPetModal = true" class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-plus mr-2"></i> Add New Pet
                            </button>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Type</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Owner</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Last Visit</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">Max</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">Dog</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">John Doe</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">2023-06-15</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</a>
                                        </td>
                                    </tr>
                                    <!-- More pet rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Users Section -->
                    <div x-show="activeCrudSection === 'users'" class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Manage Users</h2>
                            <button class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-user-plus mr-2"></i> Add New User
                            </button>
                        </div>
                        
                        <!-- Users table would go here -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Role</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Joined</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/1.jpg" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">Sarah Johnson</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">sarah@example.com</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Customer</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">2023-05-10</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</a>
                                        </td>
                                    </tr>
                                    <!-- More user rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Appointments Section -->
                    <div x-show="activeCrudSection === 'appointments'" class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Manage Appointments</h2>
                            <button class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-calendar-plus mr-2"></i> New Appointment
                            </button>
                        </div>
                        
                        <!-- Appointments table would go here -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Time</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Pet</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Service</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">2023-06-20</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">10:30 AM</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-8 w-8">
                                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                                                </div>
                                                <div class="ml-2">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">Max</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Annual Checkup</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Confirmed</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Cancel</a>
                                        </td>
                                    </tr>
                                    <!-- More appointment rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Products Section -->
                    <div x-show="activeCrudSection === 'products'" class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Manage Products</h2>
                            <button class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-plus-circle mr-2"></i> Add Product
                            </button>
                        </div>
                        
                        <!-- Products table would go here -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Product</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Category</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Price</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Stock</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded" src="https://m.media-amazon.com/images/I/71yZQ4wgu9L._AC_UF1000,1000_QL80_.jpg" alt="Dog Food">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">Premium Dog Food</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Food</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$24.99</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">In Stock</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded" src="https://m.media-amazon.com/images/I/61+Q6Rh5OIL._AC_UF1000,1000_QL80_.jpg" alt="Cat Toy">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-white">Interactive Cat Toy</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Toys</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">$12.99</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">Low Stock</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</a>
                                        </td>
                                    </tr>
                                    <!-- More product rows... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Add Pet Modal -->
    <div x-show="showAddPetModal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div x-show="showAddPetModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- Modal panel -->
            <div x-show="showAddPetModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-petpurple sm:mx-0 sm:h-10 sm:w-10">
                            <i class="fas fa-paw text-white"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white" id="modal-title">Add New Pet</h3>
                            <div class="mt-2">
                                <form class="space-y-4">
                                    <div>
                                        <label for="pet-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pet Name</label>
                                        <input type="text" id="pet-name" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 shadow-sm focus:border-petpurple focus:ring-petpurple sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="pet-type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pet Type</label>
                                        <select id="pet-type" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 shadow-sm focus:border-petpurple focus:ring-petpurple sm:text-sm">
                                            <option>Dog</option>
                                            <option>Cat</option>
                                            <option>Bird</option>
                                            <option>Rabbit</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="pet-breed" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Breed</label>
                                        <input type="text" id="pet-breed" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 shadow-sm focus:border-petpurple focus:ring-petpurple sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="pet-age" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Age</label>
                                        <input type="number" id="pet-age" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 shadow-sm focus:border-petpurple focus:ring-petpurple sm:text-sm">
                                    </div>
                                    <div>
                                        <label for="pet-owner" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Owner</label>
                                        <select id="pet-owner" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 shadow-sm focus:border-petpurple focus:ring-petpurple sm:text-sm">
                                            <option>Select Owner</option>
                                            <option>John Doe</option>
                                            <option>Sarah Johnson</option>
                                            <option>Michael Brown</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-petpurple text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-petpurple sm:ml-3 sm:w-auto sm:text-sm">
                        Add Pet
                    </button>
                    <button @click="showAddPetModal = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-600 text-base font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-petpurple sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
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
        document.addEventListener('alpine:init', () => {
            Alpine.data('adminDashboard', () => ({
                darkMode: localStorage.getItem('darkMode') === 'true',
                mobileSidebarOpen: false,
                activeCrudSection: '',
                showAddPetModal: false,
                
                init() {
                    // Check for saved dark mode preference
                    if (localStorage.getItem('darkMode') === null) {
                        // Default to system preference if no saved preference
                        this.darkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    }
                    
                    // Apply dark mode on init
                    this.toggleDarkMode(this.darkMode);
                    
                    // Set up scroll animations
                    this.setupScrollAnimations();
                },
                
                toggleDarkMode(value = null) {
                    this.darkMode = value !== null ? value : !this.darkMode;
                    localStorage.setItem('darkMode', this.darkMode);
                    
                    if (this.darkMode) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                },
                
                getActiveSectionTitle() {
                    if (!this.activeCrudSection) return 'Dashboard Overview';
                    
                    const titles = {
                        'pets': 'Manage Pets',
                        'users': 'Manage Users',
                        'appointments': 'Manage Appointments',
                        'products': 'Manage Products'
                    };
                    
                    return titles[this.activeCrudSection] || '';
                },
                
                setupScrollAnimations() {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('animate');
                            }
                        });
                    }, { threshold: 0.1 });
                    
                    document.querySelectorAll('.scroll-animate').forEach(el => {
                        observer.observe(el);
                    });
                }
            }));
        });
    </script>
</body>
</html>