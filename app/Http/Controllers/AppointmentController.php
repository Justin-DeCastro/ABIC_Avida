<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'transaction_type' => 'required|in:booking,check_inquiry,check_release',
        ]);

        Appointment::create($validatedData);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function appointments()
    {
        $appointments = Appointment::all();
        return view('admin.appointment', ['appointments' => $appointments]);
    }

    public function acceptAppointment($id) // Assuming this is your method for accepting appointments
{
    $appointment = Appointment::findOrFail($id);

    // Update the appointment status to "Accepted"
    $appointment->status = 'Accepted';
    $appointment->save();

    // Send email notification to the appointment holder
    $data = [
        'subject' => 'Good Day! MR/MS ' . $appointment->name . ', Your appointment on ' . $appointment->date . ' has been accepted. Thank You!',
        'fullname' => $appointment->name,
        'date' => $appointment->date,
        'message' => '',
    ];

    Mail::to($appointment->email)->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Appointment accepted successfully.');
}

    public function cancelAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);

        // Perform actions to cancel appointment
        $appointment->status = 'Canceled';
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment canceled successfully.');
    }

    public function delete($appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        $appointment->delete();

        return redirect()->back()->with('success', 'Appointment deleted successfully!');
    }
}
