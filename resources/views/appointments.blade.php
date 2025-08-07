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
                         <a href="/managepets" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-paw mr-3"></i> Manage Pets</span>
                        </a>
                        </div>
                        
                        <!-- Users CRUD -->
                        <div class="px-4 py-2">
                         <a href="/manageusers" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-user mr-3"></i> Manage Users</span>
                        </a>
                        </div>
                        
                        <!-- Appointments CRUD -->
                        <div class="px-4 py-2">
                         <a href="/appointments" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg bg-petpurple text-white dark:bg-gray-700 dark:text-purple-300">
                         <span><i class="fas fa-calendar-check mr-3"></i> Manage Appointments</span>
                        </a>
                        </div>
                        
                        <!-- Orders CRUD -->
                        <div class="px-4 py-2">
                         <a href="/manageorders" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-shopping-cart mr-3"></i> Manage Orders</span>
                        </a>
                        </div>
                        
                        <!-- dogfood CRUD -->
                        <div class="px-4 py-2">
                         <a href="/managedogfood" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-bone mr-3"></i> Manage Dog Food</span>
                        </a>
                        </div>

                        <!-- catfood CRUD -->
                        <div class="px-4 py-2">
                         <a href="/managecatfood" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-fish mr-3"></i> Manage Cat Food</span>
                        </a>
                        </div>

                        <!-- birdgood CRUD -->
                        <div class="px-4 py-2">
                         <a href="/managebirdfood" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-dove mr-3"></i> Manage Bird Food</span>
                        </a>
                        </div>

                        <!-- otherfood CRUD -->
                        <div class="px-4 py-2">
                        <a href="/manageotherpetfood" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                        <span><i class="fas fa-paw mr-3"></i> Manage Other Food</span>
                        </a>
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
                    <nav class="px-4 space-y-1">
                        <a href="#" @click="activeCrudSection = ''; mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg bg-petpurple text-white">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                        
                        <a href="/managepets" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                            <i class="fas fa-paw mr-3"></i> Manage Pets
                        </a>
                        
                        <a href="/manageusers" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                            <i class="fas fa-user mr-3"></i> Manage Users
                        </a>
                        
                        <a href="/manageappointments" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg bg-petpurple text-white">
                            <i class="fas fa-calendar-check mr-3"></i> Manage Appointments
                        </a>
                        
                        <a href="/manageorders" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                            <i class="fas fa-shopping-cart mr-3"></i> Manage Orders
                        </a>
                        
                        <a href="/managedogfood" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                            <i class="fas fa-bone mr-3"></i> Manage Dog Food
                        </a>
                        
                        <a href="/managecatfood" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                            <i class="fas fa-fish mr-3"></i> Manage Cat Food
                        </a>
                        
                        <a href="/managebirdfood" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                            <i class="fas fa-dove mr-3"></i> Manage Bird Food
                        </a>
                        
                        <a href="/manageotherpetfood" @click="mobileSidebarOpen = false" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white">
                            <i class="fas fa-paw mr-3"></i> Manage Other Food
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Content Area -->
            <main class="p-6 bg-gradient-to-br from-petpurple to-petgreen dark:from-petpurple dark:to-gray-900">
                <div class="max-w-7xl mx-auto">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Manage Appointments</h1>
                        <div class="flex space-x-3">
                            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 flex items-center">
                                <i class="fas fa-download mr-2"></i> Export
                            </button>
                            <button class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-filter mr-2"></i> Filter
                            </button>
                        </div>
                    </div>

                    <!-- Appointments Table -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                        @if(Session::has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        
                        @if(Session::has('fail'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                        
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Service</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Pet & Owner</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date & Time</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Details</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    @if(count($appointments) > 0)
                                        @foreach($appointments as $appointment)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300">
                                                {{ $appointment->id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 text-xl">
                                                        @if($appointment->service_type == 'spa_grooming')
                                                            🛁
                                                        @elseif($appointment->service_type == 'veterinary_care')
                                                            🏥
                                                        @else
                                                            🏠
                                                        @endif
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                            {{ ucfirst(str_replace('_', ' ', $appointment->service_type)) }}
                                                        </div>
                                                        <div class="text-sm text-gray-500 dark:text-gray-300">
                                                            {{ $appointment->service_name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">
                                                    {{ $appointment->pet_name }}
                                                </div>
                                                <div class="text-sm text-gray-500 dark:text-gray-300">
                                                    {{ $appointment->breed }}, {{ $appointment->age }}
                                                </div>
                                                <div class="text-sm text-gray-500 dark:text-gray-300 mt-1">
                                                    {{ $appointment->owner_name }}
                                                </div>
                                                <div class="text-sm text-gray-500 dark:text-gray-300">
                                                    {{ $appointment->contact_number }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 dark:text-white">
                                                    {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('M d, Y') }}
                                                </div>
                                                @if($appointment->appointment_time)
                                                <div class="text-sm text-gray-500 dark:text-gray-300">
                                                    {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('g:i A') }}
                                                </div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($appointment->frequency)
                                                <div class="text-sm text-gray-500 dark:text-gray-300">
                                                    <span class="font-medium">Frequency:</span> {{ $appointment->frequency }}
                                                </div>
                                                @endif
                                                @if($appointment->transportation)
                                                <div class="text-sm text-gray-500 dark:text-gray-300">
                                                    <span class="font-medium">Transport:</span> {{ $appointment->transportation }}
                                                </div>
                                                @endif
                                                @if($appointment->special_requests)
                                                <div class="text-sm text-gray-500 dark:text-gray-300 mt-1">
                                                    <span class="font-medium">Notes:</span> {{ Str::limit($appointment->special_requests, 30) }}
                                                </div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                    {{ $appointment->status === 'pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100' : '' }}
                                                    {{ $appointment->status === 'confirmed' ? 'bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100' : '' }}
                                                    {{ $appointment->status === 'completed' ? 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100' : '' }}
                                                    {{ $appointment->status === 'cancelled' ? 'bg-red-100 text-red-800 dark:bg-red-800 dark:text-red-100' : '' }}">
                                                    {{ ucfirst($appointment->status) }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="/edit-appointment/{{ $appointment->id }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">
                                                    <i class="fas fa-edit mr-1"></i> Edit
                                                </a>
                                                <form action="/delete-appointment/{{ $appointment->id }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300" onclick="return confirm('Are you sure you want to delete this appointment?')">
                                                        <i class="fas fa-trash-alt mr-1"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                                No appointments found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        @if($appointments->hasPages())
                        <div class="px-4 py-4 bg-gray-50 dark:bg-gray-600 sm:px-6">
                            {{ $appointments->links() }}
                        </div>
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('adminDashboard', () => ({
                darkMode: localStorage.getItem('darkMode') === 'true',
                mobileSidebarOpen: false,
                activeCrudSection: 'appointments',
                
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