<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;



class OrderController extends Controller{
    

    public function index()
    {
    $orders = auth()->user()->orders()->latest()->paginate(10);
    return view('user.orders', compact('orders'));
    }


    

    public function confirmation($id)
{
    // Fetch order by ID (optional)
    $order = \App\Models\Order::findOrFail($id);

    // Return a view with order data 
    return view('confirmation', compact('order'));
}

public function invoice(Order $order)
{
    // Authorization check
    if (auth()->id() !== $order->user_id) {
        abort(403);
    }

    $pdf = Pdf::loadView('invoice', ['order' => $order]); 

    return $pdf->download('invoice-'.$order->order_number.'.pdf');
}

public function download($id)
{
    $order = \App\Models\Order::findOrFail($id);

    // Generate the PDF using a Blade view
    $pdf = \PDF::loadView('invoices.template', compact('order')); // Make sure 'resources/views/invoices/template.blade.php' exists

    return $pdf->download('invoice-' . $order->id . '.pdf');
}

public function showInvoice($id)
{
    $order = \App\Models\Order::findOrFail($id);

    return view('invoices.template', compact('order'));
}

public function adminManageOrders()
{
    $orders = \App\Models\Order::with('user')->orderBy('created_at', 'desc')->get(); // load all orders with user info
    return view('manageorders', compact('orders')); 
}



}
