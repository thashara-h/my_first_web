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
            primary: '#5a058f',  // Deep Purple
            accent: '#8d9494',   // Vibrant Pink
            light: '#07a6a6',
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
<body class="bg-light text-dark font-sans">

  <!-- Product Categories -->
  <section class="py-16 bg-gradient-to-br from-white to-light">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 text-gray-600" data-aos="fade-up">
        <h3 class="text-3xl font-display font-bold mb-4">Shop By Pet</h3>
        <p class="text-gray-500 max-w-2xl mx-auto">Everything you need for every type of pet</p>
      </div>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <!-- Category 1 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/dog.png" alt="Dog" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Dogs</h4>
            <a href="/managedogfood" class="text-sm text-gray-200 hover:text-white font-medium">Manage →</a>
          </div>
        </div>
        
        <!-- Category 2 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="100">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/cat.png" alt="Cat" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Cats</h4>
            <a href="/managecatfood" class="text-sm text-gray-200 hover:text-white font-medium">Manage →</a>
          </div>
        </div>
        
        <!-- Category 3 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="200">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/rabbit.png" alt="Rabbit" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Small Pets</h4>
            <a href="/manageotherpetfood" class="text-sm text-gray-200 hover:text-white font-medium">Manage →</a>
          </div>
        </div>
        
        <!-- Category 4 -->
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="300">
          <div class="h-48 bg-white flex items-center justify-center">
            <img src="https://img.icons8.com/color/96/000000/parrot.png" alt="Bird" class="h-24">
          </div>
          <div class="p-6 text-center">
            <h4 class="text-xl font-semibold text-white mb-2">Birds</h4>
            <a href="/managebirdfood" class="text-sm text-gray-200 hover:text-white font-medium">Manage →</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
   

  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true
    });
  </script>
</body>
</html>