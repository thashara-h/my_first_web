<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Mail\OrderConfirmation;

class CheckoutController extends Controller
{
   public function index()
    {
        $cartItems = session('cart', []);
        
        if (empty($cartItems)) {
            return redirect()->route('cart.view')->with('error', 'Your cart is empty');
        }

        // Calculate totals (same as in CartController)
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        
        $tax = $subtotal * 0.1; // Example 10% tax
        $total = $subtotal + $tax;

        return view('checkout', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total
        ]);
    }

    

public function process(Request $request)
{
    $cartItems = session('cart', []);
    $user = auth()->user();
    
    // Calculate totals
    $subtotal = array_reduce($cartItems, fn($carry, $item) => $carry + ($item['price'] * $item['quantity']), 0);
    $tax = $subtotal * 0.1; // 10% tax
    $total = $subtotal + $tax;
    
    // Create order
     $order = Order::create([
    'user_id' => $user->id,
    'order_number' => 'ORD-' . strtoupper(Str::random(8)), // Fixed syntax
    'subtotal' => $subtotal,
    'tax' => $tax,
    'total' => $total,
    
    'transaction_id' => $request->transaction_id ?? null,
    'status' => 'completed',
    'items' => $cartItems,
    'delivery_info' => $this->getDeliveryInfo($request),
    'appointment_info' => $this->getAppointmentInfo($request)
]);
    
    // Clear cart
    session()->forget('cart');
    
    // Send notifications
    \Log::info('Order created for user ' . $user->id . ', email sending disabled');
    $this->notifyAdmin($order);
    
    return redirect()->route('order.confirmation', $order->id);
}

protected function sendOrderConfirmation(User $user, Order $order)
{
    try {
        Mail::to($user->email)->send(new OrderConfirmation($order));
    } catch (\Exception $e) {
        // Log error but don't break the flow
        \Log::error('Order confirmation email failed: ' . $e->getMessage());
    }
}

protected function getDeliveryInfo($request)
{
    if ($request->has('delivery')) {
        return [
            'expected_delivery' => now()->addDays(3)->format('d-M-Y') . ' to ' . now()->addDays(5)->format('d-M-Y'),
            'address' => $request->delivery_address
        ];
    }
    return null;
}

protected function getAppointmentInfo($request)
{
    if ($request->has('appointment')) {
        return [
            'date' => $request->appointment_date,
            'time' => $request->appointment_time,
            'location' => 'PawMart Clinic, Colombo 7'
        ];
    }
    return null;
}


    
 

protected function processPayment($paymentData)
{
    // Implement your payment gateway integration here
    // This is just a placeholder - implement Stripe, PayPal, etc.
    return ['success' => true, 'message' => 'Payment successful'];
}

protected function createOrder($user, $cartItems)
{
    // Implement your order creation logic here
    // This is just a placeholder
    return (object) [
        'id' => rand(1000, 9999),
        'total' => array_reduce($cartItems, fn($carry, $item) => $carry + ($item['price'] * $item['quantity']), 0) * 1.1
    ];
}

public function success()
{
    if (!session()->has('order_id')) {
        return redirect()->route('home');
    }

    return view('checkout.success', [
        'order_id' => session('order_id'),
        'total' => session('total')
    ]);
}
}
