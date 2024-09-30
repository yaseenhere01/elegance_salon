<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return post::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'shift'=>'required',
            'time'=>'required',
        ]);
        return post::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = post::find($id);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = post::find($id);
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'shift'=>'required',
            'time'=>'required',
        ]);
        post::update($request->all());
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = post::find($id);
        $post->delete();
        return \response()->json(null , 204);
    }
}
