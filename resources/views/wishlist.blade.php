//update wishlist
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
<!-- Wishlist Page -->
<section class="py-12 bg-light">
  <div class="max-w-6xl mx-auto px-4">
    <h1 class="text-3xl font-display font-bold text-primary mb-2">Your Wishlist</h1>
    <p class="text-gray-600 mb-8">Saved items for later</p>
    
    <!-- Empty State -->
    <!-- <div class="text-center py-16 bg-white rounded-2xl shadow-sm">
      <span class="text-6xl">❤️</span>
      <p class="mt-4 text-lg font-medium">Your wishlist is empty</p>
      <p class="mt-2 text-gray-600">Save your favorite items here</p>
      <a href="/products" class="mt-6 inline-block bg-accent text-white px-6 py-2 rounded-lg">Browse Products</a>
    </div> -->

    <!-- Wishlist Items -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Item 1 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
        <div class="relative">
          <img src="https://via.placeholder.com/300" alt="Dog Food" class="w-full h-48 object-cover">
          <button class="absolute top-3 right-3 p-2 bg-white/90 rounded-full hover:bg-red-500 hover:text-white transition" onclick="removeFromWishlist(1)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div class="p-4">
          <h3 class="font-medium">Premium Dog Food - Salmon</h3>
          <p class="text-sm text-gray-600 mt-1">5kg Bag • For Adult Dogs</p>
          <div class="mt-3 flex justify-between items-center">
            <span class="font-display font-bold text-primary">$29.99</span>
            <button class="text-sm bg-primary text-white px-3 py-1 rounded hover:bg-opacity-90 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
        <div class="relative">
          <img src="https://via.placeholder.com/300" alt="Cat Tree" class="w-full h-48 object-cover">
          <button class="absolute top-3 right-3 p-2 bg-white/90 rounded-full hover:bg-red-500 hover:text-white transition" onclick="removeFromWishlist(2)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div class="p-4">
          <h3 class="font-medium">Cat Climbing Tree</h3>
          <p class="text-sm text-gray-600 mt-1">72" Tall • Beige</p>
          <div class="mt-3 flex justify-between items-center">
            <span class="font-display font-bold text-primary">$89.99</span>
            <button class="text-sm bg-primary text-white px-3 py-1 rounded hover:bg-opacity-90 transition">
              Add to Cart
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Move All to Cart -->
    <div class="mt-8 flex justify-end">
      <button class="bg-accent hover:bg-accent/90 text-white font-medium py-2 px-6 rounded-lg transition flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
        </svg>
        Add All to Cart
      </button>
    </div>
  </div>
</section>

<script>
  function removeFromWishlist(id) {
    // Add your wishlist removal logic here
    console.log(`Removed item ${id} from wishlist`);
  }
</script>