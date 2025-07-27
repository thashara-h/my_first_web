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
<!-- Cart Page -->
<section class="py-12 bg-light">
  <div class="max-w-6xl mx-auto px-4">
    <h1 class="text-3xl font-display font-bold text-primary mb-8">Your Shopping Cart</h1>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Cart Items -->
      <div class="md:col-span-2 bg-white rounded-2xl shadow-md p-6">
        <!-- Empty State -->
        <!-- <div class="text-center py-12">
          <span class="text-6xl">🛒</span>
          <p class="mt-4 text-lg font-medium">Your cart is empty</p>
          <a href="/products" class="mt-4 inline-block bg-accent text-white px-6 py-2 rounded-lg">Shop Products</a>
        </div> -->

        <!-- Cart Items List -->
        <div class="divide-y">
          <!-- Item 1 -->
          <div class="py-4 flex flex-col sm:flex-row gap-4" data-item-id="1">
            <img src="https://via.placeholder.com/100" alt="Dog Food" class="w-24 h-24 object-cover rounded-lg">
            <div class="flex-1">
              <h3 class="font-medium">Premium Dog Food - Chicken Recipe</h3>
              <p class="text-sm text-gray-600">10kg Bag</p>
              <div class="mt-2 flex items-center">
                <button class="text-accent hover:text-primary" onclick="updateQuantity(1, -1)">−</button>
                <span class="mx-2 w-8 text-center" id="quantity-1">2</span>
                <button class="text-accent hover:text-primary" onclick="updateQuantity(1, 1)">+</button>
              </div>
            </div>
            <div class="text-right">
              <p class="font-display font-bold text-primary">$49.98</p>
              <button class="mt-2 text-red-500 text-sm flex items-center ml-auto" onclick="removeItem(1)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                Remove
              </button>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="py-4 flex flex-col sm:flex-row gap-4" data-item-id="2">
            <img src="https://via.placeholder.com/100" alt="Cat Toy" class="w-24 h-24 object-cover rounded-lg">
            <div class="flex-1">
              <h3 class="font-medium">Interactive Cat Feather Toy</h3>
              <p class="text-sm text-gray-600">Blue/White</p>
              <div class="mt-2 flex items-center">
                <button class="text-accent hover:text-primary" onclick="updateQuantity(2, -1)">−</button>
                <span class="mx-2 w-8 text-center" id="quantity-2">1</span>
                <button class="text-accent hover:text-primary" onclick="updateQuantity(2, 1)">+</button>
              </div>
            </div>
            <div class="text-right">
              <p class="font-display font-bold text-primary">$12.99</p>
              <button class="mt-2 text-red-500 text-sm flex items-center ml-auto" onclick="removeItem(2)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
                Remove
              </button>
            </div>
          </div>
        </div>

        <!-- Coupon Code -->
        <div class="mt-6 flex">
          <input type="text" placeholder="Coupon Code" class="flex-1 border border-gray-300 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
          <button class="bg-primary text-white px-4 py-2 rounded-r-lg hover:bg-opacity-90">Apply</button>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="bg-white rounded-2xl shadow-md p-6 h-fit sticky top-4">
        <h2 class="font-display font-bold text-xl text-primary mb-4">Order Summary</h2>
        <div class="space-y-3">
          <div class="flex justify-between">
            <span>Subtotal (2 items)</span>
            <span>$62.97</span>
          </div>
          <div class="flex justify-between">
            <span>Shipping</span>
            <span class="text-accent">Free</span>
          </div>
          <div class="flex justify-between">
            <span>Tax</span>
            <span>$5.03</span>
          </div>
          <div class="border-t pt-3 mt-3 flex justify-between font-display font-bold text-lg">
            <span>Total</span>
            <span>$68.00</span>
          </div>
        </div>
        <a href="/checkout" class="mt-6 block w-full bg-accent hover:bg-accent/90 text-white text-center font-bold py-3 px-4 rounded-lg transition">
          Proceed to Checkout
        </a>
        <p class="mt-3 text-sm text-center text-gray-600">
          or <a href="/products" class="text-primary hover:underline">Continue Shopping</a>
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  function updateQuantity(id, change) {
    const el = document.getElementById(`quantity-${id}`);
    let qty = parseInt(el.textContent) + change;
    if (qty < 1) qty = 1;
    el.textContent = qty;
    // Add your cart update logic here
  }

  function removeItem(id) {
    const item = document.querySelector(`[data-item-id="${id}"]`);
    item.remove();
    // Add your cart removal logic here
  }
</script>