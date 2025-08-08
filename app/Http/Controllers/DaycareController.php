<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Daycare;
class DaycareController extends Controller
{
  public function create()
{
    return view('admin.daycare.add'); 
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
        $appointment = Daycare::create($validated);
        
        if (auth()->check() && auth()->user()->role === 'admin') {
        // Admin created appointment → go back to admin list
        return redirect()->route('admin.daycare.index')->with('success', 'Appointment created successfully!');
    }

        // Pet owner → show confirmation page
        return redirect()->route('daycare.orderconfirm', $appointment->id);

            
    } catch (\Exception $e) {
        return back()
            ->withInput()
            ->with('error', 'Error creating appointment: ' . $e->getMessage());
    }
}


        

       

    public function index()
    {
        $appointments = Daycare::orderBy('appointment_date', 'desc')
                        
                        ->paginate(10);

        return view('admin.daycare.index', compact('appointments'));
    }

    public function edit(Daycare $appointment)
    {
        return view('admin.daycare.edit', compact('appointment'));
    }

     public function update(Request $request, Daycare $appointment)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        $appointment->update($validated);

        return redirect()->route('admin.daycare.index')
                        ->with('success', 'Appointment updated successfully');
    }

    public function destroy(Daycare $appointment)
    {
        if ($appointment->vaccination_path) {
            Storage::disk('public')->delete($appointment->vaccination_path);
        }

        $appointment->delete();

        return redirect()->route('admin.daycare.index')
                        ->with('success', 'Appointment deleted successfully');
    }

    public function showConfirmation(Daycare $appointment){
     
        return view('daycareorderconfirm', ['appointment' => $appointment]);
    }

    public function show(Daycare $appointment)
{
    return view('admin.daycare.show', compact('appointment'));
}
}
