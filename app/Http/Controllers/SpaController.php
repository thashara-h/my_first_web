<?php

namespace App\Http\Controllers;
use App\Models\Spa;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function create()
{
    return view('admin.spa.add'); 
} 

public function store(Request $request)
{
    $validated = $request->validate([
        'owner_name' => 'required|string|max:255',
        'contact_number' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'pet_name' => 'required|string|max:255',
        'breed' => 'required|string|max:255',
        'age' => 'required|string|max:50',
        'service_name' => 'required|string',
        'appointment_date' => 'required|date',
        'special_requests' => 'nullable|string',
        'status' => 'sometimes|in:pending,confirmed,completed,cancelled' // Default to 'pending' if not provided
    ]);

    // Set default status if not provided
    $validated['status'] = $validated['status'] ?? 'pending';

    try {
        $appointment = Spa::create($validated);
        
        if (auth()->check() && auth()->user()->role === 'admin') {
        // Admin created appointment → go back to admin list
        return redirect()->route('admin.spa.index')->with('success', 'Appointment created successfully!');
    }

        // Pet owner → show confirmation page
        return redirect()->route('spa.orderconfirm', $appointment->id);

            
    } catch (\Exception $e) {
        return back()
            ->withInput()
            ->with('error', 'Error creating appointment: ' . $e->getMessage());
    }
}


        

       

    public function index()
    {
        $appointments = Spa::orderBy('appointment_date', 'desc')
                        
                        ->paginate(10);

        return view('admin.spa.index', compact('appointments'));
    }

    public function edit(Spa $appointment)
    {
        return view('admin.spa.edit', compact('appointment'));
    }

     public function update(Request $request, Spa $appointment)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        $appointment->update($validated);

        return redirect()->route('admin.spa.index')
                        ->with('success', 'Appointment updated successfully');
    }

    public function destroy(Spa $appointment)
    {
        if ($appointment->vaccination_path) {
            Storage::disk('public')->delete($appointment->vaccination_path);
        }

        $appointment->delete();

        return redirect()->route('admin.spa.index')
                        ->with('success', 'Appointment deleted successfully');
    }

    public function showConfirmation(Spa $appointment){
     
        return view('spaorderconfirm', ['appointment' => $appointment]);
    }

    public function show(Spa $appointment)
{
    return view('admin.spa.show', compact('appointment'));
}
}
