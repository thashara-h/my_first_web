<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - PawMart Pet Care</title>
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
</head>
<body class="bg-light/10 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-accent/10">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-dark font-display mb-6">My Orders</h2>
                
                @if(count($orders) > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-b border-accent/10">
                                <th class="px-6 py-3 text-left text-dark font-display">Order #</th>
                                <th class="px-6 py-3 text-left text-dark font-display">Date</th>
                                <th class="px-6 py-3 text-left text-dark font-display">Items</th>
                                <th class="px-6 py-3 text-left text-dark font-display">Total</th>
                                <th class="px-6 py-3 text-left text-dark font-display">Status</th>
                                <th class="px-6 py-3 text-left text-dark font-display">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr class="border-b border-accent/10 hover:bg-light/5">
                                <td class="px-6 py-4">{{ $order->order_number }}</td>
                                <td class="px-6 py-4">{{ $order->created_at->format('d M Y') }}</td>
                                <td class="px-6 py-4">{{ count($order->items) }} items</td>
                                <td class="px-6 py-4">Rs. {{ number_format($order->total, 2) }}</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-1 rounded-full text-xs 
                                        {{ $order->status === 'completed' ? 'bg-green-100 text-green-800' : 
                                           ($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('order.details', $order->id) }}" class="text-primary hover:text-primary-dark mr-3">
                                        View
                                    </a>
                                    <a href="{{ route('order.invoice', $order->id) }}" class="text-accent hover:text-accent-dark">
                                        Invoice
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4">
                    {{ $orders->links() }}
                </div>
                @else
                <div class="text-center py-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-accent mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-xl font-medium text-dark mb-2">No orders found</h3>
                    <p class="text-accent mb-4">You haven't placed any orders yet.</p>
                    <a href="{{ route('shop') }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark inline-block">
                        Start Shopping
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>