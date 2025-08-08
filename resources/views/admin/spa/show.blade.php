<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details | PetCare Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        petpurple: '#07a6a6',
                        petgreen: '#6805b9',
                        primary: '#5a058f',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header with back button -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Appointment Details</h1>
                <a href="{{ url()->previous() }}" class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Back
                </a>
            </div>

            <!-- Appointment Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-petpurple to-petgreen px-6 py-4">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-white">Appointment #{{ $appointment->id }}</h2>
                        <span class="px-3 py-1 rounded-full text-xs font-semibold 
                            {{ $appointment->status === 'confirmed' ? 'bg-green-100 text-green-800' : 
                               ($appointment->status === 'completed' ? 'bg-blue-100 text-blue-800' : 
                               ($appointment->status === 'cancelled' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800')) }}">
                            {{ ucfirst($appointment->status) }}
                        </span>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="p-6 grid md:grid-cols-2 gap-8">
                    <!-- Pet Information -->
                    <div>
                        <h3 class="text-lg font-medium mb-4 text-gray-800 border-b pb-2">Pet Information</h3>
                        <div class="space-y-3">
                            <div>
                                <p class="text-sm text-gray-500">Pet Name</p>
                                <p class="font-medium">{{ $appointment->pet_name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Breed</p>
                                <p class="font-medium">{{ $appointment->breed }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Age</p>
                                <p class="font-medium">{{ $appointment->age }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Owner Information -->
                    <div>
                        <h3 class="text-lg font-medium mb-4 text-gray-800 border-b pb-2">Owner Information</h3>
                        <div class="space-y-3">
                            <div>
                                <p class="text-sm text-gray-500">Owner Name</p>
                                <p class="font-medium">{{ $appointment->owner_name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Contact Number</p>
                                <p class="font-medium">{{ $appointment->contact_number }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <p class="font-medium">{{ $appointment->email }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Appointment Details -->
                    <div>
                        <h3 class="text-lg font-medium mb-4 text-gray-800 border-b pb-2">Appointment Details</h3>
                        <div class="space-y-3">
                            <div>
                                <p class="text-sm text-gray-500">Service</p>
                                <p class="font-medium">{{ $appointment->service_name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Appointment Date</p>
                                <p class="font-medium">
                                    {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F j, Y') }}
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Created At</p>
                                <p class="font-medium">
                                    {{ \Carbon\Carbon::parse($appointment->created_at)->format('F j, Y g:i A') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Special Requests -->
                    <div>
                        <h3 class="text-lg font-medium mb-4 text-gray-800 border-b pb-2">Special Requests</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            @if($appointment->special_requests)
                                <p class="text-gray-700">{{ $appointment->special_requests }}</p>
                            @else
                                <p class="text-gray-500 italic">No special requests</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-6 py-4 bg-gray-50 border-t flex justify-end space-x-3">
                    <a href="{{ route('admin.spa.edit', $appointment->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-edit mr-2"></i> Edit
                    </a>
                    <form action="{{ route('admin.spa.destroy', $appointment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg flex items-center" onclick="return confirm('Are you sure you want to delete this appointment?')">
                            <i class="fas fa-trash-alt mr-2"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>