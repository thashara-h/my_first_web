<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Daycare Registration | PetCare Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
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
<body class="bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white">New Daycare Registration</h1>
                <a href="{{ route('admin.daycare.index') }}" class="text-petpurple hover:text-purple-700 dark:text-light dark:hover:text-white">
                    ← Back to Daycare Registrations
                </a>
            </div>

            <!-- Registration Form -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 dark:bg-red-900 dark:text-red-100 dark:border-red-700">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 dark:bg-green-900 dark:text-green-100 dark:border-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.daycare.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="service_type" value="day_care">

                    <!-- Pet Information -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4 pb-2 border-b border-gray-200 dark:border-gray-600">Pet Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="pet_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Pet Name *</label>
                                <input type="text" id="pet_name" name="pet_name" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="pet_breed" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Breed *</label>
                                <input type="text" id="pet_breed" name="pet_breed" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="pet_age" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Age *</label>
                                <input type="text" id="pet_age" name="pet_age" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="temperament" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Temperament *</label>
                                <select id="temperament" name="temperament" required
                                        class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                                    <option value="">Select temperament</option>
                                    <option value="Shy/Timid">Shy/Timid</option>
                                    <option value="Friendly/Social">Friendly/Social</option>
                                    <option value="Energetic/Playful">Energetic/Playful</option>
                                    <option value="Independent">Independent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Owner Information -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4 pb-2 border-b border-gray-200 dark:border-gray-600">Owner Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="owner_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Owner Name *</label>
                                <input type="text" id="owner_name" name="owner_name" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="contact_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number *</label>
                                <input type="tel" id="contact_number" name="contact_number" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email *</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                        </div>
                    </div>

                    <!-- Daycare Schedule -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4 pb-2 border-b border-gray-200 dark:border-gray-600">Daycare Schedule</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="dropoff_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Drop-off Time *</label>
                                <input type="time" id="dropoff_time" name="dropoff_time" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="pickup_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Pick-up Time *</label>
                                <input type="time" id="pickup_time" name="pickup_time" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Days Needed *</label>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                    @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'] as $day)
                                        <label class="flex items-center">
                                            <input type="checkbox" name="days_needed[]" value="{{ $day }}" 
                                                   class="rounded border-gray-300 text-petpurple focus:ring-petpurple dark:border-gray-600 dark:bg-gray-700">
                                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">{{ $day }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feeding Instructions -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4 pb-2 border-b border-gray-200 dark:border-gray-600">Feeding Instructions</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="food_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Food Type/Brand</label>
                                <input type="text" id="food_type" name="food_type"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="feeding_schedule" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Feeding Schedule</label>
                                <input type="text" id="feeding_schedule" name="feeding_schedule" placeholder="e.g., 1 cup at noon"
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4 pb-2 border-b border-gray-200 dark:border-gray-600">Emergency Contact</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="emergency_contact_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Contact Name *</label>
                                <input type="text" id="emergency_contact_name" name="emergency_contact_name" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="emergency_contact_phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number *</label>
                                <input type="tel" id="emergency_contact_phone" name="emergency_contact_phone" required
                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white">
                            </div>
                        </div>
                    </div>

                    <!-- Vaccination Records -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4 pb-2 border-b border-gray-200 dark:border-gray-600">Vaccination Records</h2>
                        <div>
                            <label for="vaccination_file" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Upload Vaccination Records *</label>
                            <input type="file" name="vaccination_file" required
                                   class="block w-full text-sm text-gray-500 dark:text-gray-400
                                          file:mr-4 file:py-2 file:px-4
                                          file:rounded-md file:border-0
                                          file:text-sm file:font-semibold
                                          file:bg-petpurple file:text-white
                                          hover:file:bg-purple-700
                                          dark:file:bg-light dark:file:text-dark
                                          dark:hover:file:bg-accent">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">PDF, JPG or PNG (Max: 2MB)</p>
                        </div>
                    </div>

                    <!-- Additional Notes -->
                    <div class="mb-6">
                        <label for="additional_notes" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Additional Notes</label>
                        <textarea id="additional_notes" name="additional_notes" rows="3"
                                  class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-petpurple focus:border-petpurple dark:bg-gray-800 dark:text-white"></textarea>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end space-x-3">
                        <button type="reset" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-petpurple">
                            Reset
                        </button>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-petpurple hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-petpurple">
                            Submit Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>