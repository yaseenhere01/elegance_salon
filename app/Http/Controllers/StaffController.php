<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    public function add_staff_admin(){
        return view('admin.add_staff_admin');
    }

    public function all_staff_admin(){
        $staff = staff::all();
        return view('admin.all_staff_admin' , compact('staff'));
    }

 

    // userdashboard
    public function view_staff(){
        $staff = staff::all();
        return view('userdashboard.view_staff' , compact('staff'));
    }

    public function upload_staff_admin(Request $request){
        $staff = new staff();
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('staffimg' , $imagename);
            $staff->image = $imagename;

            $staff->name = $request->name;
            $staff->email = $request->email;
            $staff->phone = $request->phone;
            $staff->address = $request->address;
            $staff->shift = $request->shift;
            $staff->date = $request->date;
            $staff->time = $request->time;
            $staff->save();
            return redirect()->back();
        }

        public function delete_staff_fetch_admin($id){
            $staff = staff::find($id)->delete();
            return redirect()->back();
        }

        public function edit_staff_fetch_admin($id){
            $staff = staff::find($id);
            return view('admin.edit_staff_fetch_admin' , compact('staff'));
        }

        public function update_staff(Request $request , $id){
            $staff = staff::find($id);
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('staffimg' , $imagename);
            $staff->image = $imagename;

            $staff->name = $request->name;
            $staff->email = $request->email;
            $staff->phone = $request->phone;
            $staff->address = $request->address;
            $staff->shift = $request->shift;
            $staff->date = $request->date;
            $staff->time = $request->time;
            $staff->save();
            return redirect()->back();
            
        }
}
