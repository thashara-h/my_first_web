<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Daycare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
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
<body class="bg-gradient-to-br from-white  to-light font-sans">
    <header class="bg-light shadow-sm sticky top-0 z-50  bg-opacity-7">
  <div class="max-w-8xl mx-auto px-6 py-3 flex justify-between items-center">
    <!-- Logo with animated paw -->
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
        <!-- Login - Fish Bone Button -->
        <a href="#" class="relative px-4 py-2 text-purple-600 font-medium group transition-all">
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
    <main class="container mx-auto px-4 py-8">
        <!-- Intro Section -->
        <section class="mb-12">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-dark mb-4">Why Choose Our Daycare?</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-light bg-opacity-20 p-4 rounded-lg">
                        <h3 class="font-semibold text-light mb-2">Safe Environment</h3>
                        <p class="text-accent">Our facility is fully secured and monitored to ensure your pet's safety at all times.</p>
                    </div>
                    <div class="bg-light bg-opacity-20 p-4 rounded-lg">
                        <h3 class="font-semibold text-light mb-2">Socialization</h3>
                        <p class="text-accent">Regular play helps pets develop better social skills and reduces anxiety.</p>
                    </div>
                    <div class="bg-light bg-opacity-20 p-4 rounded-lg">
                        <h3 class="font-semibold text-light mb-2">Exercise & Fun</h3>
                        <p class="text-accent">Structured activities keep pets physically and mentally stimulated.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-dark mb-6">Our Daycare Services</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🐕</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Full-Day Care</h3>
                        <p class="text-accent">8-10 hours of supervised play, exercise, and socialization with other pets.</p>
                    </div>
                </div>
                
                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🐩</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Half-Day Care</h3>
                        <p class="text-accent">4-5 hours of playtime perfect for busy schedules or first-time visitors.</p>
                    </div>
                </div>
                
                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🏫</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Puppy Program</h3>
                        <p class="text-accent">Specialized care for puppies including socialization and basic training.</p>
                    </div>
                </div>
                
                <!-- Service Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🛏️</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Overnight Care</h3>
                        <p class="text-accent">Comfortable boarding with daytime play included in our daycare group.</p>
                    </div>
                </div>
                
                <!-- Service Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🚌</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Transportation</h3>
                        <p class="text-accent">We'll pick up and drop off your pet for daycare (service area restrictions apply).</p>
                    </div>
                </div>
                
                <!-- Service Card 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🎾</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Add-On Activities</h3>
                        <p class="text-accent">Individual play sessions, training reinforcement, or special treats.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="mb-12 bg-white rounded-br-3xl rounded-tl-3xl shadow-md p-6">
            <h2 class="text-2xl font-bold text-dark mb-6">Daycare Pricing</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Service</th>
                            <th class="py-3 px-4 text-left">Small Pets</th>
                            <th class="py-3 px-4 text-left">Medium Pets</th>
                            <th class="py-3 px-4 text-left">Large Pets</th>
                        </tr>
                    </thead>
                    <tbody class="text-accent">
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">Full-Day Care</td>
                            <td class="py-3 px-4">$35</td>
                            <td class="py-3 px-4">$40</td>
                            <td class="py-3 px-4">$45</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">Half-Day Care (up to 5 hrs)</td>
                            <td class="py-3 px-4">$25</td>
                            <td class="py-3 px-4">$30</td>
                            <td class="py-3 px-4">$35</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">Puppy Program (under 1 yr)</td>
                            <td class="py-3 px-4">$40</td>
                            <td class="py-3 px-4">$45</td>
                            <td class="py-3 px-4">$50</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">Overnight Care</td>
                            <td class="py-3 px-4">$60</td>
                            <td class="py-3 px-4">$65</td>
                            <td class="py-3 px-4">$70</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">Transportation (each way)</td>
                            <td class="py-3 px-4">$15</td>
                            <td class="py-3 px-4">$15</td>
                            <td class="py-3 px-4">$20</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">10-Day Package (save 15%)</td>
                            <td class="py-3 px-4">$300</td>
                            <td class="py-3 px-4">$340</td>
                            <td class="py-3 px-4">$380</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Daily Schedule -->
        <section class="mb-12 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-dark mb-6">Daily Schedule</h2>
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-semibold text-light">7:30-9:00 AM: Arrival & Morning Play</h3>
                    <p class="mt-1 text-accent">Pets arrive and are introduced to their play groups based on size and temperament.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-semibold text-light">9:00-10:30 AM: Structured Activities</h3>
                    <p class="mt-1 text-accent">Group games, obstacle courses, and supervised socialization.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-semibold text-light">10:30-11:30 AM: Rest Time</h3>
                    <p class="mt-1 text-accent">Quiet time with calming music and individual spaces for napping.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-semibold text-light">11:30 AM-1:00 PM: Lunch & Individual Attention</h3>
                    <p class="mt-1 text-accent">Meals served (if provided by owner) and one-on-one time with staff.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-semibold text-light">1:00-3:00 PM: Afternoon Play</h3>
                    <p class="mt-1 text-accent">Outdoor time (weather permitting) and free play with toys.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-light">3:00-6:00 PM: Wind Down & Pickup</h3>
                    <p class="mt-1 text-accent">Calmer activities and preparation for going home.</p>
                </div>
            </div>
        </section>

        

        <!-- Booking Form -->
        <section class="bg-gradient-to-br from-white to-accent rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-dark mb-6">Daycare Registration</h2>
            <form class="grid md:grid-cols-2 gap-6" action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="service_type" value="veterinary_care">
                <!-- Owner Information -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-primary">Owner Information</h3>
                    <div>
                        <label for="owner-name" class="block text-accent mb-1">Full Name</label>
                        <input type="text" id="owner-name" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                    <div>
                        <label for="contact-number" class="block text-accent mb-1">Contact Number</label>
                        <input type="tel" id="contact-number" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                    <div>
                        <label for="email" class="block text-accent mb-1">Email Address</label>
                        <input type="email" id="email" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                </div>
                
                <!-- Pet Information -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-primary">Pet Information</h3>
                    <div>
                        <label for="pet-name" class="block text-accent mb-1">Pet's Name</label>
                        <input type="text" id="pet-name" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                    <div>
                        <label for="breed" class="block text-accent mb-1">Breed</label>
                        <input type="text" id="breed" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                    <div>
                        <label for="age" class="block text-accent mb-1">Age</label>
                        <input type="text" id="age" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                </div>
                
                <!-- Service Selection -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Service Selection</h3>
                    <select class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        <option>Select a service</option>
                        <option>Full-Day Care</option>
                        <option>Half-Day Care</option>
                        <option>Puppy Program</option>
                        <option>Overnight Care</option>
                        <option>10-Day Package</option>
                    </select>
                </div>
                
                <!-- Date Selection -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Preferred Start Date</h3>
                    <input type="date" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                </div>
                
                <!-- Frequency -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Frequency</h3>
                    <select class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        <option>How often will your pet attend?</option>
                        <option>Just once</option>
                        <option>1-2 days per week</option>
                        <option>3-4 days per week</option>
                        <option>Full time (5+ days)</option>
                    </select>
                </div>
                
                <!-- Transportation -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Need Transportation?</h3>
                    <select class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        <option>Select transportation option</option>
                        <option>No transportation needed</option>
                        <option>Morning pickup only</option>
                        <option>Afternoon dropoff only</option>
                        <option>Both pickup and dropoff</option>
                    </select>
                </div>
                
                <!-- Special Notes -->
                <div class="md:col-span-2">
                    <label for="special-notes" class="block text-accent mb-1">Special Notes About Your Pet</label>
                    <textarea id="special-notes" rows="3" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light" placeholder="Behavioral notes, medical conditions, special needs, etc."></textarea>
                </div>
                
                <!-- Vaccination Upload -->
                <div class="md:col-span-2">
                    <label for="vaccination" class="block text-accent mb-1">Upload Vaccination Records</label>
                    <input type="file" id="vaccination" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                </div>
                
                <!-- Submit Button -->
                <div class="md:col-span-2">
                <button type="submit" class="w-full bg-primary hover:bg-dark text-white font-bold py-3 px-4 rounded transition duration-200">
                  Book Appointment
                </button>
                </div>
            </form>
        </section>
    </main>
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
    
</body>
</html>