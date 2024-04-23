<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Concept;
use App\Models\Amenity;
use App\Models\Sale;
use App\Models\Lease;
use App\Models\Award;
class HomeController extends Controller
{
    public function home()
    {
        $sales = Sale::all();
        $saleNames = $sales->pluck('name')->unique();

        $leases = Lease::all(); // Corrected variable name
        $leaseNames = $leases->pluck('name')->unique();

        $names = $saleNames->merge($leaseNames)->unique(); // Merge and make unique

        return view('home', compact('names'));
    }

    public function forsaleland()
    {
        $sales = Sale::all();
        return view('forsale.land', compact('sales'));
    }
    public function forleaseland()
    {
        $leases = Lease::all();
        return view('forlease.land', compact('leases'));
    }
    public function appointment()
    {
        return view('reserve');
    }
    public function awardindex()
    {
        $awards = Award::all();
        return view('award.index', compact('awards'));
    }
    public function destroy(Award $award)
{
    $award->delete();
    return redirect()->back()->with('success', 'Award deleted successfully!');
}

    public function award()
    {
        $awards = Award::all();
        return view('award.award', compact('awards'));
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:20480',

            'title' => 'required|string|max:255',

        ]);

        // Handle file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/award'), $imageName);

        // Create a new Sale instance
        $award = new Award();
        $award->image = $imageName;
        $award->title = $request->title;

        $award->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Award created successfully!');
    }

    public function forsale()
    {
        $sales = Sale::all();
        return view('sales.forsale',  compact('sales'));
    }
    public function viewsale($id)
    {
        $sale = Sale::findOrFail($id);
        return view('sales.id', compact('sale'));
    }
    public function viewlease($id)
    {
        $leases = Lease::findOrFail($id);
        return view('leasing.id', compact('leases'));
    }

    public function forlease()
    {
        $leases = Lease::all();
        return view('leasing.leasing', compact('leases'));
    }
    public function book()
    {
        $amenities = Amenity::all();
        $concepts = Concept::all();
        return view('properties.book', compact('concepts','amenities'));
    }
    public function properties()
    {
        $properties = Properties::all();
        return view('properties', compact('properties'));
    }
    public function dashboard()
    {
        return view('admin/index');
    }
    public function index()
    {
        return view('admin/index');
    }
    public function contactform()
    {
        return view('contact/home');
    }
}

