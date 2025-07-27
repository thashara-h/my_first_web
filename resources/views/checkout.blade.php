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
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@700;800&display=swap');
  </style>
</head>
<!-- Checkout Page -->
<section class="py-12 bg-light">
  <div class="max-w-4xl mx-auto px-4">
    <div class="flex items-center mb-8">
      <a href="/cart" class="text-accent hover:text-primary flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        Back to Cart
      </a>
      <h1 class="text-3xl font-display font-bold text-primary mx-auto">Checkout</h1>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Checkout Form -->
      <div class="md:col-span-2 bg-white rounded-2xl shadow-md p-6">
        <!-- Progress Steps -->
        <div class="flex justify-between mb-8 relative">
          <div class="flex flex-col items-center z-10">
            <div class="w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center">1</div>
            <span class="mt-2 text-sm font-medium">Shipping</span>
          </div>
          <div class="flex flex-col items-center z-10">
            <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center">2</div>
            <span class="mt-2 text-sm text-gray-600">Payment</span>
          </div>
          <div class="flex flex-col items-center z-10">
            <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center">3</div>
            <span class="mt-2 text-sm text-gray-600">Confirm</span>
          </div>
          <div class="absolute top-4 left-0 right-0 h-0.5 bg-gray-200 -z-1"></div>
        </div>

        <!-- Shipping Form -->
        <h2 class="font-display font-bold text-xl text-primary mb-4">Shipping Information</h2>
        <form class="space-y-4">
          <div class="grid sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">First Name</label>
              <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Last Name</label>
              <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">Address</label>
            <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
          </div>
          <div class="grid sm:grid-cols-3 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">City</label>
              <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">State</label>
              <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
                <option>Select State</option>
                <option>California</option>
                <option>New York</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">ZIP Code</label>
              <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium mb-1">Phone</label>
            <input type="tel" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-accent">
          </div>
          <div class="flex items-center">
            <input type="checkbox" id="save-address" class="h-4 w-4 text-accent focus:ring-accent border-gray-300 rounded">
            <label for="save-address" class="ml-2 block text-sm">Save this address for future use</label>
          </div>

          <!-- Navigation Buttons -->
          <div class="flex justify-between pt-6">
            <a href="/cart" class="text-primary hover:underline flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              Return to Cart
            </a>
            <button type="button" onclick="nextStep()" class="bg-accent hover:bg-accent/90 text-white font-bold py-2 px-6 rounded-lg transition">
              Continue to Payment
            </button>
          </div>
        </form>
      </div>

      <!-- Order Summary -->
      <div class="bg-white rounded-2xl shadow-md p-6 h-fit sticky top-4">
        <h2 class="font-display font-bold text-xl text-primary mb-4">Your Order</h2>
        <div class="space-y-4">
          <div class="flex justify-between border-b pb-4">
            <div class="flex items-center">
              <img src="https://via.placeholder.com/60" alt="Dog Food" class="w-12 h-12 object-cover rounded-lg mr-3">
              <div>
                <p class="font-medium">Premium Dog Food</p>
                <p class="text-sm text-gray-600">2 × $24.99</p>
              </div>
            </div>
            <span class="font-medium">$49.98</span>
          </div>
          <div class="flex justify-between border-b pb-4">
            <div class="flex items-center">
              <img src="https://via.placeholder.com/60" alt="Cat Toy" class="w-12 h-12 object-cover rounded-lg mr-3">
              <div>
                <p class="font-medium">Cat Feather Toy</p>
                <p class="text-sm text-gray-600">1 × $12.99</p>
              </div>
            </div>
            <span class="font-medium">$12.99</span>
          </div>
          <div class="space-y-2 pt-2">
            <div class="flex justify-between">
              <span>Subtotal</span>
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
            <div class="flex justify-between font-display font-bold text-lg pt-2">
              <span>Total</span>
              <span>$68.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function nextStep() {
    // Add form validation and step transition logic here
    // window.location.href = '/checkout/payment';
  }
</script>