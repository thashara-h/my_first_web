<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>
    
   
    <div x-show="showAddPetModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div @click.away="showAddPetModal = false" class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-gray-800">Edit Pet</h3>
                <button @click="showAddPetModal = false" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
                @if(Session::has('fail'))
                <span class="bg-red-100 border border-red-400 text-red-500 px-4 py-2 rounded">{{Session::get('fail')}}</span>
                @endif
            </div>
            
            <form method="post" action="{{ route('EditBirdFood') }}" enctype="multipart/form-data">
                <input type="hidden" name="birdfood_id" id="" value="{{$birdfood->id}}">
            @csrf
            <div class="space-y-4">
            <!-- Product Name -->
            <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
            <input type="text" name="product_name" required  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple">
            @error('product_name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            </div>

            

        <!-- Weight -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Weight</label>
            <input type="text" name="Weight" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple"
                   placeholder="e.g. 1kg, 5lbs, 500g">
            @error('Weight')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Price -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Price (LKR)</label>
            <input type="number" name="price" step="0.01" min="0" required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple">
            @error('price')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Description -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" rows="3" 
                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple"
                      placeholder="High in protein, Omega-6 for healthy coat"></textarea>
            @error('description')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Flavor -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Flavor</label>
            <input type="text" name="flavor" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple"
                   placeholder="e.g. Tuna, Chicken, Beef">
            @error('flavor')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Image Upload -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Product Image</label>
            <input type="file" name="image" accept="image/*" required 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-petpurple">
            @error('image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        
    </div>

    <div class="mt-6 flex justify-end space-x-3">
        
        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-petpurple hover:bg-purple-700">
            Add Item
        </button>
    </div>
    </form>
        </div>
    </div>
    </div>
    
    


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