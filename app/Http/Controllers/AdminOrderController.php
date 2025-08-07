<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class AdminOrderController extends Controller
{
    public function index(){
    // Get all orders, latest first, paginated
    $orders = Order::with('user') // eager-load user to prevent N+1 queries
                   ->latest()
                   ->paginate(10); // Adjust per-page number if needed

    return view('manageorders', compact('orders'));
}

public function destroy(Order $order)
    {
        // Authorization - only admin can delete orders
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action');
        }

        try {
            $order->delete();
            return redirect()->route('orders.manage')
                ->with('success', 'Order #'.$order->order_number.' deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('fail', 'Failed to delete order: '.$e->getMessage());
        }
    }

    //multiple rows deletion
    public function bulkDestroy(Request $request)
    {
        // Authorization - only admin can delete orders
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action');
        }

        $request->validate([
            'order_ids' => 'required|array',
            'order_ids.*' => 'exists:orders,id'
        ]);

        try {
            Order::whereIn('id', $request->order_ids)->delete();
            return redirect()->route('orders.manage')
                ->with('success', count($request->order_ids).' orders deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('fail', 'Failed to delete orders: '.$e->getMessage());
        }
    }



}
