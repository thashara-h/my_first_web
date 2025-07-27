<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
    /* Scroll Animation */
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
<body class="bg-gray-50 dark:bg-gray-900"  x-data="dashboard">
    <div class="flex h-screen overflow-hidden">
        <!-- Mobile sidebar overlay -->
        <div x-show="mobileSidebarOpen" x-transition.opacity class="md:hidden fixed inset-0 bg-gray-900 bg-opacity-50 z-40"></div>

        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="bg-gradient-to-br from-petpurple to-gray dark:bg-gray-700 border-r border-gray-200 dark:border-gray-700">
                
                
                <!-- Navigation -->
                <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-4 space-y-2">
                        <nav class="space-y-1">
                            <!-- Dashboard -->
                             <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg bg-petpurple-50 text-petpurple-700 dark:bg-gray-700 dark:text-purple-300">
                             <i class="fas fa-tachometer-alt mr-3 text-petpurple-600 dark:text-purple-400"></i>
                                   Dashboard
                            </a>
                            
                            <!-- My Pets -->
                            <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg text-petgreen-600 hover:bg-cyan-600 hover:text-gray-900 dark:text-purple-300 dark:hover:bg-cyan-700 dark:hover:text-purple-100">
                              <i class="fas fa-paw mr-3 text-petgreen-600 dark:text-green-400"></i>
                              My Pets
                            </a>
                            
                            <!-- Bookings -->
                            <a href="/bookings" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg text-petgreen-600 hover:bg-cyan-600 hover:text-gray-900 dark:text-purple-300 dark:hover:bg-cyan-700 dark:hover:text-purple-100">
                            <i class="fas fa-calendar-alt mr-3 text-petblue-600 dark:text-blue-400"></i>
                            Bookings
                            <span class="ml-auto bg-petblue-100 text-petblue-800 text-xs px-2 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                            </a>
                            
                            <!-- Orders -->
                            <a href="/cart" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg text-petgreen-600 hover:bg-cyan-600 hover:text-gray-900 dark:text-purple-300 dark:hover:bg-cyan-700 dark:hover:text-purple-100">
                            <i class="fas fa-shopping-cart mr-3 text-yellow-600 dark:text-yellow-400"></i>
                             Cart
                            </a>
                            
                            <!-- Health -->
                            <a href="/pethealth" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg text-petgreen-600 hover:bg-cyan-600 hover:text-gray-900 dark:text-purple-300 dark:hover:bg-cyan-700 dark:hover:text-purple-100">
                            <i class="fas fa-heartbeat mr-3 text-red-500 dark:text-red-400"></i>
                            Pet Health
                            </a>

      
                            
                            
                            
                        </nav>
                    </div>
                    
                    <!-- Bottom section -->
                    <div class="px-4 pt-4 mt-auto">
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                            <!-- User profile -->
                            <div class="flex items-center px-2">
                            
                            <div class="ml-3">
                             
                             <a href="{{ route('profile.edit') }}" class="text-xs font-medium text-purple-500 hover:text-gray-700 dark:text-purple-400 dark:hover:text-purple-200">
                              View profile
                             </a>
                            </div>
                            </div>
                            
                           
                            
                            <!-- Logout -->
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center px-2 py-2 text-sm font-medium rounded-lg text-gray-900 hover:bg-gray-100 hover:text-gray-900 dark:text-purple-300 dark:hover:bg-gray-700 dark:hover:text-purple-100">
                            <i class="fas fa-sign-out-alt mr-3 text-gray-900 dark:text-purple-400"></i>
                            Log out
                            </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
                            <button @click="toggleDarkMode()" class="flex items-center px-2 py-2 text-sm font-medium rounded-lg text-gray-900 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700">
    <i x-show="!darkMode" class="fas fa-moon mr-3"></i>
    <i x-show="darkMode" class="fas fa-sun mr-3"></i>
    <span x-text="darkMode ? 'Light Mode' : 'Dark Mode'"></span>
