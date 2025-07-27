<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Daycare Services</title>
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
<body class="bg-gradient-to-br from-white to-light font-sans">
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
        <!-- What is Pet Daycare Section -->
        <section class="mb-12">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-dark mb-4">What is Pet Daycare?</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-accent mb-4">Our pet daycare provides a safe, stimulating environment for your pet while you're at work or away. Unlike boarding, daycare focuses on daytime activities, socialization, and exercise.</p>
                        <p class="text-accent">Professional caregivers supervise playgroups divided by size and temperament, ensuring all pets have fun while staying safe.</p>
                    </div>
                    <div class="bg-light bg-opacity-10 p-4 rounded-lg border border-light">
                        <h3 class="font-semibold text-light mb-2">Benefits of Daycare:</h3>
                        <ul class="list-disc pl-5 text-accent">
                            <li class="mb-2">Prevents boredom and destructive behaviors at home</li>
                            <li class="mb-2">Provides regular exercise and mental stimulation</li>
                            <li class="mb-2">Improves socialization skills with other pets</li>
                            <li>Gives you peace of mind while you're away</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Daily Activities -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-dark mb-6">Daily Activities</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Activity 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🎾</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Structured Playtime</h3>
                        <p class="text-accent">Supervised group play with toys, obstacle courses, and games tailored to different energy levels and play styles.</p>
                    </div>
                </div>
                
                <!-- Activity 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🐕‍🦺</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Socialization</h3>
                        <p class="text-accent">Carefully managed interactions help pets develop good manners and confidence around other animals.</p>
                    </div>
                </div>
                
                <!-- Activity 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-light flex items-center justify-center">
                        <span class="text-6xl">🛏️</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-primary mb-2">Rest Periods</h3>
                        <p class="text-accent">Scheduled quiet times in individual spaces prevent overstimulation and ensure proper rest.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timings and Packages -->
        <section class="mb-12 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-dark mb-6">Timings and Packages</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-light mb-3">Operating Hours</h3>
                    <ul class="space-y-2 text-accent">
                        <li class="flex justify-between">
                            <span>Monday-Friday:</span>
                            <span class="font-medium">7:00 AM - 7:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Saturday:</span>
                            <span class="font-medium">9:00 AM - 5:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sunday:</span>
                            <span class="font-medium">Closed</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-light mb-3">Packages</h3>
                    <ul class="space-y-2 text-accent">
                        <li class="flex justify-between">
                            <span>Half Day (up to 5 hours):</span>
                            <span class="font-medium">$25</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Full Day:</span>
                            <span class="font-medium">$35</span>
                        </li>
                        <li class="flex justify-between">
                            <span>5-Day Package:</span>
                            <span class="font-medium">$150 (save $25)</span>
                        </li>
                        <li class="flex justify-between">
                            <span>10-Day Package:</span>
                            <span class="font-medium">$280 (save $70)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Safety Measures -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-dark mb-6">Safety Measures</h2>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold text-light mb-3">Health Requirements</h3>
                        <ul class="list-disc pl-5 space-y-2 text-accent">
                            <li>Current vaccinations (Rabies, DHPP, Bordetella)</li>
                            <li>Flea/tick prevention</li>
                            <li>Spayed/neutered if over 6 months</li>
                            <li>Health clearance from vet if needed</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-light mb-3">Facility Safety</h3>
                        <ul class="list-disc pl-5 space-y-2 text-accent">
                            <li>24/7 security monitoring</li>
                            <li>Separate play areas by size/temperament</li>
                            <li>Staff trained in pet first aid/CPR</li>
                            <li>Emergency vet on call</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Daily Schedule Example -->
        <section class="mb-12 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-dark mb-6">Typical Daily Schedule</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Time</th>
                            <th class="py-3 px-4 text-left">Activity</th>
                            <th class="py-3 px-4 text-left">Description</th>
                        </tr>
                    </thead>
                    <tbody class="text-accent">
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">7:00-9:00 AM</td>
                            <td class="py-3 px-4">Arrival & Morning Play</td>
                            <td class="py-3 px-4">Pets arrive, get settled, and begin supervised play</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">9:00-10:30 AM</td>
                            <td class="py-3 px-4">Structured Activities</td>
                            <td class="py-3 px-4">Group games, obstacle courses, training exercises</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">10:30-11:30 AM</td>
                            <td class="py-3 px-4">Rest Time</td>
                            <td class="py-3 px-4">Quiet time in individual spaces with calming music</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">11:30 AM-1:00 PM</td>
                            <td class="py-3 px-4">Lunch & Individual Attention</td>
                            <td class="py-3 px-4">Mealtime and one-on-one time with caregivers</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">1:00-3:00 PM</td>
                            <td class="py-3 px-4">Afternoon Play</td>
                            <td class="py-3 px-4">Outdoor time (weather permitting) and free play</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4">3:00-6:00 PM</td>
                            <td class="py-3 px-4">Wind Down & Pickup</td>
                            <td class="py-3 px-4">Calmer activities and preparation for going home</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Booking Form -->
        <section class="bg-gradient-to-br from-white to-accent rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-dark mb-6">Daycare Registration Form</h2>
            <form class="grid md:grid-cols-2 gap-6">
                <!-- Owner Information -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-primary">Owner Information</h3>
                    <div>
                        <label for="owner-name" class="block text-accent mb-1">Full Name*</label>
                        <input type="text" id="owner-name" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                    <div>
                        <label for="contact-number" class="block text-accent mb-1">Phone Number*</label>
                        <input type="tel" id="contact-number" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                    <div>
                        <label for="email" class="block text-accent mb-1">Email Address*</label>
                        <input type="email" id="email" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                </div>
                
                <!-- Pet Details -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-primary">Pet Details</h3>
                    <div>
                        <label for="pet-name" class="block text-accent mb-1">Pet's Name*</label>
                        <input type="text" id="pet-name" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="age" class="block text-accent mb-1">Age*</label>
                            <input type="text" id="age" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                        <div>
                            <label for="breed" class="block text-accent mb-1">Breed*</label>
                            <input type="text" id="breed" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                    </div>
                    <div>
                        <label for="temperament" class="block text-accent mb-1">Temperament*</label>
                        <select id="temperament" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                            <option value="">Select temperament</option>
                            <option>Shy/Timid</option>
                            <option>Friendly/Social</option>
                            <option>Energetic/Playful</option>
                            <option>Independent</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                
                <!-- Schedule -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Preferred Schedule</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="dropoff" class="block text-accent mb-1">Drop-off Time*</label>
                            <input type="time" id="dropoff" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                        <div>
                            <label for="pickup" class="block text-accent mb-1">Pick-up Time*</label>
                            <input type="time" id="pickup" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                    </div>
                </div>
                
                <!-- Days of Week -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-2">Days Needed*</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-light focus:ring-light">
                            <span class="ml-2 text-accent">Monday</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-light focus:ring-light">
                            <span class="ml-2 text-accent">Tuesday</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-light focus:ring-light">
                            <span class="ml-2 text-accent">Wednesday</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-light focus:ring-light">
                            <span class="ml-2 text-accent">Thursday</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-light focus:ring-light">
                            <span class="ml-2 text-accent">Friday</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded text-light focus:ring-light">
                            <span class="ml-2 text-accent">Saturday</span>
                        </label>
                    </div>
                </div>
                
                <!-- Feeding Instructions -->
                <div class="md:col-span-2">
                    <h3 class="text-lg font-semibold text-primary mb-2">Feeding Instructions</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="food-type" class="block text-accent mb-1">Food Type/Brand</label>
                            <input type="text" id="food-type" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                        <div>
                            <label for="feeding-schedule" class="block text-accent mb-1">Feeding Schedule</label>
                            <input type="text" id="feeding-schedule" placeholder="e.g., 1 cup at noon" class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                    </div>
                </div>
                
                <!-- Emergency Contact -->
                <div class="md:col-span-2">
                    <h3 class="text-lg font-semibold text-primary mb-2">Emergency Contact</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="emergency-name" class="block text-accent mb-1">Contact Name*</label>
                            <input type="text" id="emergency-name" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                        <div>
                            <label for="emergency-phone" class="block text-accent mb-1">Phone Number*</label>
                            <input type="tel" id="emergency-phone" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                        </div>
                    </div>
                </div>
                
                <!-- Vaccination Upload -->
                <div class="md:col-span-2">
                    <label for="vaccination" class="block text-accent mb-1">Upload Vaccination Records*</label>
                    <input type="file" id="vaccination" required class="w-full px-4 py-2 border border-accent rounded focus:outline-none focus:ring-2 focus:ring-light">
                </div>
                
                <!-- Submit Button -->
                <div class="md:col-span-2">
                    <button type="submit" class="w-full bg-primary hover:bg-dark text-white font-bold py-3 px-4 rounded transition duration-200">
                        Submit Registration
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