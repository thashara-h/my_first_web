<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Health | PetCare Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
    <style>
        .fade-in { animation: fadeIn 0.5s ease-in; }
        .slide-up { animation: slideUp 0.5s ease-out; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes slideUp { from { transform: translateY(20px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        
        .health-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .progress-ring__circle {
            transition: stroke-dashoffset 0.5s ease;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-light  to-primary dark:bg-gray-900" x-data="petHealth">
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
    <div class="flex h-screen overflow-hidden">
        

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Mobile header (from your dashboard) -->
            
            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-6">
                <div class="max-w-7xl mx-auto">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-purple-300">Pet Health </h1>
                        <div class="flex space-x-3">
                            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 flex items-center">
                                <i class="fas fa-download mr-2"></i> Export Records
                            </button>
                            <button @click="showAddRecordModal = true" class="bg-petgreen hover:bg-green-600 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-plus mr-2"></i> Add Health Record
                            </button>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Vaccination Status -->
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6 health-card transition">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900 mr-4">
                                    <i class="fas fa-syringe text-blue-500 dark:text-blue-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Vaccinations Due</p>
                                    <p class="text-2xl font-semibold text-gray-800 dark:text-gray-100">2</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Medication Status -->
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6 health-card transition">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900 mr-4">
                                    <i class="fas fa-pills text-yellow-500 dark:text-yellow-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Active Medications</p>
                                    <p class="text-2xl font-semibold text-gray-800 dark:text-gray-100">3</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Weight Tracking -->
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6 health-card transition">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-green-100 dark:bg-green-900 mr-4">
                                    <i class="fas fa-weight text-green-500 dark:text-green-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Weight Change</p>
                                    <p class="text-2xl font-semibold text-gray-800 dark:text-gray-100">-0.5kg</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Health Alerts -->
                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6 health-card transition">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-red-100 dark:bg-red-900 mr-4">
                                    <i class="fas fa-exclamation-triangle text-red-500 dark:text-red-400 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Health Alerts</p>
                                    <p class="text-2xl font-semibold text-gray-800 dark:text-gray-100">1</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pet Selection -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Select Pet</label>
                        <div class="flex space-x-4 overflow-x-auto pb-2">
                            <template x-for="pet in pets" :key="pet.id">
                                <button 
                                    @click="selectPet(pet.id)"
                                    :class="{'ring-2 ring-petpurple': selectedPetId === pet.id}"
                                    class="flex-shrink-0 bg-white dark:bg-gray-700 p-3 rounded-lg shadow-sm hover:shadow-md transition"
                                >
                                    <img :src="pet.photo" :alt="pet.name" class="w-16 h-16 rounded-full object-cover mb-2 mx-auto">
                                    <p class="text-sm font-medium text-center" x-text="pet.name"></p>
                                </button>
                            </template>
                        </div>
                    </div>

                    <!-- Main Content Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Left Column -->
                        <div class="lg:col-span-2 space-y-6">
                            <!-- Health Alerts -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Health Alerts</h2>
                                    <span class="bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs px-2 py-1 rounded-full">1 New</span>
                                </div>
                                
                                <div class="space-y-4">
                                    <!-- Alert 1 -->
                                    <div class="flex items-start p-4 bg-red-50 dark:bg-red-900/30 rounded-lg">
                                        <div class="bg-red-100 dark:bg-red-800 p-2 rounded-full mr-4">
                                            <i class="fas fa-exclamation text-red-500 dark:text-red-300"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-800 dark:text-gray-100">Vaccination Due</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-300">Rabies vaccine for Max is overdue by 2 weeks</p>
                                            <p class="text-xs text-red-500 dark:text-red-300 mt-1"><i class="fas fa-clock mr-1"></i> Due Jun 15, 2023</p>
                                        </div>
                                        <button class="ml-auto text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    
                                    <!-- Alert 2 (resolved) -->
                                    <div class="flex items-start p-4 bg-gray-50 dark:bg-gray-600 rounded-lg opacity-75">
                                        <div class="bg-green-100 dark:bg-green-800 p-2 rounded-full mr-4">
                                            <i class="fas fa-check text-green-500 dark:text-green-300"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-800 dark:text-gray-100">Medication Completed</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-300">Antibiotics course for Luna finished</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1"><i class="fas fa-check-circle mr-1"></i> Resolved May 28, 2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Health Records -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Health Records</h2>
                                    <div class="flex space-x-2">
                                        <button class="text-gray-500 hover:text-petpurple dark:hover:text-purple-300">
                                            <i class="fas fa-filter"></i>
                                        </button>
                                        <button class="text-gray-500 hover:text-petpurple dark:hover:text-purple-300">
                                            <i class="fas fa-calendar-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                        <thead class="bg-gray-50 dark:bg-gray-600">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Type</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Details</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Vet</th>
                                                <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                            <template x-for="record in healthRecords" :key="record.id">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300" x-text="record.date"></td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span x-text="record.type" 
                                                              :class="{
                                                                  'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200': record.type === 'Vaccination',
                                                                  'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200': record.type === 'Checkup',
                                                                  'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200': record.type === 'Medication'
                                                              }" 
                                                              class="px-2 py-1 text-xs rounded-full"></span>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200" x-text="record.details"></td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300" x-text="record.vet"></td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <button class="text-petpurple hover:text-purple-700 dark:hover:text-purple-300 mr-3">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="text-blue-500 hover:text-blue-700 dark:hover:text-blue-300">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </template>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Pagination -->
                                <div class="mt-4 flex items-center justify-between">
                                    <div class="text-sm text-gray-500 dark:text-gray-400">
                                        Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">12</span> records
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            Previous
                                        </button>
                                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300">
                                            1
                                        </button>
                                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            2
                                        </button>
                                        <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Column -->
                        <div class="space-y-6">
                            <!-- Vaccination Progress -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Vaccination Status</h2>
                                
                                <div class="grid grid-cols-2 gap-4">
                                    <!-- Progress Circle 1 -->
                                    <div class="text-center">
                                        <div class="relative w-20 h-20 mx-auto mb-2">
                                            <svg class="progress-ring w-full h-full" viewBox="0 0 100 100">
                                                <circle class="progress-ring__circle-bg stroke-gray-200 dark:stroke-gray-600" stroke-width="8" fill="transparent" r="40" cx="50" cy="50"/>
                                                <circle class="progress-ring__circle stroke-green-500" stroke-width="8" fill="transparent" r="40" cx="50" cy="50" stroke-dasharray="251.2" stroke-dashoffset="50.24"/>
                                            </svg>
                                            <span class="absolute inset-0 flex items-center justify-center text-lg font-bold text-gray-800 dark:text-gray-100">80%</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Rabies</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Due: Sep 2023</p>
                                    </div>
                                    
                                    <!-- Progress Circle 2 -->
                                    <div class="text-center">
                                        <div class="relative w-20 h-20 mx-auto mb-2">
                                            <svg class="progress-ring w-full h-full" viewBox="0 0 100 100">
                                                <circle class="progress-ring__circle-bg stroke-gray-200 dark:stroke-gray-600" stroke-width="8" fill="transparent" r="40" cx="50" cy="50"/>
                                                <circle class="progress-ring__circle stroke-yellow-500" stroke-width="8" fill="transparent" r="40" cx="50" cy="50" stroke-dasharray="251.2" stroke-dashoffset="125.6"/>
                                            </svg>
                                            <span class="absolute inset-0 flex items-center justify-center text-lg font-bold text-gray-800 dark:text-gray-100">50%</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Distemper</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Due: Nov 2023</p>
                                    </div>
                                    
                                    <!-- Progress Circle 3 -->
                                    <div class="text-center">
                                        <div class="relative w-20 h-20 mx-auto mb-2">
                                            <svg class="progress-ring w-full h-full" viewBox="0 0 100 100">
                                                <circle class="progress-ring__circle-bg stroke-gray-200 dark:stroke-gray-600" stroke-width="8" fill="transparent" r="40" cx="50" cy="50"/>
                                                <circle class="progress-ring__circle stroke-red-500" stroke-width="8" fill="transparent" r="40" cx="50" cy="50" stroke-dasharray="251.2" stroke-dashoffset="200.96"/>
                                            </svg>
                                            <span class="absolute inset-0 flex items-center justify-center text-lg font-bold text-gray-800 dark:text-gray-100">20%</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Bordetella</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Due: Jan 2024</p>
                                    </div>
                                    
                                    <!-- Progress Circle 4 -->
                                    <div class="text-center">
                                        <div class="relative w-20 h-20 mx-auto mb-2">
                                            <svg class="progress-ring w-full h-full" viewBox="0 0 100 100">
                                                <circle class="progress-ring__circle-bg stroke-gray-200 dark:stroke-gray-600" stroke-width="8" fill="transparent" r="40" cx="50" cy="50"/>
                                                <circle class="progress-ring__circle stroke-purple-500" stroke-width="8" fill="transparent" r="40" cx="50" cy="50" stroke-dasharray="251.2" stroke-dashoffset="0"/>
                                            </svg>
                                            <span class="absolute inset-0 flex items-center justify-center text-lg font-bold text-gray-800 dark:text-gray-100">100%</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Leptospirosis</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Completed</p>
                                    </div>
                                </div>
                                
                                <button class="mt-4 w-full bg-gray-100 dark:bg-gray-600 hover:bg-gray-200 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200 py-2 rounded-lg text-sm font-medium transition">
                                    View All Vaccinations
                                </button>
                            </div>
                            
                            <!-- Weight Tracking -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Weight Tracking</h2>
                                
                                <div class="h-48 mb-4">
                                    <!-- Chart placeholder - in a real app you would use Chart.js or similar -->
                                    <div class="bg-gray-100 dark:bg-gray-600 rounded-lg h-full flex items-center justify-center text-gray-400 dark:text-gray-300">
                                        Weight Chart Visualization
                                    </div>
                                </div>
                                
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Current Weight</span>
                                        <span class="text-sm font-medium text-gray-800 dark:text-gray-100">12.5 kg</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Last Recorded</span>
                                        <span class="text-sm font-medium text-gray-800 dark:text-gray-100">Jun 10, 2023</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Change (30d)</span>
                                        <span class="text-sm font-medium text-green-600 dark:text-green-400">-0.5 kg</span>
                                    </div>
                                </div>
                                
                                <button @click="showWeightModal = true" class="mt-4 w-full bg-petpurple hover:bg-purple-700 text-white py-2 rounded-lg text-sm font-medium transition">
                                    Add Weight Record
                                </button>
                            </div>
                            
                            <!-- Medications -->
                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Active Medications</h2>
                                
                                <div class="space-y-4">
                                    <div class="flex items-start p-3 bg-blue-50 dark:bg-blue-900/30 rounded-lg">
                                        <div class="bg-blue-100 dark:bg-blue-800 p-2 rounded-full mr-3">
                                            <i class="fas fa-pills text-blue-500 dark:text-blue-300"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-medium text-gray-800 dark:text-gray-100">Antibiotics</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-300">Amoxicillin 250mg</p>
                                            <div class="mt-1 flex items-center text-xs text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-calendar-day mr-1"></i>
                                                <span>Last dose: Today, 8:00 AM</span>
                                            </div>
                                            <div class="mt-1 flex items-center text-xs text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-clock mr-1"></i>
                                                <span>Next dose: Today, 8:00 PM</span>
                                            </div>
                                        </div>
                                        <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </div>
                                    
                                    <div class="flex items-start p-3 bg-yellow-50 dark:bg-yellow-900/30 rounded-lg">
                                        <div class="bg-yellow-100 dark:bg-yellow-800 p-2 rounded-full mr-3">
                                            <i class="fas fa-prescription-bottle-alt text-yellow-500 dark:text-yellow-300"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-medium text-gray-800 dark:text-gray-100">Flea Treatment</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-300">Monthly topical</p>
                                            <div class="mt-1 flex items-center text-xs text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-calendar-day mr-1"></i>
                                                <span>Applied: Jun 1, 2023</span>
                                            </div>
                                            <div class="mt-1 flex items-center text-xs text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-clock mr-1"></i>
                                                <span>Next dose: Jul 1, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start p-3 bg-green-50 dark:bg-green-900/30 rounded-lg">
                                        <div class="bg-green-100 dark:bg-green-800 p-2 rounded-full mr-3">
                                            <i class="fas fa-heart text-green-500 dark:text-green-300"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h3 class="font-medium text-gray-800 dark:text-gray-100">Heartworm Preventative</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-300">Monthly chewable</p>
                                            <div class="mt-1 flex items-center text-xs text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-calendar-day mr-1"></i>
                                                <span>Last dose: Jun 15, 2023</span>
                                            </div>
                                            <div class="mt-1 flex items-center text-xs text-gray-500 dark:text-gray-400">
                                                <i class="fas fa-clock mr-1"></i>
                                                <span>Next dose: Jul 15, 2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="mt-4 w-full bg-gray-100 dark:bg-gray-600 hover:bg-gray-200 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200 py-2 rounded-lg text-sm font-medium transition">
                                    View All Medications
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Add Health Record Modal -->
    <div x-show="showAddRecordModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div @click.away="showAddRecordModal = false" class="bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md mx-4">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100">Add Health Record</h3>
                    <button @click="showAddRecordModal = false" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form @submit.prevent="addHealthRecord">
                    <div class="space-y-4">
                        <!-- Record Type -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Record Type</label>
                            <select x-model="newRecord.type" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-petpurple focus:border-petpurple dark:bg-gray-700">
                                <option value="">Select type</option>
                                <option value="Vaccination">Vaccination</option>
                                <option value="Checkup">Checkup</option>
                                <option value="Medication">Medication</option>
                                <option value="Procedure">Procedure</option>
                                <option value="Note">General Note</option>
                            </select>
                        </div>
                        
                        <!-- Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date</label>
                            <input x-model="newRecord.date" type="date" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-petpurple focus:border-petpurple dark:bg-gray-700">
                        </div>
                        
                        <!-- Details -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Details</label>
                            <textarea x-model="newRecord.details" rows="3" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-petpurple focus:border-petpurple dark:bg-gray-700"></textarea>
                        </div>
                        
                        <!-- Veterinarian -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Veterinarian (optional)</label>
                            <input x-model="newRecord.vet" type="text" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-petpurple focus:border-petpurple dark:bg-gray-700">
                        </div>
                        
                        <!-- Attachment -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Attachment (optional)</label>
                            <div class="mt-1 flex items-center">
                                <label class="cursor-pointer bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300">
                                    <i class="fas fa-paperclip mr-2"></i> Choose File
                                    <input type="file" class="sr-only">
                                </label>
                                <span class="ml-3 text-sm text-gray-500 dark:text-gray-400">No file chosen</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" @click="showAddRecordModal = false" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-petpurple hover:bg-purple-700">
                            Save Record
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Weight Modal -->
    <div x-show="showWeightModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div @click.away="showWeightModal = false" class="bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md mx-4">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100">Record Weight</h3>
                    <button @click="showWeightModal = false" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form @submit.prevent="addWeightRecord">
                    <div class="space-y-4">
                        <!-- Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date</label>
                            <input x-model="weightRecord.date" type="date" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-petpurple focus:border-petpurple dark:bg-gray-700">
                        </div>
                        
                        <!-- Weight -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Weight</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input x-model="weightRecord.value" type="number" step="0.1" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-petpurple focus:border-petpurple dark:bg-gray-700 pr-12">
                                <div class="absolute inset-y-0 right-0 flex items-center">
                                    <select x-model="weightRecord.unit" class="h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 dark:text-gray-400 focus:ring-2 focus:ring-petpurple focus:border-petpurple sm:text-sm">
                                        <option>kg</option>
                                        <option>lbs</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Notes -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Notes (optional)</label>
                            <textarea x-model="weightRecord.notes" rows="2" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-petpurple focus:border-petpurple dark:bg-gray-700"></textarea>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" @click="showWeightModal = false" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-petpurple hover:bg-purple-700">
                            Save Weight
                        </button>
                    </div>
                </form>
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
        Alpine.data('petHealth', () => ({
            // Modal states
            showAddRecordModal: false,
            showWeightModal: false,
            
            // Pets data
            pets: [
                {
                    id: 1,
                    name: 'Max',
                    type: 'dog',
                    photo: 'https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80'
                },
                {
                    id: 2,
                    name: 'Luna',
                    type: 'cat',
                    photo: 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80'
                }
            ],
            
            // Selected pet
            selectedPetId: 1,
            
            // Health records
            healthRecords: [
                {
                    id: 1,
                    type: 'Vaccination',
                    date: 'Jun 15, 2023',
                    details: 'Rabies vaccine administered',
                    vet: 'Dr. Smith'
                },
                {
                    id: 2,
                    type: 'Checkup',
                    date: 'May 28, 2023',
                    details: 'Annual wellness exam - all clear',
                    vet: 'Dr. Johnson'
                },
                {
                    id: 3,
                    type: 'Medication',
                    date: 'May 20, 2023',
                    details: 'Prescribed antibiotics for ear infection',
                    vet: 'Dr. Smith'
                },
                {
                    id: 4,
                    type: 'Procedure',
                    date: 'Mar 10, 2023',
                    details: 'Dental cleaning - 2 teeth extracted',
                    vet: 'Dr. Williams'
                },
                {
                    id: 5,
                    type: 'Note',
                    date: 'Feb 15, 2023',
                    details: 'Noticed occasional limping, monitor for changes',
                    vet: ''
                }
            ],
            
            // New record form
            newRecord: {
                type: '',
                date: '',
                details: '',
                vet: '',
                attachment: null
            },
            
            // Weight record form
            weightRecord: {
                date: new Date().toISOString().split('T')[0], // Default to today
                value: '',
                unit: 'kg',
                notes: ''
            },
            
            // Methods
            selectPet(petId) {
                this.selectedPetId = petId;
                // In a real app, you would fetch records for the selected pet here
            },
            
            addHealthRecord() {
                // Validate form
                if (!this.newRecord.type || !this.newRecord.date || !this.newRecord.details) {
                    alert('Please fill in all required fields');
                    return;
                }
                
                // Create new record
                const newRecord = {
                    id: this.healthRecords.length + 1,
                    type: this.newRecord.type,
                    date: this.formatDate(this.newRecord.date),
                    details: this.newRecord.details,
                    vet: this.newRecord.vet
                };
                
                // Add to records
                this.healthRecords.unshift(newRecord);
                
                // Reset form and close modal
                this.newRecord = {
                    type: '',
                    date: '',
                    details: '',
                    vet: '',
                    attachment: null
                };
                this.showAddRecordModal = false;
                
                // Show success message
                this.showToast('Health record added successfully');
            },
            
            addWeightRecord() {
                // Validate form
                if (!this.weightRecord.date || !this.weightRecord.value) {
                    alert('Please fill in all required fields');
                    return;
                }
                
                // In a real app, you would save this to your database/state management
                console.log('Weight record added:', this.weightRecord);
                
                // Reset form and close modal
                this.weightRecord = {
                    date: new Date().toISOString().split('T')[0],
                    value: '',
                    unit: 'kg',
                    notes: ''
                };
                this.showWeightModal = false;
                
                // Show success message
                this.showToast('Weight recorded successfully');
            },
            
            // Helper functions
            formatDate(dateString) {
                const options = { year: 'numeric', month: 'short', day: 'numeric' };
                return new Date(dateString).toLocaleDateString('en-US', options);
            },
            
            showToast(message) {
                // In a real app, you would implement a proper toast notification
                alert(message);
            },
            
            // Initialize
            init() {
                // Calculate vaccination progress (example)
                setTimeout(() => {
                    const circles = document.querySelectorAll('.progress-ring__circle');
                    circles.forEach(circle => {
                        const radius = circle.r.baseVal.value;
                        const circumference = radius * 2 * Math.PI;
                        circle.style.strokeDasharray = `${circumference} ${circumference}`;
                        
                        // Set initial progress based on data-percent attribute
                        const percent = parseInt(circle.parentElement.querySelector('span').textContent.replace('%', ''));
                        const offset = circumference - (percent / 100) * circumference;
                        circle.style.strokeDashoffset = offset;
                    });
                }, 100);
            }
        }));
    });
</script>
</body>
</html>