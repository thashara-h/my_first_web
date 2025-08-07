<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daycare Registration Confirmation - PawMart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-purple-600 to-blue-600 p-6 text-white">
                <div class="flex items-center space-x-3">
                    <span class="text-3xl">🐾</span>
                    <h1 class="text-2xl font-bold">PawMart</h1>
                </div>
                <h2 class="text-xl mt-4 font-semibold">Daycare Registration Confirmation</h2>
                <p class="opacity-90">Thank you for registering with us!</p>
            </div>
            
            <!-- Confirmation Content -->
            <div class="p-6 md:p-8">
                <div class="flex items-center justify-center mb-6">
                    <div class="bg-green-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                
                <h3 class="text-center text-xl font-semibold text-gray-800 mb-2">Your daycare registration is confirmed!</h3>
                <p class="text-center text-gray-600 mb-8">We've sent the details to your email address.</p>
                
                <!-- Registration Details -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Registration Details</h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Registration ID</p>
                            <p class="font-medium">#DC-{{ str_pad($daycare->id, 6, '0', STR_PAD_LEFT) }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Registration Date</p>
                            <p class="font-medium">{{ $daycare->created_at->format('M d, Y h:i A') }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Service Type</p>
                            <p class="font-medium">Daycare Service</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Status</p>
                            <p class="font-medium capitalize">{{ $daycare->status }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Pet Information -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Pet Information</h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Pet Name</p>
                            <p class="font-medium">{{ $daycare->pet_name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Breed</p>
                            <p class="font-medium">{{ $daycare->pet_breed }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Age</p>
                            <p class="font-medium">{{ $daycare->pet_age }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Temperament</p>
                            <p class="font-medium">{{ $daycare->temperament }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Schedule Information -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Schedule</h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Drop-off Time</p>
                            <p class="font-medium">{{ \Carbon\Carbon::parse($daycare->dropoff_time)->format('h:i A') }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Pick-up Time</p>
                            <p class="font-medium">{{ \Carbon\Carbon::parse($daycare->pickup_time)->format('h:i A') }}</p>
                        </div>
                        
                        <div class="md:col-span-2">
                            <p class="text-sm text-gray-500">Days Needed</p>
                            <p class="font-medium">{{ implode(', ', json_decode($daycare->days_needed)) }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Feeding Instructions -->
                @if($daycare->food_type || $daycare->feeding_schedule)
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Feeding Instructions</h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        @if($daycare->food_type)
                        <div>
                            <p class="text-sm text-gray-500">Food Type/Brand</p>
                            <p class="font-medium">{{ $daycare->food_type }}</p>
                        </div>
                        @endif
                        
                        @if($daycare->feeding_schedule)
                        <div>
                            <p class="text-sm text-gray-500">Feeding Schedule</p>
                            <p class="font-medium">{{ $daycare->feeding_schedule }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
                
                <!-- Emergency Contact -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Emergency Contact</h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Contact Name</p>
                            <p class="font-medium">{{ $daycare->emergency_contact_name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Phone Number</p>
                            <p class="font-medium">{{ $daycare->emergency_contact_phone }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Vaccination Records -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Vaccination Records</h4>
                    <p class="text-sm text-gray-500 mb-2">Uploaded File:</p>
                    <a href="{{ Storage::url($daycare->vaccination_file_path) }}" 
                       class="inline-flex items-center text-purple-600 hover:underline"
                       target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                        </svg>
                        View Vaccination Records
                    </a>
                </div>
                
                <!-- Additional Notes -->
                @if($daycare->additional_notes)
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Additional Notes</h4>
                    <p class="text-gray-700">{{ $daycare->additional_notes }}</p>
                </div>
                @endif
                
                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('admin.dashboard') }}" class="flex-1 bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-4 rounded-lg text-center transition">
                        Back to Dashboard
                    </a>
                    <a href="{{ route('admin.daycare.create') }}" class="flex-1 bg-white border border-purple-600 text-purple-600 hover:bg-purple-50 font-medium py-3 px-4 rounded-lg text-center transition">
                        New Registration
                    </a>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="bg-gray-100 p-4 text-center text-gray-600 text-sm">
                Need help? Contact us at <a href="mailto:info@pawmart.com" class="text-purple-600 hover:underline">info@pawmart.com</a>
            </div>
        </div>
    </div>
</body>
</html>