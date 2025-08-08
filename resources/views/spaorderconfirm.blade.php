<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation - PawMart</title>
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
                <h2 class="text-xl mt-4 font-semibold">Appointment Confirmation</h2>
                <p class="opacity-90">Thank you for booking with us!</p>
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
                
                <h3 class="text-center text-xl font-semibold text-gray-800 mb-2">Your appointment is confirmed!</h3>
                <p class="text-center text-gray-600 mb-8">We've sent the details to your email address.</p>
                
                <!-- Appointment Details -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Appointment Details</h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Booking Reference</p>
                            <p class="font-medium">#PM-{{ str_pad($appointment->id, 6, '0', STR_PAD_LEFT) }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Date Booked</p>
                            <p class="font-medium">{{ now()->format('M d, Y h:i A') }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Service</p>
                            <p class="font-medium">{{ $appointment->service_name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Appointment Date</p>
                            <p class="font-medium">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('M d, Y') }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Pet Name</p>
                            <p class="font-medium">{{ $appointment->pet_name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Breed</p>
                            <p class="font-medium">{{ $appointment->breed }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Owner Information -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Owner Information</h4>
                    
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-gray-500">Full Name</p>
                            <p class="font-medium">{{ $appointment->owner_name }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Contact Number</p>
                            <p class="font-medium">{{ $appointment->contact_number }}</p>
                        </div>
                        
                        <div>
                            <p class="text-sm text-gray-500">Email Address</p>
                            <p class="font-medium">{{ $appointment->email }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Special Requests -->
                @if($appointment->special_requests)
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Special Requests</h4>
                    <p class="text-gray-700">{{ $appointment->special_requests }}</p>
                </div>
                @endif
                
                <!-- Transportation -->
                @if($appointment->transportation)
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h4 class="font-semibold text-lg text-gray-800 mb-4">Transportation</h4>
                    <p class="text-gray-700">{{ $appointment->transportation }}</p>
                </div>
                @endif
                
                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/" class="flex-1 bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-4 rounded-lg text-center transition">
                        Back to Home
                    </a>
                    <a href="/services" class="flex-1 bg-white border border-purple-600 text-purple-600 hover:bg-purple-50 font-medium py-3 px-4 rounded-lg text-center transition">
                        Book Another Service
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