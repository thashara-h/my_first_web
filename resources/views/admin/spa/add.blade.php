<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Appointment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Add New Appointment</h1>
                <a href="{{ route('admin.spa.index') }}" class="text-blue-600 hover:text-blue-800">
                    ← Back to Appointments
                </a>
            </div>

            <!-- Add Form -->
            <div class="bg-white rounded-lg shadow-md p-6">
                @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
                <form action="{{ route('admin.spa.store') }}" method="POST">
                    @csrf

                    <!-- Pet Information -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">Pet Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="pet_name" class="block text-sm font-medium text-gray-700 mb-1">Pet Name *</label>
                                <input type="text" id="pet_name" name="pet_name" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="breed" class="block text-sm font-medium text-gray-700 mb-1">Breed *</label>
                                <input type="text" id="breed" name="breed" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="age" class="block text-sm font-medium text-gray-700 mb-1">Age *</label>
                                <input type="text" id="age" name="age" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Owner Information -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">Owner Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="owner_name" class="block text-sm font-medium text-gray-700 mb-1">Owner Name *</label>
                                <input type="text" id="owner_name" name="owner_name" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="contact_number" class="block text-sm font-medium text-gray-700 mb-1">Contact Number *</label>
                                <input type="tel" id="contact_number" name="contact_number" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Appointment Details -->
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-gray-700 mb-4 pb-2 border-b">Appointment Details</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="service_name" class="block text-sm font-medium text-gray-700 mb-1">Service *</label>
                                <select id="service_name" name="service_name" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Select a service</option>
                                    <option value="Puppy Program">Puppy Program</option>
                                    <option value="Vaccination">Vaccination</option>
                                    <option value="Checkup">Regular Checkup</option>
                                    <option value="Grooming">Grooming</option>
                                </select>
                            </div>
                            <div>
                                <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-1">Date *</label>
                                <input type="date" id="appointment_date" name="appointment_date" required
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="md:col-span-2">
                                <label for="special_requests" class="block text-sm font-medium text-gray-700 mb-1">Special Requests</label>
                                <textarea id="special_requests" name="special_requests" rows="3"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end space-x-3">
                        <button type="reset" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Reset
                        </button>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Create Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>