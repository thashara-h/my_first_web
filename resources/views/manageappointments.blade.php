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
                         <a href="/managepets" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-paw mr-3"></i> Manage Pets</span>
                        </a>
                        </div>
                        
                        <!-- Users CRUD -->
                        <div class="px-4 py-2">
                         <a href="/manageusers" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-paw mr-3"></i> Manage Users</span>
                        </a>
                        </div>
                        
                        <!-- Appointments CRUD -->
                        <div class="px-4 py-2">
                         <a href="/manageappointments" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-paw mr-3"></i> Manage Appoinments</span>
                        </a>
                        </div>
                        
                        <!-- Products CRUD -->
                        <div class="px-4 py-2">
                         <a href="/manageproducts" class="w-full flex items-center justify-between px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                         <span><i class="fas fa-paw mr-3"></i> Manage Products</span>
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

                    

                    <!-- CRUD Content Sections -->
                    <!-- Appointments Section -->

                    <!-- resources/views/admin/orders/index.blade.php -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-accent/10">
    <div class="p-6">
        <h2 class="text-2xl font-bold text-dark font-display mb-6">Manage Orders</h2>
        
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="border-b border-accent/10">
                        <th class="px-6 py-3 text-left text-dark font-display">Order #</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Customer</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Date</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Items</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Total</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Status</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="border-b border-accent/10 hover:bg-light/5">
                        <td class="px-6 py-4">{{ $order->order_number }}</td>
                        <td class="px-6 py-4">{{ $order->user->name }}</td>
                        <td class="px-6 py-4">{{ $order->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4">{{ count($order->items) }} items</td>
                        <td class="px-6 py-4">Rs. {{ number_format($order->total, 2) }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <select name="status" onchange="this.form.submit()" 
                                    class="px-2 py-1 rounded text-xs 
                                    {{ $order->status === 'completed' ? 'bg-green-100 text-green-800' : 
                                       ($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                    <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                    <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.orders.show', $order->id) }}" class="text-primary hover:text-primary-dark mr-3">
                                View
                            </a>
                            <a href="{{ route('order.invoice', $order->id) }}" class="text-accent hover:text-accent-dark mr-3">
                                Invoice
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        {{ $orders->links() }}
    </div>
    </div>

            </main>
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