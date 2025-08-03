<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - PawMart Pet Care</title>
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
        <h1 class="text-3xl font-bold mb-8 text-dark font-display">Checkout</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Order Summary -->
            <div class="md:col-span-2 bg-white p-6 rounded-xl shadow-md border border-accent/10">
                <h2 class="text-xl font-bold mb-4 text-dark font-display">Order Summary</h2>
                
                @foreach($cartItems as $key => $item)
                <div class="flex items-center justify-between py-4 border-b border-accent/10">
                    <div class="flex items-center">
                        <img src="{{ asset('storage/'.$item['image']) }}" 
                             alt="{{ $item['name'] }}" 
                             class="w-16 h-16 object-cover rounded-lg mr-4">
                        <div>
                            <h3 class="font-medium text-dark">{{ $item['name'] }}</h3>
                            <p class="text-sm text-accent">{{ ucfirst($item['type']) }} Food</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-dark font-medium mr-4">LKR {{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                        <span class="text-sm bg-light/10 text-light px-2 py-1 rounded-full">{{ $item['quantity'] }}x</span>
                    </div>
                </div>
                @endforeach
                
                <div class="mt-6 space-y-3">
                    <div class="flex justify-between">
                        <span class="text-accent">Subtotal:</span>
                        <span class="text-dark font-medium">LKR {{ number_format($subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-accent">Tax (10%):</span>
                        <span class="text-dark font-medium">LKR {{ number_format($tax, 2) }}</span>
                    </div>
                    <div class="flex justify-between pt-3 border-t border-accent/10">
                        <span class="text-lg font-bold text-dark">Total:</span>
                        <span class="text-lg font-bold text-primary">LKR {{ number_format($total, 2) }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Payment Form -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-accent/10">
                <h2 class="text-xl font-bold mb-4 text-dark font-display">Payment Details</h2>
                <form id="payment-form" action="{{ route('checkout.process') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label class="block text-dark font-medium mb-2">Card Number</label>
        <input type="text" name="card_number"
               class="w-full px-4 py-2 border border-accent/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary/50" 
               placeholder="1234 5678 9012 3456"
               required>
    </div>
    
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
            <label class="block text-dark font-medium mb-2">Expiry Date</label>
            <input type="text" name="expiry_date"
                   class="w-full px-4 py-2 border border-accent/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary/50" 
                   placeholder="MM/YY"
                   required>
        </div>
        <div>
            <label class="block text-dark font-medium mb-2">CVV</label>
            <input type="text" name="cvv"
                   class="w-full px-4 py-2 border border-accent/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary/50" 
                   placeholder="123"
                   required>
        </div>
    </div>
    
    <div class="mb-6">
        <label class="block text-dark font-medium mb-2">Name on Card</label>
        <input type="text" name="card_name"
               class="w-full px-4 py-2 border border-accent/20 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary/50" 
               placeholder="John Doe"
               required>
    </div>
    
    <button type="submit" 
            class="w-full bg-primary hover:bg-primary-dark text-white py-3 rounded-lg font-medium transition duration-200">
        Complete Order (LKR {{ number_format($total, 2) }})
    </button>
</form>
                    
                    
                    
                    
                    <div class="mt-4 text-center">
                        <a href="{{ route('cart.view') }}" class="text-primary hover:text-primary-dark text-sm font-medium">
                            ← Return to Cart
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-light">© 2023 PawMart Pet Care. All rights reserved.</p>
        </div>
    </footer>

    <!-- Simple Cart Notification -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show notification when item is added to cart
            @if(session('success'))
                setTimeout(() => {
                    const cartLink = document.querySelector('a[href="/cart"]');
                    if (cartLink) {
                        cartLink.classList.add('animate-bounce');
                        setTimeout(() => cartLink.classList.remove('animate-bounce'), 2000);
                    }
                }, 300);
            @endif
        });
    </script>
</body>
</html>