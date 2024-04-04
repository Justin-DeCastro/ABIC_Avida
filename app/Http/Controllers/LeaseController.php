<?php

namespace App\Http\Controllers;
use App\Models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index()
    {
        $lease = Lease::all();
        return view('leasing.index', compact('lease'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:20480',

            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string',
            'contact' => 'required|string|digits:11', // Assuming contact is a 10-digit string
            'amenities' => 'required|string|max:255',
        ]);

        // Handle file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/lease'), $imageName);

        // Create a new Sale instance
        $lease = new Lease();
        $lease->image = $imageName;
        $lease->name = $request->name;
        $lease->description = $request->description;
        $lease->price = $request->price;
        $lease->contact = $request->contact; // Storing contact information
        $lease->amenities = $request->amenities; // Storing amenities information
        $lease->save();

        // Redirect back or to a specific route
        return redirect()->route('lease.index')->with('success', 'Sale created successfully');
    }
    public function destroy(Lease $lease)
{
    try {
        // Find the sale record by ID
        $lease = Lease::findOrFail($lease);

        // Delete the sale record
        $lease->delete();

        // Redirect back or to a specific route
        return redirect()->route('lease.index')->with('success', 'Lease deleted successfully');
    } catch (\Exception $e) {
        // If the sale record cannot be found or any other error occurs
        return redirect()->route('lease.index')->with('error', 'Failed to delete lease: ' . $e->getMessage());
    }
}

}


