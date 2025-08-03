<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawMart - Login</title>
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
        
        .dropdown {
            animation: dropDown 0.5s ease-out forwards;
        }
        
        @keyframes dropDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-b from-light to-white flex items-center justify-center min-h-screen p-4 overflow-hidden">
    <div id="loginContainer" class="flex flex-col md:flex-row bg-white rounded-br-3xl rounded-tl-3xl shadow-md overflow-hidden w-full max-w-4xl page-container">
        <!-- Image Section -->
        <div class="w-full md:w-1/2 bg-green-100 flex items-center justify-center p-8">
            <img src="{{ asset('images/loginimg.jpeg') }}" 
                 alt="Happy dog with collar" 
                 class="rounded-lg object-cover h-full w-full">
        </div>
        
        <!-- Form Section -->
        
        <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="w-full max-w-xl p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">PawMart</h1>
            <h2 class="text-lg text-gray-600 mb-6">Welcome Back!</h2>
            
            <div class="space-y-6">
                <div class="w-full">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" class="w-[400px] px-3 py-2 text-sm leading-tight border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="your@email.com">

                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" class="w-full px-3 py-2 text-sm leading-tight border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-500" placeholder="••••••••">
                    <a href="/forgot-password" class="block text-left text-sm text-gray-500 hover:underline mt-1">Forgot Password?</a>
                </div>
              
                
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>
             </div>    
            <div class="flex justify-between items-center">
            <div class="text-right mt-4">    
                <div class="flex justify-end mt-4 w-full max-w-md">
                <span class="text-sm text-gray-600">
                 Don't have an account?
                <a href="/register" class="text-primary hover:underline ml-1">Sign Up</a>
            </span>
            </div>
            </div>    
            </div> 


            
            <div class="space-y-4">
            <hr class="my-6 border-gray-200 ">
            
            <button id="loginButton" href="/backend.admindashboard" type="submit" class="w-full bg-light hover:bg-blue-700 text-white py-2 px-36 rounded-md font-medium transition duration-150">
                Login
            </button>
            </div>
        </div>
        </form>
    </div>
    
    
</body>
</html>