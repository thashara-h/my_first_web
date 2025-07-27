<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | PetCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 w-64 bg-white shadow-md p-4">
            <div class="flex items-center mb-8">
                <i class="fas fa-paw text-2xl text-blue-500 mr-2"></i>
                <h1 class="text-xl font-bold">PetCare</h1>
            </div>
            <nav>
                <a href="#" class="block py-2 px-4 text-gray-600 hover:bg-blue-50 rounded-lg mb-1">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                <a href="#" class="block py-2 px-4 text-gray-600 hover:bg-blue-50 rounded-lg mb-1">
                    <i class="fas fa-heartbeat mr-2"></i> Pet Health
                </a>
                <a href="#" class="block py-2 px-4 text-blue-500 bg-blue-50 rounded-lg mb-1">
                    <i class="fas fa-cog mr-2"></i> Settings
                </a>
                <a href="#" class="block py-2 px-4 text-gray-600 hover:bg-blue-50 rounded-lg mb-1">
                    <i class="fas fa-user mr-2"></i> Profile
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="ml-64 p-8">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Settings</h1>
                
                <!-- Account Settings Card -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-800">
                            <i class="fas fa-user-cog mr-2 text-blue-500"></i> Account Settings
                        </h2>
                        <button class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-1/3 text-gray-600">Name</div>
                            <div class="w-2/3">John Doe</div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1/3 text-gray-600">Email</div>
                            <div class="w-2/3">john@example.com</div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1/3 text-gray-600">Password</div>
                            <div class="w-2/3">••••••••</div>
                        </div>
                    </div>
                </div>

                <!-- Notification Settings -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">
                        <i class="fas fa-bell mr-2 text-blue-500"></i> Notification Preferences
                    </h2>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium">Email Notifications</p>
                                <p class="text-sm text-gray-500">Receive important updates via email</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500"></div>
                            </label>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium">SMS Alerts</p>
                                <p class="text-sm text-gray-500">Get urgent reminders via text</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500"></div>
                            </label>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium">App Notifications</p>
                                <p class="text-sm text-gray-500">In-app alerts and reminders</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500"></div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- App Preferences -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">
                        <i class="fas fa-palette mr-2 text-blue-500"></i> App Preferences
                    </h2>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Theme</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>Light</option>
                                <option>Dark</option>
                                <option>System</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Default Pet</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>Max (Dog)</option>
                                <option>Luna (Cat)</option>
                                <option>None</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Danger Zone -->
                <div class="bg-white rounded-lg shadow-md p-6 border border-red-200">
                    <h2 class="text-lg font-semibold text-red-600 mb-4">
                        <i class="fas fa-exclamation-triangle mr-2"></i> Danger Zone
                    </h2>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-medium">Delete Account</p>
                                <p class="text-sm text-gray-500">Permanently remove your account and all data</p>
                            </div>
                            <button class="px-4 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100">
                                Delete Account
                            </button>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-medium">Export Data</p>
                                <p class="text-sm text-gray-500">Download all your pet data</p>
                            </div>
                            <button class="px-4 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100">
                                Export Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>