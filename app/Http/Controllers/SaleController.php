<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
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
        $request->image->move(public_path('images/sale'), $imageName);

        // Create a new Sale instance
        $sale = new Sale();
        $sale->image = $imageName;
        $sale->name = $request->name;
        $sale->description = $request->description;
        $sale->price = $request->price;
        $sale->contact = $request->contact; // Storing contact information
        $sale->amenities = $request->amenities; // Storing amenities information
        $sale->save();

        // Redirect back or to a specific route
        return redirect()->route('sales.index')->with('success', 'Sale created successfully');
    }
    public function destroy($id)
{
    try {
        // Find the sale record by ID
        $sale = Sale::findOrFail($id);

        // Delete the sale record
        $sale->delete();

        // Redirect back or to a specific route
        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully');
    } catch (\Exception $e) {
        // If the sale record cannot be found or any other error occurs
        return redirect()->route('sales.index')->with('error', 'Failed to delete sale: ' . $e->getMessage());
    }
}

}
