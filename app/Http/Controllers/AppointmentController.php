<?php

namespace App\Http\Controllers;
use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'owner_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'pet_name' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'age' => 'required|string|max:50',
            'service_type' => 'required|string|in:spa_grooming,veterinary_care,day_care',
            'service_name' => 'required|string',
            'appointment_date' => 'required|date',
            'special_requests' => 'nullable|string',
            'pet_photo' => 'nullable|image|max:2048',
        ];

        // Additional rules based on service type
        if ($request->service_type === 'spa_grooming' || $request->service_type === 'veterinary_care') {
            $rules['appointment_time'] = 'required';
        }

        if ($request->service_type === 'day_care') {
            $rules['frequency'] = 'nullable|string';
            $rules['transportation'] = 'nullable|string';
            $rules['vaccination'] = 'nullable|file|mimes:pdf,jpg,png|max:2048';
        }

        $validated = $request->validate($rules);

        // Handle file uploads
        $petPhotoPath = null;
        if ($request->hasFile('pet_photo')) {
            $petPhotoPath = $request->file('pet_photo')->store('pet_photos', 'public');
        }

        $vaccinationPath = null;
        if ($request->hasFile('vaccination')) {
            $vaccinationPath = $request->file('vaccination')->store('vaccinations', 'public');
        }

        // Create appointment
        $appointment = Appointment::create([
            'owner_name' => $validated['owner_name'],
            'contact_number' => $validated['contact_number'],
            'email' => $validated['email'],
            'pet_name' => $validated['pet_name'],
            'breed' => $validated['breed'],
            'age' => $validated['age'],
            'service_type' => $validated['service_type'],
            'service_name' => $validated['service_name'],
            'appointment_date' => $validated['appointment_date'],
            'appointment_time' => $validated['appointment_time'] ?? null,
            'frequency' => $validated['frequency'] ?? null,
            'transportation' => $validated['transportation'] ?? null,
            'special_requests' => $validated['special_requests'] ?? null,
            'pet_photo_path' => $petPhotoPath,
            'vaccination_path' => $vaccinationPath,
        ]);

         return redirect()->route('orderconfirm')->with('success', 'Appointment booked successfully!');
    }

    // Admin methods
    public function index()
    {
        $appointments = Appointment::orderBy('appointment_date', 'desc')
                                  ->orderBy('appointment_time', 'desc')
                                  ->paginate(10);

        return view('appointments', compact('appointments'));
    }

    public function edit(Appointment $appointment)
    {
        return view('admin.appointments.edit', compact('appointment'));
    }

     public function update(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
            'admin_notes' => 'nullable|string',
        ]);

        $appointment->update($validated);

        return redirect()->route('admin.appointments.index')
                         ->with('success', 'Appointment updated successfully');
    }

    public function destroy(Appointment $appointment)
    {
        // Delete associated files
        if ($appointment->pet_photo_path) {
            Storage::disk('public')->delete($appointment->pet_photo_path);
        }
        if ($appointment->vaccination_path) {
            Storage::disk('public')->delete($appointment->vaccination_path);
        }

        $appointment->delete();

        return redirect()->route('admin.appointments.index')
                         ->with('success', 'Appointment deleted successfully');
    }
}
