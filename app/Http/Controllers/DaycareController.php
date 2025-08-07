<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Daycare;
class DaycareController extends Controller
{
   public function create()
    {
        return view('admin.daycare.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Owner Information
            'owner_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            
            // Pet Details
            'pet_name' => 'required|string|max:255',
            'pet_age' => 'required|string|max:50',
            'pet_breed' => 'required|string|max:255',
            'temperament' => 'required|string|max:255',
            
            // Schedule
            'dropoff_time' => 'required|date_format:H:i',
            'pickup_time' => 'required|date_format:H:i|after:dropoff_time',
            'days_needed' => 'required|array',
            'days_needed.*' => 'string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
            
            // Feeding Instructions
            'food_type' => 'nullable|string|max:255',
            'feeding_schedule' => 'nullable|string|max:255',
            
            // Emergency Contact
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:20',
            
            // Vaccination
            //'vaccination_records' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            
            // System
            //'service_type' => 'required|string|in:day_care'
        ]);

        try {
            // Handle file upload
           /* if ($request->hasFile('vaccination_records')) {
                $path = $request->file('vaccination_records')->store('vaccination_records', 'public');
                $validated['vaccination_path'] = $path;
            }*/

            // Convert days array to string
            $validated['days_needed'] = implode(',', $validated['days_needed']);

            // Create daycare registration
            $daycare = Daycare::create($validated);

            return redirect()->route('admin.daycare.index')
                            ->with('success', 'Daycare registration created successfully!');

        } catch (\Exception $e) {
            return back()->withInput()
                        ->with('error', 'Error creating registration: ' . $e->getMessage());
        }
    }

    public function index()
    {
        $daycares = Daycare::latest()->paginate(10);
        return view('admin.daycare.index', compact('daycares'));
    }

    public function show(Daycare $daycare)
    {
        return view('admin.daycare.show', compact('daycare'));
    }

    public function edit(Daycare $daycare)
    {
        return view('admin.daycare.edit', compact('daycare'));
    }

    public function update(Request $request, Daycare $daycare)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected,completed',
            'notes' => 'nullable|string|max:500'
        ]);

        $daycare->update($validated);

        return redirect()->route('admin.daycare.index')
                        ->with('success', 'Registration updated successfully');
    }

    public function destroy(Daycare $daycare)
    {
        // Delete vaccination record file if exists
        if ($daycare->vaccination_path) {
            Storage::disk('public')->delete($daycare->vaccination_path);
        }

        $daycare->delete();

        return redirect()->route('admin.daycare.index')
                        ->with('success', 'Registration deleted successfully');
    }

    public function showConfirmation(Daycare $daycare){
     
        return view('orderconfirm', ['daycare' => $daycare]);
    }
}
