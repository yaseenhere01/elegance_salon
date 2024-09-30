<?php
namespace App\Http\Controllers;

use App\Models\MakeupArtist;
use Illuminate\Http\Request;

class MakeupArtistController extends Controller
{
    public function index()
    {
        $artists = MakeupArtist::all();
        return view('stylist.stylist3', compact('artists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'artist_name' => 'required|string|max:255',
            'available' => 'required|boolean',
        ]);

        MakeupArtist::create([
            'artist_name' => $request->artist_name,
            'available' => $request->available,
        ]);

        return redirect()->route('makeup-artists.index')->with('success', 'Artist added successfully.');
    }

    // Other methods (show, update, destroy) go here...

    public function delete_artist($id){
        $artists = MakeupArtist::find($id)->delete();
        return redirect()->back();
    }
}
