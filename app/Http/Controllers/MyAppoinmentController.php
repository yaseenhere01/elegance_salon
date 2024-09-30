<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myappoinment;
use App\Models\appoinment;

class MyAppoinmentController extends Controller
{
    public function myappoinment(){
        $appo = appoinment::all();
        return view('user.myappoinment' , compact('appo'));
    }

  

    public function upload_appoinments(Request $request){
        $appo = new appoinment();
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('stock-image' , $imagename);
            $appo->image = $imagename;

            $appo->name = $request->name;
            $appo->email = $request->email;
            $appo->phone = $request->phone;
            $appo->address = $request->address;
            $appo->save();
            return redirect()->back();
        }

        public function delete_appoinments($id){
            $appo = appoinment::find($id)->delete();
            return redirect()->back();
        }

        public function edit_appoinments($id){
            $appo = appoinment::find($id);
            return view('user.edit_myappoinments' , compact('appo'));
        }

        public function update_appoinments(Request $request , $id){
            $appo = appoinment::find($id);
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('stock-image' , $imagename);
            $appo->image = $imagename;

            $appo->name = $request->name;
            $appo->email = $request->email;
            $appo->phone = $request->phone;
            $appo->address = $request->address;
            $appo->save();
            return redirect()->back();
            
        }

        public function app_delete($id){
            $appo = appoinment::find($id)->delete();
            return redirect()->back();

        }

}
