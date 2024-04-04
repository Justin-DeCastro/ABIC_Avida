<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Concept;
use App\Models\Amenity;
use App\Models\Sale;
use App\Models\Lease;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function appointment()
    {
        return view('reserve');
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
}

