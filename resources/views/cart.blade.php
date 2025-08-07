<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - PawMart Pet Care</title>
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
</head>
<body class="bg-light/10">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-dark font-display">Your Shopping Cart</h1>
        
        @if(count($cartItems) > 0)
        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-accent/10">
            <table class="min-w-full">
                <thead>
                    <tr class="border-b border-accent/10">
                        <th class="px-6 py-3 text-left text-dark font-display">Product</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Price</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Quantity</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Total</th>
                        <th class="px-6 py-3 text-left text-dark font-display">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $key => $item)
                    <tr class="border-b border-accent/10">
                        <td class="px-6 py-4 flex items-center">
                            <img src="{{ asset('storage/'.$item['image']) }}" 
                                 alt="{{ $item['name'] }}" 
                                 class="w-16 h-16 object-cover rounded">
                            <div class="ml-4">
                                <h3 class="font-medium text-dark">{{ $item['name'] }}</h3>
                                <p class="text-sm text-accent">{{ ucfirst($item['type']) }} Food</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-dark">LKR {{ number_format($item['price'], 2) }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('cart.update', $key) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="flex items-center">
                                    <input type="number" 
                                           name="quantity" 
                                           value="{{ $item['quantity'] }}" 
                                           min="1" 
                                           max="100"
                                           class="w-20 px-3 py-1 border border-accent/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary/50">
                                    <button type="submit" 
                                            class="ml-2 px-3 py-1 bg-primary text-white rounded-lg hover:bg-primary-dark transition">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </td>
                        <td class="px-6 py-4 text-dark font-medium">LKR {{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('cart.remove', $key) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-500 hover:text-red-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="p-6 border-t border-accent/10">
                <div class="flex justify-between mb-2">
                    <span class="text-accent">Subtotal:</span>
                    <span class="text-dark font-medium">LKR {{ number_format($subtotal, 2) }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-accent">Tax (10%):</span>
                    <span class="text-dark font-medium">LKR {{ number_format($tax, 2) }}</span>
                </div>
                <div class="flex justify-between pt-3 border-t border-accent/10">
                    <span class="text-lg font-bold text-dark">Total:</span>
                    <span class="text-lg font-bold text-primary">LKR {{ number_format($total, 2) }}</span>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-between">
            <form action="{{ route('cart.clear') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="px-4 py-2 bg-light/10 text-light rounded-lg hover:bg-light/20 transition">
                    Clear Cart
                </button>
            </form>
            <a href="{{ route('checkout') }}" 
               class="px-4 py-2 bg-primary text-light rounded-lg hover:bg-primary-dark transition">
                Proceed to Checkout
            </a>
        </div>
        @else
        <div class="bg-white rounded-xl shadow-md p-8 text-center border border-accent/10">
            <h2 class="text-xl font-medium text-dark mb-4">Your cart is empty</h2>
            <a href="/products" 
               class="px-4 py-2 bg-primary text-light rounded-lg hover:bg-primary-dark transition">
                Continue Shopping
            </a>
        </div>
        @endif
    </div>

    <footer class="bg-dark text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-light">© 2023 PawMart Pet Care. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Quantity input validation
            document.querySelectorAll('input[type="number"]').forEach(input => {
                input.addEventListener('change', function() {
                    if (this.value < 1) this.value = 1;
                    if (this.value > 100) this.value = 100;
                });
            });
        });
    </script>
</body>
</html>