</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Mobile header -->
            <div class="md:hidden flex items-center justify-between px-4 py-3 border-b border-gray-200 bg-white">
                <button @click="mobileSidebarOpen = true" class="text-gray-500 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center">
                    <i class="fas fa-paw text-petpurple text-xl mr-2"></i>
                    <span class="text-lg font-bold text-gray-800">PetCare</span>
                </div>
                <div class="w-6"></div> <!-- Spacer for alignment -->
            </div>
            
            <!-- Mobile sidebar -->
            <div x-show="mobileSidebarOpen" @click.away="mobileSidebarOpen = false" class="md:hidden fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform transition-transform duration-300 ease-in-out" :class="{'translate-x-0': mobileSidebarOpen, '-translate-x-full': !mobileSidebarOpen}">
                <div class="flex items-center justify-between h-16 px-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <i class="fas fa-paw text-petpurple text-xl mr-2"></i>
                        <span class="text-lg font-bold text-gray-800">PetCare</span>
                    </div>
                    <button @click="mobileSidebarOpen = false" class="text-gray-500 focus:outline-none">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div class="h-full overflow-y-auto py-4">
                    <!-- Same navigation as desktop sidebar -->
                    <nav class="px-4 space-y-1">
                        <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg bg-petpurple-50 text-petpurple-700">
                            <i class="fas fa-tachometer-alt mr-3 text-petpurple-600"></i>
                            Dashboard
                        </a>
                        <a href="#" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                            <i class="fas fa-paw mr-3 text-petgreen-600"></i>
                            My Pets
                        </a>
                        <!-- Other mobile menu items... -->
                    </nav>
                </div>
            </div>

            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gradient-to-br from-petpurple to-petgreen  dark:bg-gradient-to-br from-petblue to-petgreen dark:text-gray-100">
                <div class="max-w-7xl mx-auto">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-purple-300"> </h1>
                        <div class="flex space-x-3">
                            <button class="bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center">
                                <i class="fas fa-download mr-2"></i> Export
                            </button>
                            <button @click="showAddPetModal = true" class="bg-petgreen hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-plus mr-2"></i> Add New Pet
                            </button>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 scroll-animate">
                        <div class="bg-gradient-to-br from-primary to-light rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-petgreen-100 mr-4">
                                    <i class="fas fa-paw text-petgreen text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white">Total Pets</p>
                                    <p class="text-2xl font-semibold text-gray-800">3</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-primary to-light rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-petblue-100 mr-4">
                                    <i class="fas fa-calendar-alt text-petblue text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white">Upcoming Appointments</p>
                                    <p class="text-2xl font-semibold text-gray-800">2</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-primary to-light rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-yellow-100 mr-4">
                                    <i class="fas fa-shopping-cart text-yellow-600 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white">Pending Orders</p>
                                    <p class="text-2xl font-semibold text-gray-800">1</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-primary to-light rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-red-100 mr-4">
                                    <i class="fas fa-heartbeat text-red-500 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-white">Health Alerts</p>
                                    <p class="text-2xl font-semibold text-gray-800">1</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- My Pets Section -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 mb-6 ">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">My Pets</h2>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <template x-for="pet in pets" :key="pet.id">
                             <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow
                                    border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                             <img :src="pet.photo" :alt="pet.name" class="w-full h-48 object-cover">
                        <div class="p-4">
                        <div class="flex justify-between items-start">
                          <h3 class="text-lg font-medium text-gray-800 dark:text-gray-100" x-text="pet.name"></h3>
                          <span x-text="pet.type.charAt(0).toUpperCase() + pet.type.slice(1)" 
                      :class="{
                          'bg-blue-100 text-blue-800': pet.type === 'dog',
                          'bg-purple-100 text-purple-800': pet.type === 'cat',
                          'bg-yellow-100 text-yellow-800': pet.type === 'bird',
                          'bg-blue-100 text-blue-800': pet.type === 'fish',
                          'bg-gray-100 text-gray-800': pet.type === 'other'
                      }" 
                      class="text-xs px-2 py-1 rounded-full"></span>
            </div>
            <p class="text-gray-600 mt-1">
                <span class="font-medium">Age:</span> 
                <span x-text="pet.age + ' years'"></span>
            </p>
            <div class="mt-2 flex items-center">
                <span :class="'h-2 w-2 rounded-full bg-' + getHealthStatusColor(pet.healthStatus) + '-500 mr-2'"></span>
                <span :class="'text-sm text-' + getHealthStatusColor(pet.healthStatus) + '-600'" 
                      x-text="getHealthStatusText(pet.healthStatus)"></span>
            </div>
            <div class="mt-3 flex space-x-2">
                <button class="text-blue-400 hover:text-petgreen">
                    <i class="fas fa-calendar-alt mr-1"></i> Book
                </button>
                <button class="text-green-300 hover:text-petgreen">
                    <i class="fas fa-notes-medical mr-1"></i> Health
                </button>
                <button @click="removePet(pet.id)" 
            class="text-red-600 hover:text-petgreen">
        <i class="fas fa-trash-alt mr-1"></i> Remove
    </button>
            </div>
        </div>
    </div>
