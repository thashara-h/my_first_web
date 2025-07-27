<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PawMart – Premium Pet Care</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#78043c',  // Deep Purple
            accent: '#8d9494',   // Vibrant Pink
            light: '#06a0a8',
            dark: '#1F1A36'
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
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@700;800&display=swap');
  </style>
</head>
<!-- Order Confirmation -->
<section class="py-16 bg-light min-h-screen flex items-center">
  <div class="max-w-lg mx-auto bg-white rounded-2xl shadow-xl p-8 text-center">
    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
      </svg>
    </div>
    <h1 class="text-3xl font-display font-bold text-primary mb-4">Message sent!</h1>
    <p class="mb-6">Thank you!</p>
    
   

    <div class="space-y-3">
      
      <a href="/services" class="block border border-primary text-primary hover:bg-primary/5 font-bold py-3 px-4 rounded-lg transition">
        Continue Shopping
      </a>
    </div>

    <p class="mt-6 text-sm text-gray-600">
      Need help? <a href="/contact" class="text-primary hover:underline">Contact us</a>
    </p>
  </div>
</section>