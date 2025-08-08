<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Veterinary Appointment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Edit Veterinary Appointment</h1>
                <a href="{{ route('admin.spa.index') }}" class="text-blue-600 hover:text-blue-800">
                    ← Back to Appointments
                </a>
            </div>

            <!-- Edit Form -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <form action="{{ route('admin.spa.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Pet Information -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">Pet Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="pet_name" class="block text-sm font-medium text-gray-700 mb-1">Pet Name</label>
                                <input type="text" id="pet_name" name="pet_name" 
                                       value="{{ old('pet_name', $appointment->pet_name) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Owner Information -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">Owner Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="owner_name" class="block text-sm font-medium text-gray-700 mb-1">Owner Name</label>
                                <input type="text" id="owner_name" name="owner_name" 
                                       value="{{ old('owner_name', $appointment->owner_name) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="contact_number" class="block text-sm font-medium text-gray-700 mb-1">Contact Number</label>
                                <input type="tel" id="contact_number" name="contact_number" 
                                       value="{{ old('contact_number', $appointment->contact_number) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Appointment Details -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">Appointment Details</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="service_name" class="block text-sm font-medium text-gray-700 mb-1">Service</label>
                                <select id="service_name" name="service_name"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    <option value="Puppy Program" {{ $appointment->service_name == 'Puppy Program' ? 'selected' : '' }}>Puppy Program</option>
                                    <option value="Vaccination" {{ $appointment->service_name == 'Vaccination' ? 'selected' : '' }}>Vaccination</option>
                                    <option value="Checkup" {{ $appointment->service_name == 'Checkup' ? 'selected' : '' }}>Regular Checkup</option>
                                    <option value="Grooming" {{ $appointment->service_name == 'Grooming' ? 'selected' : '' }}>Grooming</option>
                                </select>
                            </div>
                            <div>
                                <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                <input type="date" id="appointment_date" name="appointment_date" 
                                       value="{{ old('appointment_date', $appointment->appointment_date->format('Y-m-d')) }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">Status</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Appointment Status</label>
                                <select id="status" name="status"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                    <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('admin.spa.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </a>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>