</template>
                            
                            <!-- Add New Pet Card -->
                            <div @click="showAddPetModal = true" class="border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center hover:border-petgreen hover:bg-green-50 transition-colors cursor-pointer">
                                <div class="text-center p-6">
                                    <i class="fas fa-plus text-4xl text-gray-400 mb-2 hover:text-petgreen"></i>
                                    <p class="text-gray-600 font-medium">Add New Pet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upcoming Appointments -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8c">
                        <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-700">
                            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-100 mb-6">Upcoming Appointments</h2>
                            
                            <div class="space-y-4">
                                <!-- Appointment 1 -->
                                <div class="border-l-4 border-petblue pl-4 py-2">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <h3 class="font-medium text-gray-800 dark:text-purple-300 dark:text-gray-100">Vet Checkup</h3>
                                            <p class="text-sm text-gray-500 dark:text-gray-100">Tomorrow • 2:30 PM</p>
                                        </div>
                                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Confirmed</span>
                                    </div>
                                    <p class="text-sm mt-1 text-gray-600 dark:text-gray-100"><i class="fas fa-paw mr-2 text-petgreen"></i>Max • Dr. Smith at PetCare Clinic</p>
                                </div>
                                
                                <!-- Appointment 2 -->
                                <div class="border-l-4 border-petpurple pl-4 py-2">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <h3 class="font-medium text-gray-800 dark:text-purple-300 dark:text-gray-100">Grooming Session</h3>
                                            <p class="text-sm text-gray-500 dark:text-gray-100">Friday • 10:00 AM</p>
                                        </div>
                                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Pending</span>
                                    </div>
                                    <p class="text-sm mt-1 text-gray-600 dark:text-gray-100"><i class="fas fa-paw mr-2 text-petpurple"></i>Luna • Fluffy Paws Grooming</p>
                                </div>
                            </div>
                            
                            <button class="mt-4 w-full bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center justify-center">
                                <i class="fas fa-calendar-plus mr-2"></i> Schedule New Appointment
                            </button>
                        </div>
                        
                        <!-- Health Reminders -->
                        <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-700">
                            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-100 mb-6">Health Reminders</h2>
                            
                            <div class="space-y-4">
                                <!-- Reminder 1 -->
                                <div class="flex items-start p-3 bg-red-50 rounded-lg">
                                    <div class="bg-red-100 p-2 rounded-full mr-4">
                                        <i class="fas fa-syringe text-red-500"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800">Vaccination Due</h3>
                                        <p class="text-sm text-gray-500">Rabies vaccine for Luna</p>
                                        <p class="text-xs text-red-500 mt-1"><i class="fas fa-clock mr-1"></i> Due in 2 weeks</p>
                                    </div>
                                </div>
                                
                                <!-- Reminder 2 -->
                                <div class="flex items-start p-3 bg-blue-50 rounded-lg">
                                    <div class="bg-blue-100 p-2 rounded-full mr-4">
                                        <i class="fas fa-pills text-blue-500"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800">Medication Refill</h3>
                                        <p class="text-sm text-gray-500">Heartworm prevention for Max</p>
                                        <p class="text-xs text-blue-500 mt-1"><i class="fas fa-clock mr-1"></i> Due in 1 month</p>
                                    </div>
                                </div>
                                
                                <!-- Reminder 3 -->
                                <div class="flex items-start p-3 bg-green-50 rounded-lg">
                                    <div class="bg-green-100 p-2 rounded-full mr-4">
                                        <i class="fas fa-weight text-green-500"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800">Weight Check</h3>
                                        <p class="text-sm text-gray-500">Monthly weight monitoring for Luna</p>
                                        <p class="text-xs text-green-500 mt-1"><i class="fas fa-clock mr-1"></i> Due next week</p>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="mt-4 w-full bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center justify-center">
                                <i class="fas fa-bell mr-2"></i> View All Reminders
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Add Pet Modal -->
    <div x-show="showAddPetModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div @click.away="showAddPetModal = false" class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-gray-800">Add New Pet</h3>
                <button @click="showAddPetModal = false" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form @submit.prevent="addPet">
                <div class="space-y-4">
                    <!-- Pet Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pet Name</label>
                        <input x-model="newPet.name" type="text" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple">
                    </div>
                    
                    <!-- Pet Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pet Type</label>
                        <select x-model="newPet.type" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple">
                            <option value="">Select type</option>
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                            <option value="bird">Bird</option>
                            <option value="fish">Fish</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <!-- Age -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Age</label>
                        <div class="flex items-center">
                            <input x-model="newPet.age" type="number" min="0" required
                                   class="w-20 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple">
                            <span class="ml-2 text-gray-600">years</span>
                        </div>
                    </div>
                    
                    <!-- Health Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Health Status</label>
                        <select x-model="newPet.healthStatus" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple">
                            <option value="">Select status</option>
                            <option value="excellent">Excellent</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="needs_checkup">Needs Checkup</option>
                        </select>
                    </div>
                    
                    <!-- Photo Upload -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1 dark:text-gray-300">Pet Photo</label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                                <template x-if="newPet.photoPreview">
                                    <img :src="newPet.photoPreview" class="h-full w-full object-cover">
                                </template>
                                <template x-if="!newPet.photoPreview">
                                    <i class="fas fa-paw text-gray-400 dark:text-gray-500 h-full w-full flex items-center justify-center"></i>
                                </template>
                            </span>
                            <label class="ml-4 bg-white dark:bg-gray-700 py-2 px-3 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-petpurple cursor-pointer">
                            <i class="fas fa-upload mr-1"></i> Upload
                            <input type="file" class="sr-only" accept="image/*" @change="handlePhotoUpload">
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" @click="showAddPetModal = false" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-petpurple hover:bg-purple-700">
                        Add Pet
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>

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


    <script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dashboard', () => ({
            // Dark mode state
            darkMode: localStorage.getItem('darkMode') === 'true' || false,
            
            init() {
                // Apply saved mode on load
                this.applyMode();
                // Watch for system preference changes
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    this.darkMode = e.matches;
                    this.applyMode();
                });
            },
            
            toggleDarkMode() {
                this.darkMode = !this.darkMode;
                localStorage.setItem('darkMode', this.darkMode);
                this.applyMode();
            },
            
            applyMode() {
                if (this.darkMode) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            },
            
            // Mobile sidebar state
            mobileSidebarOpen: false,
            
            // Add pet modal state
            showAddPetModal: false,
            
            // Pets data
            pets: [
                {
                    id: 1,
                    name: 'Max',
                    type: 'dog',
                    age: 3,
                    healthStatus: 'excellent',
                    photo: 'https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80'
                },
                {
                    id: 2,
                    name: 'Luna',
                    type: 'cat',
                    age: 1.5,
                    healthStatus: 'needs_checkup',
                    photo: 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80'
                }
            ],
            
            // New pet form data
            newPet: {
                name: '',
                type: '',
                age: '',
                healthStatus: '',
                photoFile: null,
                photoPreview: null
            },
            
            // Default photos
            defaultPhotos: {
                dog: 'https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80',
                cat: 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80',
                bird: 'https://images.unsplash.com/photo-1555169062-013468b47731?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80',
                fish: 'https://images.unsplash.com/photo-1535591273668-578e31182c4f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80',
                other: 'https://images.unsplash.com/photo-1452570053594-1b985d6ea890?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80'
            },
            
            // Handle photo upload
            handlePhotoUpload(event) {
                const file = event.target.files[0];
                if (file && file.type.match('image.*')) {
                    this.newPet.photoFile = file;
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        this.newPet.photoPreview = e.target.result;
                    };
                    reader.readAsDataURL(file);
                    // Reset input to allow re-uploads of same file
                    event.target.value = '';
                } else {
                    alert('Please select a valid image file (JPEG, PNG, etc.)');
                }
            },
            
            // Add new pet
            addPet() {
                // Validate required fields
                if (!this.newPet.name || !this.newPet.type || !this.newPet.healthStatus) {
                    alert('Please fill in all required fields');
                    return;
                }
                
                // Generate ID
                const newId = this.pets.length > 0 ? Math.max(...this.pets.map(pet => pet.id)) + 1 : 1;
                
                // Create new pet
                const newPet = {
                    id: newId,
                    name: this.newPet.name,
                    type: this.newPet.type,
                    age: parseInt(this.newPet.age) || 0,
                    healthStatus: this.newPet.healthStatus,
                    photo: this.newPet.photoPreview || this.defaultPhotos[this.newPet.type] || this.defaultPhotos.other
                };
                
                // Add to pets array
                this.pets.push(newPet);
                
                // Reset form and close modal
                this.resetPetForm();
                this.showAddPetModal = false;
                
                // Show success
                alert(`${newPet.name} added successfully!`);
            },
            
            // Reset pet form
            resetPetForm() {
                this.newPet = {
                    name: '',
                    type: '',
                    age: '',
                    healthStatus: '',
                    photoFile: null,
                    photoPreview: null
                };
            },
            
            // Remove pet
            removePet(petId) {
                if (confirm('Are you sure you want to remove this pet?')) {
                    this.pets = this.pets.filter(pet => pet.id !== petId);
                }
            },
            
            // Get health status text
            getHealthStatusText(status) {
                const statusMap = {
                    excellent: 'Excellent health',
                    good: 'Good health',
                    fair: 'Fair health',
                    needs_checkup: 'Needs checkup'
                };
                return statusMap[status] || status;
            },
            
            // Get health status color classes
            getHealthStatusClasses(status) {
                return {
                    text: {
                        excellent: 'text-green-600 dark:text-green-400',
                        good: 'text-blue-600 dark:text-blue-400',
                        fair: 'text-yellow-600 dark:text-yellow-400',
                        needs_checkup: 'text-red-600 dark:text-red-400'
                    }[status] || 'text-gray-600 dark:text-gray-400',
                    bg: {
                        excellent: 'bg-green-500',
                        good: 'bg-blue-500',
                        fair: 'bg-yellow-500',
                        needs_checkup: 'bg-red-500'
                    }[status] || 'bg-gray-500'
                };
            },
            
            // Get type badge classes
            getTypeBadgeClasses(type) {
                return {
                    dog: 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200',
                    cat: 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200',
                    bird: 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200',
                    fish: 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200',
                    other: 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200'
                }[type] || 'bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200';
            }
        }));
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get all elements with scroll-animate class
  const animateElements = document.querySelectorAll('.scroll-animate');
  
  // Function to check if element is in viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.75
    );
  }
  
  // Function to run on scroll
  function runOnScroll() {
    animateElements.forEach(element => {
      if (isInViewport(element)) {
        element.classList.add('animate');
      }
    });
  }
  
  // Initial check
  runOnScroll();
  
  // Add scroll event listener
  window.addEventListener('scroll', runOnScroll);
});
</script>
</body>
</html>