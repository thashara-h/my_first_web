<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Veterinary Appointments | PetCare Admin</title>
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
                
                <!-- Navigation -->
                <div class="flex-1 overflow-y-auto py-4">
                    <nav>
                        <!-- Dashboard -->
                        <div class="px-4 py-2">
                            <a href="/admin/dashboard" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg hover:bg-petpurple hover:text-white dark:hover:bg-gray-700 dark:text-gray-300">
                                <i class="fas fa-tachometer-alt mr-3"></i>
                                Dashboard 
                            </a>
                        </div>
                        
                        <!-- Veterinary Appointments -->
                        <div class="px-4 py-2">
                            <a href="/manageveterinary" class="flex items-center px-3 py-3 text-sm font-medium rounded-lg bg-petpurple text-white dark:bg-gray-700">
                                <i class="fas fa-calendar-check mr-3"></i>
                                Veterinary Appointments
                            </a>
                        </div>
                        
                        <!-- Other menu items... -->
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
                    <span class="text-lg font-bold text-white">Veterinary Appointments</span>
                </div>
                <div class="w-6"></div>
            </div>
            
            <!-- Content Area -->
            <main class="p-6 bg-gradient-to-br from-petpurple to-petgreen dark:from-petpurple dark:to-gray-900">
                <div class="max-w-7xl mx-auto">
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Veterinary Appointments</h1>
                        <div class="flex space-x-3">
                            <button class="bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 flex items-center">
                                <i class="fas fa-download mr-2"></i> Export
                            </button>
                            <a href="/veterinary-appointment/create" class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                                <i class="fas fa-plus mr-2"></i> New Appointment
                            </a>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                            <div class="text-gray-500 dark:text-gray-300 text-sm">Total Appointments</div>
                            <div class="text-2xl font-bold text-petpurple dark:text-purple-300">{{ $stats['total'] }}</div>
                        </div>
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                            <div class="text-gray-500 dark:text-gray-300 text-sm">Confirmed</div>
                            <div class="text-2xl font-bold text-green-600">{{ $stats['confirmed'] }}</div>
                        </div>
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                            <div class="text-gray-500 dark:text-gray-300 text-sm">Pending</div>
                            <div class="text-2xl font-bold text-yellow-600">{{ $stats['pending'] }}</div>
                        </div>
                        <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow">
                            <div class="text-gray-500 dark:text-gray-300 text-sm">Cancelled</div>
                            <div class="text-2xl font-bold text-red-600">{{ $stats['cancelled'] }}</div>
                        </div>
                    </div>

                    <!-- Appointments Table -->
                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                        @if(Session::has('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded">
                            {{ Session::get('fail') }}
                        </div>
                        @endif
                        
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Pet</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Owner</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Service</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Date</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-600">
                                    @forelse($appointments as $appointment)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">#{{ $appointment->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="font-medium text-gray-900 dark:text-white">{{ $appointment->pet_name }}</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-300">{{ $appointment->breed }}, {{ $appointment->age }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">{{ $appointment->owner_name }}</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-300">{{ $appointment->contact_number }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            {{ $appointment->service_name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('M d, Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                {{ $appointment->status === 'confirmed' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 
                                                   ($appointment->status === 'completed' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' : 
                                                   ($appointment->status === 'cancelled' ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200' : 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200')) }}">
                                                {{ ucfirst($appointment->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('admin.veterinary.show', $appointment->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 mr-3">
                                                <i class="fas fa-eye mr-1"></i> View
                                            </a>
                                            <a href="{{ route('admin.veterinary.edit', $appointment->id) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 mr-3">
                                                <i class="fas fa-edit mr-1"></i> Edit
                                            </a>
                                            <form action="{{ route('admin.veterinary.destroy', $appointment->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash-alt mr-1"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="px-6 py-4 text-center text-gray-500 dark:text-gray-300">No appointments found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-600 border-t border-gray-200 dark:border-gray-500">
                            {{ $appointments->links() }}
                        </div>
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
                
                init() {
                    // Check for saved dark mode preference
                    if (localStorage.getItem('darkMode') === null) {
                        // Default to system preference if no saved preference
                        this.darkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    }
                    
                    // Apply dark mode on init
                    this.toggleDarkMode(this.darkMode);
                },
                
                toggleDarkMode(value = null) {
                    this.darkMode = value !== null ? value : !this.darkMode;
                    localStorage.setItem('darkMode', this.darkMode);
                    
                    if (this.darkMode) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                }
            }));
        });
    </script>
</body>
</html>