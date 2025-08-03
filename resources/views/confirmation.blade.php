<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - PawMart Pet Care</title>
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
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md overflow-hidden border border-accent/10">
            <!-- Success Header -->
            <div class="bg-primary/10 p-6 text-center border-b border-accent/10">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-dark font-display mb-2">🎉 Thank you! Your order has been placed successfully.</h1>
                <p class="text-accent">A confirmation email has been sent to {{ auth()->user()->email }}</p>
            </div>

            <!-- Order Details -->
            <div class="p-6 space-y-6">
                <!-- Payment Info -->
                <div class="bg-light/5 p-4 rounded-lg">
                    <h2 class="text-xl font-bold text-dark font-display mb-3">💵 Payment Information</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-accent">Total Paid:</p>
                            <p class="text-dark font-medium">Rs. {{ number_format($order->total, 2) }}</p>
                        </div>
                        
                        <div>
                            <p class="text-accent">Transaction ID:</p>
                            <p class="text-dark font-medium">{{ $order->transaction_id ?? 'N/A' }}</p>
                        </div>
                        <div>
                            <p class="text-accent">Payment Status:</p>
                            <p class="text-dark font-medium">{{ ucfirst($order->status) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="bg-light/5 p-4 rounded-lg">
                    <h2 class="text-xl font-bold text-dark font-display mb-3">🧾 Order Summary</h2>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <p class="text-accent">Order Number:</p>
                            <p class="text-dark font-medium">{{ $order->order_number }}</p>
                        </div>
                        <div>
                            <p class="text-accent">Order Date:</p>
                            <p class="text-dark font-medium">{{ $order->created_at->format('d-M-Y') }}</p>
                        </div>
                    </div>

                    <h3 class="font-bold text-dark mb-2">Items Ordered:</h3>
                    <div class="divide-y divide-accent/10">
                        @foreach($order->items as $item)
                        <div class="py-3 flex justify-between">
                            <div>
                                <p class="text-dark font-medium">{{ $item['name'] }}</p>
                                <p class="text-sm text-accent">{{ $item['quantity'] }} x Rs. {{ number_format($item['price'], 2) }}</p>
                            </div>
                            <p class="text-dark font-medium">Rs. {{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-4 pt-4 border-t border-accent/10">
                        <div class="flex justify-between">
                            <p class="text-accent">Subtotal:</p>
                            <p class="text-dark">Rs. {{ number_format($order->subtotal, 2) }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-accent">Tax (10%):</p>
                            <p class="text-dark">Rs. {{ number_format($order->tax, 2) }}</p>
                        </div>
                        <div class="flex justify-between font-bold text-lg mt-2">
                            <p class="text-dark">Total:</p>
                            <p class="text-primary">Rs. {{ number_format($order->total, 2) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Delivery/Appointment Info -->
                @if($order->delivery_info)
                <div class="bg-light/5 p-4 rounded-lg">
                    <h2 class="text-xl font-bold text-dark font-display mb-3">📦 Delivery Information</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-accent">Expected Delivery:</p>
                            <p class="text-dark font-medium">{{ $order->delivery_info['expected_delivery'] }}</p>
                        </div>
                        <div>
                            <p class="text-accent">Delivery Address:</p>
                            <p class="text-dark font-medium">{{ $order->delivery_info['address'] }}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if($order->appointment_info)
                <div class="bg-light/5 p-4 rounded-lg">
                    <h2 class="text-xl font-bold text-dark font-display mb-3">🕒 Appointment Information</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-accent">Appointment Date:</p>
                            <p class="text-dark font-medium">{{ $order->appointment_info['date'] }}</p>
                        </div>
                        <div>
                            <p class="text-accent">Appointment Time:</p>
                            <p class="text-dark font-medium">{{ $order->appointment_info['time'] }}</p>
                        </div>
                        <div>
                            <p class="text-accent">Location:</p>
                            <p class="text-dark font-medium">{{ $order->appointment_info['location'] }}</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="p-6 border-t border-accent/10 grid grid-cols-1 md:grid-cols-4 gap-4">
                <a href="{{ route('user.orders') }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark text-center">
                    🔍 View My Orders
                </a>
                <a href="{{ route('home') }}" class="px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary/10 text-center">
                    🏠 Back to Home
                </a>
                <a href="{{ route('order.invoice', $order->id) }}" class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-accent-dark text-center">
                    🧾 Download Invoice
                </a>
                <button onclick="window.print()" class="px-4 py-2 border border-accent text-accent rounded-lg hover:bg-accent/10 text-center">
                    🖨️ Print Receipt
                </button>
            </div>
        </div>
    </div>
</body>
</html>