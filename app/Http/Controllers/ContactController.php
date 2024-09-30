<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function contact(){
        $con = contact::all();
        return view('user.contact');
    }

    public function upload_contact(Request $request){
        $con = new contact();
            $con->name = $request->name;
            $con->email = $request->email;
            $con->phone = $request->phone;
            $con->service = $request->service;
            $con->date = $request->date;
            $con->time = $request->time;
            $con->message = $request->message;
            $con->save();
            return redirect()->back();
        }

        public function view_contact(){
            $con = contact::all();
            return view('admin.view_contact' , compact('con'));
        }

        public function delete_contact($id){
            $con = contact::find($id)->delete();
            return redirect()->back();
        }

}
