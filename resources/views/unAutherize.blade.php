<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access - PawMart Pet Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        .font-display {
            font-family: 'Playfair Display', serif;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
    </style>
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
<body class="bg-light/10 min-h-screen flex items-center">
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden border border-accent/10">
            <div class="p-8 text-center">
                <div class="flex justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-dark font-display mb-4">Unauthorized Access</h1>
                <p class="text-accent mb-6">You don't have permission to view this page. Please contact your administrator if you believe this is an error.</p>
                <div class="flex flex-col space-y-4">
                    <a href="{{ url('/') }}" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition font-medium">
                        Return to Homepage
                    </a>
                    @auth
                    <a href="{{ route('backend.admindashboard') }}" class="px-6 py-3 border border-primary text-primary rounded-lg hover:bg-primary/10 transition font-medium">
                        Go to Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="px-6 py-3 border border-primary text-primary rounded-lg hover:bg-primary/10 transition font-medium">
                        Login as Admin
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</body>
</html>