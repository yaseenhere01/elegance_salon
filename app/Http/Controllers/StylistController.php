<?php

namespace App\Http\Controllers;

use App\Models\Stylist;
use Illuminate\Http\Request;

class StylistController extends Controller
{
    // Fetch all stylists and return the view
    public function index()
    {
        $stylists = Stylist::all();
        return view('stylist.stylist1', compact('stylists'));  // Pointing to the correct Blade file
    }

    // Store new stylist
    public function store(Request $request)
    {
        $stylist = new Stylist();
        $stylist->name = $request->name;
        $stylist->available = $request->available;
        $stylist->booked_appointments = $request->booked_appointments;
        $stylist->save();

        return redirect()->route('stylists.index');  // Redirect after storing
    }

    public function delete_appo($id){
        $stylist = Stylist::find($id)->delete();
        return redirect()->back();
    }
}
