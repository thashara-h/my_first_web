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