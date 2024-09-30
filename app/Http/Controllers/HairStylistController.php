<?php

namespace App\Http\Controllers;

use App\Models\HairStylist;
use Illuminate\Http\Request;

class HairStylistController extends Controller
{
    // Fetch all hair stylists
    public function index()
    {
        $stylists = HairStylist::all();
        return view('stylist.stylist2', compact('stylists'));
    }

    // Insert a new hair stylist
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'available' => 'required|boolean',
        ]);

        HairStylist::create([
            'name' => $request->name,
            'available' => $request->available,
            'booked_appointments' => 0, // Initialize booked appointments to 0
        ]);

        return redirect()->route('hair-stylists.index')->with('success', 'Hair Stylist added successfully.');
    }

    public function delete_hair($id){
        $stylist = HairStylist::find($id)->delete();
        return redirect()->back();
    }
}

