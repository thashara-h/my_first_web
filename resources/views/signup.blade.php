<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Sign Up</title>
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
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            display: ['Poppins', 'sans-serif']
          }
        }
      }
    }
    </script>
    <style>
        .slide-in {
            animation: slideIn 0.5s ease-out forwards;
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .page-container {
            transition: all 0.5s ease-out;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-light to-white flex items-center justify-center min-h-screen p-4 overflow-hidden">
    <div id="signupContainer" class="flex flex-col md:flex-row bg-white rounded-br-3xl rounded-tl-3xl shadow-md overflow-hidden w-full max-w-4xl page-container">
        <!-- Image Section -->
        <div class="w-full md:w-1/2 bg-green-100 flex items-center justify-center p-8">
            <img src="{{ asset('images/stylish dog.jpeg') }}" 
                 alt="Happy dog and cat together" 
                 class="rounded-lg object-cover h-full w-full">
        </div>
        
        <!-- Form Section -->
        <div class="w-full md:w-1/2 p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">PawMart</h1>
            <h2 class="text-lg text-gray-600 mb-6">Create Your Account</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                
                <a href="/login" class="block text-right text-sm text-gray-500 hover:underline">Already have an account?</a>
            </div>
            
            <hr class="my-6 border-gray-200">
            
            <button id="signupButton" class="w-full bg-light hover:bg-blue-700 text-white py-2 px-4 rounded-md font-medium transition duration-150">
                Sign Up
            </button>
        </div>
    </div>
    
    <!-- Success Message (hidden by default) -->
    <div id="successMessage" class="hidden page-container w-full max-w-md bg-white p-8 rounded-lg shadow-md text-center">
        <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Success!</h2>
        <p class="text-gray-600 mb-6">Your account has been created successfully.</p>
        <button class="bg-light hover:bg-blue-700 text-white py-2 px-6 rounded-md font-medium transition duration-150">
            Continue to Dashboard
        </button>
    </div>

    <script>
        document.getElementById('signupButton').addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the form container and success message elements
            const signupContainer = document.getElementById('signupContainer');
            const successMessage = document.getElementById('successMessage');
            
            // Add slide-out animation to form
            signupContainer.style.transform = 'translateX(-100%)';
            signupContainer.style.opacity = '0';
            
            // After form slides out, show success message with slide-in animation
            setTimeout(() => {
                signupContainer.classList.add('hidden');
                successMessage.classList.remove('hidden');
                successMessage.classList.add('dropdown');
            }, 500);
        });
    </script>
</body>
</html>