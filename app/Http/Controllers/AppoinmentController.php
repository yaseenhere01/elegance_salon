<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Models\appoinment;
use App\Models\myappoinment;

class AppoinmentController extends Controller
{
    public function all_appoinments_fetch(){
        $appo = appoinment::all();
        return view('admin.all_appoinments_fetch' , compact('appo'));
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
            return view('user.edit_appoinments' , compact('appo'));
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

        public function req_app($id){
            $appo = appoinment::find($id);
            $appo->status = "Approved";
            $appo->save();
            return redirect()->back();
        }

        public function req_can($id){
            $appo = appoinment::find($id);
            $appo->status = "canceled";
            $appo->save();
            return redirect()->back();
        }

        public function app_delete($id){
            $appo = appoinment::find($id)->delete();
            return redirect()->back();

        }

        public function cancel_req($id){
            $appo = appoinment::find($id);
            $appo->status = "Cancel";
            $appo->save();
            return redirect()->back();
        }
}
