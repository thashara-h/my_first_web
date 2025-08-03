<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add item from any category
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'product_type' => 'required|in:dog,cat,bird,other'
        ]);

        $cart = session()->get('cart', []);

        $key = $request->product_type . '-' . $request->product_id;

        if (isset($cart[$key])) {
            $cart[$key]['quantity']++;
        } else {
            $model = match($request->product_type) {
                'dog' => \App\Models\DogFood::find($request->product_id),
                'cat' => \App\Models\CatFood::find($request->product_id),
                'bird' => \App\Models\BirdFood::find($request->product_id),
                'other' => \App\Models\OtherFood::find($request->product_id),
            };

            if (!$model) {
                return back()->with('error', 'Product not found');
            }

            $cart[$key] = [
                'id' => $model->id,
                'name' => $model->product_name,
                'price' => $model->price,
                'image' => $model->image,
                'type' => $request->product_type,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Item added to cart!');
    }

    
    public function index()
    {
    $orders = auth()->user()->orders()->latest()->paginate(10);
    return view('user.orders', compact('orders'));
    }

    // View unified cart
    public function viewCart()
    {
        $cartItems = session('cart', []);
        
        // Calculate totals
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        return view('cart', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'tax' => $subtotal * 0.1, // Example 10% tax
            'total' => $subtotal * 1.1 // Subtotal + tax
        ]);
    }

    // Update item quantity
    public function updateItem(Request $request, $key)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:100'
        ]);

        $cart = session()->get('cart', []);

        if (!isset($cart[$key])) {
            return back()->with('error', 'Item not found in cart');
        }

        $cart[$key]['quantity'] = $request->quantity;
        session()->put('cart', $cart);

        return back()->with('success', 'Quantity updated');
    }

    // Remove item
    public function removeItem($key)
    {
        $cart = session()->get('cart', []);

        if (!isset($cart[$key])) {
            return back()->with('error', 'Item not found in cart');
        }

        unset($cart[$key]);
        session()->put('cart', $cart);

        return back()->with('success', 'Item removed');
    }

    // Clear entire cart
    public function clearCart()
    {
        session()->forget('cart');
        return back()->with('success', 'Cart cleared');
    }
}
